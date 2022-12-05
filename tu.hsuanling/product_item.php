<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];
	$image = explode(",", $product->image);

	$image_elements = array_reduce($image,function($r,$o){
		return $r. "<img src='img/$o'>";
	});

	// print_p($_SESSION);

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Product Items</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>

</head>

<body>

	<!-- Navigation Bar -->

	<?php include "parts/navbar.php";?>


	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/<?=$product->thumbnail ?>" alt="">
					</div>
					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?= $product->id ?>"> 

					<div class="card-section">
						<h2 class="product-title"><?= $product->title ?></h2>
						<div class="product-size"><?= $product->size ?></div>
						<div class="product-price">&dollar;<?= $product->price ?></div>
					</div>

					<div class="card-section">
						<div class="form-control">
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
				
						<div class="form-control">
							<label for="product-size" class="form-label">Size</label>
							<div class="form-select">
								<select id="product-size" name="product-size">
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
								</select>
							</div>
						</div>
						
						<div class="product-quantity" style="font-size: 0.7em; font-weight:300;">Only <?= $product->quantity ?> left</div>
					</div>

					<div class="card-section">
						<input type="submit" class="form-button" value="Add to Cart">
					</div>
				</form>
			</div>
		</div>

		<div class="card soft light">
			<p><?= $product->description ?></p>
		</div>
		
		<h2>Similar Products.</h2>

		<?php 

		recommendedSimilar($product->category,$product->id);



		 ?>

	</div>

	<!-- Footer -->
	<?php include "parts/footer.php" ?>


</body>
</html>