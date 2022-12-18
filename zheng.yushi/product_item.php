<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});

//print_p($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
	<link rel="stylesheet" href="css/storetheme.css" />

	<script type="js/product_thumbs.js"></script>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main" id="item-figure">
						<img src="img/<?= $product->thumbnail ?>">
					</div>
					<div class="images-thumbs" id="item-figure">
						<?= $image_elements ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?= $product->id ?>">

					<div class="card-section">
						<h2 class="product-name"><?= $product->name ?></h2>
						<div class="product-category"><?= $product->category ?></div>
						<div class="product-price">&dollar;<?= $product->price ?></div>
					</div>

					<div class="card-section">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select">
							<select id="product-amount" name="product-amount">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
					</div>

					<div class="card-section">
						<input type="submit" class="form-button" value="Add To Cart"> 
					</div>
				</form>
			</div>
		</div>

		<div class="card soft dark">
			<p><?= $product->description ?></p>
			
		</div>

		<h2>Recommended Products</h2>
		<?php
			recommendedSimilar($product->category,$product->id);
		?>
	</div>

</body>
</html>