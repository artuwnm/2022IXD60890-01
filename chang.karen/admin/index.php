<?php

include_once "../lib/php/functions.php";


$empty_product = (object)[
	"name"=>"Chocolate Donut",
	"price"=>"3.99",
	"quantity"=>"25",
	"description"=>"Our chocolate donuts go well with your breakfast milk and afternoon coffee!",
	"images"=>"chocolatedonut.jpg",
	"category"=>"dessert"
];


//LOGIC

try {
	$conn = makePDOConn();
	$action = isset($_GET['action']) ? $_GET['action'] : "";

	switch($action) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET
				`name`=?,
				`price`=?,
				`quantity`=?,
				`description`=?,
				`category`=?,
				`images`=?,
				`date_modify`=NOW()
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-quantity'],
				$_POST['product-description'],
				$_POST['product-category'],
				$_POST['product-image'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`price`,
					`quantity`,
					`description`,
					`category`,
					`images`,
					`date_create`,
					`date_modify`
				)
				VALUES (?,?,?,?,?,?,NOW(),NOW())
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-quantity'],
				$_POST['product-description'],
				$_POST['product-category'],
				$_POST['product-image']
			]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;
		case "delete":
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
} catch(PDOException $e){
	die($e->getMessage());
}


//TEMPLATES

function productListItem($r,$o) {
	return $r.<<<HTML
	<div class="card soft">
		<div class="display-flex">
			<div class="flex-none"><img src="img/$o->images" style="height:100px;width:100px;border-radius:5px;margin-right:10px"></div>
			<div class="flex-stretch">$o->name</div>
			<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button" style="padding-left:20px;padding-right:20px;padding-top:3px;padding-bottom:3px">Edit</a></div>
		</div>
	</div>
	HTML;
}

function showProductPage($o){

$id = $_GET['id'];
$addoredit = $id=="new" ? "Add" : "Edit";
$createorupdate = $id=="new" ? "create" : "update";
$images = array_reduce(explode(", ", $o->images),function($r,$o){
	return $r."<img src='img/$o'>";
});

	//heredoc
	$display = <<<HTML
		<div>
			<h2>$o->name</h2>
			<div class="form-control">
				<strong>Name</strong>
				<span>$o->name</span>
			</div>
			<div class="form-control">
				<strong>Price</strong>
				<span>&dollar;$o->price</span>
			</div>
			<div class="form-control">
				<strong>Quantity</strong>
				<span>$o->quantity</span>
			</div>
			<div class="form-control">
				<strong>Description</strong><br>
				<span>$o->description</span>
			</div>
			<div class="form-control">
				<strong>Image</strong>
				<span><br><br><img src='img/$o->images' id="thumbnail_admin"></span>
			</div>
		</div>
	HTML;


	$form = <<<HTML
		<div class="item_info_wrap">
		<form method="POST" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
			<h2>$addoredit Product</h2>

			<div class="form-control" action="">
				<label class="form-label" for="product-name">Name</label>
				<input type="text" name="product-name" id="product-name" value="$o->name" class="form-input" placeholder="Enter the Product Name">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-price">Price</label>
				<input type="Number" min="0" max="1000" step="0.01" name="product-price" id="product-price" value="$o->price" class="form-input" placeholder="Enter the Product Price">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-quantity">Quantity</label>
				<input type="Number" min="0" max="255" step="1" name="product-quantity" id="product-quantity" value="$o->quantity" class="form-input" placeholder="Enter the Product Quantity">
			</div>
			<div class="form-control" action="">
				<label class="form-label" for="product-category">Category</label>
				<input type="text" name="product-category" id="product-category" value="$o->category" class="form-input" placeholder="Enter the Product Category">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-image">Image</label>
				<input type="text" name="product-image" id="product-image" value="$o->images" class="form-input" placeholder="Enter the Product Image">
			</div>
			<div class="form-control">
				<label class="form-label" for="product-description">Description</label>
				<textarea name="product-description" id="product-description" rows="6" style="resize:none" class="form-input" placeholder="Enter the Product Description">$o->description
				</textarea>
			</div>
			<div class="form-control">
				<input type="submit" class="form-button" value="Save">
			</div>
		</form>

		</div>
	HTML;

	$output = $id=="new" ? "<div class='card soft'>$form</div>": 
		"<div class='grid gap'>
			<div class='col-xs-12 col-md-7'><div class='card soft info'>$display</div></div>
			<div class='col-xs-12 col-md-5'><div class='card soft info'>$form</div></div>
		</div>
		";

	$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

	echo <<<HTML
		<nav class="display-flex">
				<div class="flex-stretch back_and_delete"><a id="back" href="{$_SERVER['PHP_SELF']}">Back</a></div> 
				<div id="delete" class="flex-none back_and_delete">$delete</div>
		</nav>
		$output
	HTML;
}

?>	
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
	<link rel="stylesheet" href="admin/adminstyle.css" />
</head>
<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li id="userlist_a"><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

		<?php 


		if(isset($_GET['id'])) {
			
				showProductPage(
				$_GET['id']=="new"?
				$empty_product :
				makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);

		}else {


		?>
		<h2 id="product_list_header">Product List</h2>

		<div class="list">
		<?php 

		$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

		echo array_reduce($result,'productListItem');

		?>
		</div>

	<?php } ?>

	</div>
	



</body>