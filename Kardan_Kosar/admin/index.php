<?

	include "../lib/php/functions.php";
	include "../parts/templates.php";


	$empty_product = (object)[
		"name"=>"vitamin BEE",
		"price"=>"2.00",
		"sku"=>"3021",
		"quantity"=>"2",		
		"category"=>"Letter Vitamin",
		"size"=>"60",
		"description"=>"nothing",
		"ingredients"=>"nothing",
		"benefits"=>"nothing",
		"rating"=>"2",
		"thumbnail"=>"KHealth_Vitamin_A_Hero.png",
		"images"=>"KHealth_Vitamin_A_Hero.png",
		"hero_images"=>"KHealth_Vitamin_A_Hero.png",
		"direction"=>"nothing",
		"benefit_image"=>"KHealth_Vitamin_A_Hero.png"
	];


	//LOGIC

	try{
		$conn = makePDOConn();

		$isFormUpdating = isset($_GET['action']) ? true : false;

		if ($isFormUpdating) {
			switch($_GET['action']){

				case "update":
					$statement = $conn->prepare("UPDATE `products` SET 
						`name` = ?,
						`price`= ?,
						`sku` = ?,
						`quantity` = ?,
						`category` = ?,
						`size` = ?,
						`description` =?,
						`ingredients` = ?,
						`benefits` = ?,
						`rating` = ?,
						`images` = ?,
						`thumbnail` = ?,
						`hero_images` = ?,
						`direction` = ?,
						`benefit_image` = ?,
						`date_modified`= NOW()
						WHERE `id` = ?
					");
					$statement->execute([
						$_POST['product-name'],
						$_POST['product-price'],
						$_POST['product-sku'],
						$_POST['product-quantity'],
						$_POST['product-category'],
						$_POST['product-size'],
						$_POST['product-description'],
						$_POST['product-ingredients'],
						$_POST['product-benefits'],
						$_POST['product-rating'],
						$_POST['product-images'],
						$_POST['product-thumbnail'],
						$_POST['product-hero_images'],
						$_POST['product-direction'],
						$_POST['product-benefit_image'],
						$_GET['id']				
					]);
										
					header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
				break;
				
				case 'create':
					$statement = $conn->prepare("INSERT INTO `products`
						(
						`name` ,
						`price` ,
						`sku` ,
						`quantity` ,
						`category` ,
						`size` ,
						`description`  ,
						`ingredients` ,
						`benefits` ,
						`rating` ,
						`images` ,
						`thumbnail` ,
						`hero_images` ,
						`direction` ,
						`benefit_image` ,
						`date_created` ,
						`date_modified`
						)
						VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),NOW())
					");
					$statement->execute([
							$_POST['product-name'],
						$_POST['product-price'],
						$_POST['product-sku'],
						$_POST['product-quantity'],
						$_POST['product-category'],
						$_POST['product-size'],
						$_POST['product-description'],
						$_POST['product-ingredients'],
						$_POST['product-benefits'],
						$_POST['product-rating'],
						$_POST['product-images'],
						$_POST['product-thumbnail'],
						$_POST['product-hero_images'],
						$_POST['product-direction'],
						$_POST['product-benefit_image']	
					]);
					$id = $conn->lastInsertId();
					header("location:{$_SERVER['PHP_SELF']}?id=$id");
				break;

				case 'delete':
					$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
					$statement->execute([$GET_['id']]);
					header("location:{$_SERVER['PHP_SELF']}");
				break;
			}
		}
		 
	}catch(PDOException $e){
		die ($e->getMessage());
	}

	//TEMPLATES
	function productListItem ($r, $o) {
			return $r.<<<HTML
			<div class="card soft prodict-edit-list">
				<div class="display-flex">
					<div class="flex-none images-thumbs"><img src="/images/$o->thumbnail"/></div>
					<div class="display-flex gap individual-product-edit">
						<div>$o->name</div>
						<div><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button" style=" width: 180px ;padding:0.3em 2em">Edit</a></div>
					</div>
				</div>
			</div>
			HTML;
	}

	function showProductPage ($o) {


		$id = $_GET['id'];
		$addoredit = $id == "new" ? "Add" : "Edit";
		$createorupdate = $id == "new" ? "create" : "update";
		$images = array_reduce (explode(", ",$o->images), function ($r, $o){
			return $r."<img src='/images/$o'/>";});
		$delete = $id =="new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete' class='form-button' style='padding:0.3em 2em'>Delete</a>";

		//heredoc
	echo <<<HTML
		<nav class="nav nav-crumbs" style="margin: 1em 0;">
			<div class="display-flex">
				<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">< Back</a></div>
				<div class="flex-none">$delete</div>
			</div>
		</nav>
		<section id="product-edit" class="display-flex gap">
		<ul class="col-xs-12 col-md-6" width="250px">
			<li>
				<h2>$o->name</h2>
				<div class="form-control">
					<strong>Name:</strong>
					<span>$o->name</span>
				</div>
				<div class="form-control">
					<strong>Price:</strong>
					<span>&dollar;$o->price</span>
				</div>
				<div class="form-control">
					<strong>Sku Number:</strong>
					<span>$o->sku</span>
				</div>
				<div class="form-control">
					<strong>Quantity:</strong>
					<span>$o->quantity</span>
				</div>
				<div class="form-control">
					<strong>Product Category:</strong>
					<span>$o->category</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Size:</label>
					<span>$o->size</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Description:</label>
					<span>$o->description</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Ingredients:</label>
					<span>$o->ingredients</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Benefits:</label>
					<span>$o->benefits</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Rating:</label>
					<span>$o->rating</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Image:</label>
					<span class="images-thumbs">$images</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Thumbnail:</label>
					<span class="images-thumbs" ><img src="/images/$o->thumbnail"/></span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Hero Image:</label>
					<span class="images-thumbs" ><img src="/images/$o->hero_images"/></span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Direction:</label>
					<span>$o->direction</span>
				</div>
				<div class="form-control">
					<label class="form-label">Product Benefit Images:</label>
					<span class="images-thumbs" ><img src="/images/$o->benefit_image"/></span>
				</div>
			</li>
		</ul>
		<form class="col-xs-12 col-md-6" method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
			<h2>$addoredit Product</h2>
			<div class="form-control">
				<label for="" class="form-label" for="product-name">Product Name</label>
				<input type="text" placeholder="Enter the Product Name" class="form-input" name="product-name" id="product-name" value="$o->name" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-price">Price</label>
				<input type="number" min="0" max="1000" step="0.01" placeholder="Enter the Product Price" class="form-input" name="product-price" id="product-price" value="$o->price" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-quantity">Quantity</label>
				<input type="number" min="0" max="255" step="1" placeholder="Enter the Quantity" class="form-input" name="product-quantity" id="product-quantity" value="$o->quantity" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-sku">Sku Numbber</label>
				<input type="number" min="0" max="10000" step="1" placeholder="Enter the Sku Number" class="form-input" name="product-sku" id="product-sku" value="$o->sku" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-category">Product Category</label>
				<input type="text" placeholder="Enter the Product Category" class="form-input" name="product-category" id="product-category" value="$o->category" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-size">Product Size</label>
				<input type="number" min="0" max="1000" step="1" placeholder="Enter the Product Size" class="form-input" name="product-size" id="product-size" value="$o->size" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-description">Product Description</label>
				<textarea  placeholder="Enter the Product Description" class="form-input" name="product-description" id="product-description" >$o->description</textarea>
			</div>
			

			<div class="form-control">
				<label for="" class="form-label" for="product-ingredients">Ingredients</label>
				<textarea placeholder="Enter the Ingredients" class="form-input" name="product-ingredients" id="product-ingredients">$o->ingredients</textarea>
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-benefits">Product Benefits</label>
				<input type="text" placeholder="Enter the Benefits" class="form-input" name="product-benefits" id="product-benefits" value="$o->benefits" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-rating">Product Rating</label>
				<input type="number" min="0" max="5" step="0.1" placeholder="Enter the Product rating" class="form-input" name="product-rating" id="product-rating" value="$o->rating" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-thumbnail">Product Thumbnail</label>
				<input type="text" placeholder="Upload Thumbnail Image" class="form-input" name="product-thumbnail" id="product-thumbnail" value="$o->thumbnail" />
			</div>
			
			<div class="form-control">
				<label for="" class="form-label" for="product-hero_images">Product Hero Image</label>
				<input type="text" placeholder="Upload Hero Image" class="form-input" name="product-hero_images" id="product-hero_images" value="$o->hero_images" />
			</div>
			<div class="form-control">
				<label for="" class="form-label" for="product-direction">Product Direction</label>
				<textarea placeholder="Enter the Prodict Direction" class="form-input" name="product-direction" id="product-direction">$o->direction</textarea>
			</div>

			<div class="form-control">
				<label for="" class="form-label" for="product-benefit_image">Product Benefit Image</label>
				<input type="text" placeholder="Upload the Benefit Image" class="form-input" name="product-benefit_image" id="product-benefit_image" value="$o->benefit_image" />
			</div>

			<div class="form-control">
				<input type="submit" class="form-button" style='padding:0.3em 2em' value="UPDATE">
			</div>
		</form>
		</section>
	HTML;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "../parts/meta.php" ?>

	<!-- Page Title -->
	<title>Product Admin Page</title>
</head>
<body>
	<!-- admin page navigation bar -->
	<header class="navbar">
		 <div class="container display-flex">
		 	<div class="flax-none">Product Admin</div>
		 	<div class="flex-stretch"></div>
		 	<nav class="nav nav-flex flax-none">
		 		<ul>
		 			<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
		 			<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
		 		</ul>
		 	</nav>
		 </div>
	</header>

	<div class="container">
		
		<?php

			if(isset($_GET['id'])){
				echo showProductPage(
					$_GET['id'] == "new"? $empty_product :
					makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
				);

			}else{	

		?>
		<h2>Product List</h2>
		<div class='display-flex gap prodict-edit-list-container'>
			<?php
				
			$result = makeQuery(makeConn(), "SELECT * FROM `products`");

			echo array_reduce($result, 'productListItem');

			}
				
			?>
		</div>

		<div class="container">
			<h2>Latest Multis:</h2>
			<?php

			recommendedCategory("Multivitamin");
			//recommendedCategory("Letter Vitamin");
			//recommendedCategory("Solutions");

			?>
			<h2>Latest Letter Vitamins:</h2>
				<?php

			// recommendedCategory("Multivitamin");
			recommendedCategory("Letter Vitamin");
			//recommendedCategory("Solutions");

			?>
		</div>

	</div>
</body>
