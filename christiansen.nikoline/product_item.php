<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='/img/$o'>";
});

// print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"?>

	<script src="lib/js/product_thumbs.js"></script>
</head>
<body>

<?php include "parts/navbar.php"?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/$o->thumbnail" alt="<?= $product->name ?>">
					</div>
					<div class="images-thumbs"> 
						<img src="https://via.placeholder.com/50">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
						<h2 class="product-name"><?= $product->name ?></h2>
						<div class="product-price">&dollar;<?= $product->price ?></div>
						<div><h3>Description</h3></div>
						<div><p><?= $product->description ?></p></div>
						<hr>
					</div>
					<div class="card-section">
						<label for="product-amount" class="form-label">Amonut</label>
						<div class="form-select" id="product-amount">
							<select name="" id="">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>		
						</div>
					</div>
					<div class="card-section">
						<a href="product_added_to_cart.php" class="form-button">Add To Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
			
	
	
</body>
</html>