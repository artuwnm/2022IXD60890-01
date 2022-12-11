<?php 

include "../lib/php/functions.php";

$empty_product = (object) [
	"name"=>"Uncle Neal",
	"description"=>"Pre-prohibition Lager",
	"price"=>"13.72",
	"category"=>"Lager",
	"thumbnail"=>"12_1.jpg",
	"images"=>"12_1.jpg"
];








// LOGIC
try {
	$conn = makePDOConn();
		$whatIsAction = isset($_GET['action']) ? true : false;

	switch($whatIsAction) {
		case "update":
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`price`=?,
					`description`=?,
					`category`=?,
					`thumbnail`=?,
					`images`=?,
					`date_modify`=NOW()
				WHERE `id`=?
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-price'],
				$_POST['product-description'],
				$_POST['product-category'],
				$_POST['product-thumbnail'],
				$_POST['product-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id{$_GET['id']}");
			break;
		case "create":
			$statement = $conn->prepare("INSERT INTO
					`products`
					(
						`name`,
						`price`,
						`description`,
						`category`,
						`thumbnail`,
						`images`,
						`date_create`,
						`date_modify`
					)
					VALUES (?,?,?,?,?,?,NOW(),NOW())
					");
				$statement->execute([
					$_POST['product-name'],
					$_POST['product-price'],
					$_POST['product-description'],
					$_POST['product-category'],
					$_POST['product-thumbnail'],
					$_POST['product-images'],
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
} catch(PDOException $e) {
	die($e->getmessage());
}



// TEMPLATES
function productListItem($r,$o) {
return $r.<<<HTML
	<div class="card soft prodict-edit-list">
		<div class="display-flex">
			<div class="flex-none images-thumbs"><img src='./img/$o->thumbnail'></div>
			<div class="display-flex individual-product-edit">
				<div class="edit-name">$o->name</div>
				<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button" style=" width: 180px ;padding:0.3em 2em">Edit</a></div>
			</div>
		</div>
	</div>
HTML;
}




function showProductPage($o) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce (explode(", ", $o->images),function($r,$o){return $r."<img src='./img/$o'>";});

// heredoc
$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Category</label>
		<span>$o->category</span>
	</div>
	<div class="form-control">
		<label class="form-label">Thumbnail</label>
		<span class="images-thumbs"><img src='./img/$o->thumbnail'></span>
	</div>
	<div class="form-control">
		<label class="form-label">Other Images</label>
		<span class="images-thumbs">$images</span>
	</div>
</div>
HTML;	


$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit Product</h2>
	<div class="form-control">
		<label class="form-label" for="product-name">Name</strong>
		<input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter the Product Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-price">Price</strong>
		<input class="form-input" name="product-price" id="product-price" type="number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Product Price">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-category">Category</strong>
		<input class="form-input" name="product-category" id="product-category" type="text" value="$o->category" placeholder="Enter the Product Category">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-description">Description</strong>
		<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
	</div>
	<div class="form-control">
		<label class="form-label" for="product-thumbnail">Thumbnail</strong>
		<input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the Product Thumbnail">
	</div>
	<div class="form-control">
		<label class="form-label" for="product-images">Other Images</strong>
		<input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the Product Images">
	</div>
	<div class="form-control">
		<input class="form-button3" type="submit" value="Save Changes">
	</div>

</form>
HTML;

$output = $id == "new" ? "<div class='card soft'>$form</div>" : 
	"<div class='grid gap'>
	<div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
	<div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
	</div>
	";


$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";


echo <<<HTML
<div class="card soft">
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>
</div>
$output
HTML;
}








?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Admin Page</title>

<?php include "../parts/meta.php"?>
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
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					<li><a href="http://www.nikoline.ch/aau/ixd608/christiansen.nikoline">Main Page</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		
			<?php 

			if(isset($_GET['id'])) {
				showProductPage(
					$_GET['id']=="new" ?
						$empty_product :
						$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
			
			} else {

			?>
			<h2>Product List</h2>


			<div class="display-flex edit-product-gap container-edit-list">
			<?php 

			$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

			echo array_reduce($result,'productListItem');

			?>
		</div>


		<?php } ?>


	</div>
</body>