<?php



include_once "lib/php/function.php"; 
include_once "parts/templates.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =".$_GET[`id`])[0];
print_p($product);

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='/img/$o' >";
});

print_p($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Katelynn Photography</title>
	
	<?php include "parts/meta.php"; ?>

</head>

<body>

	<?php include "parts/navbar.php"; ?>
	<script src="js/product_thumb.js"></script>

	<div class="container">
		<div class="grid">
			<div class="col-xs-12col-md-7">
				<div class="card soft">
					<div class="images_main">
					<img src="/img<?= $product->thumbnail ?>">
				</div>
				<div class="images_thumb">
					<?= $image_elements ?>
				</div>

				</div>

			</div>

			<div class="col-xs-12col-md-5">
				<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

					<input type="hidden" name="product-id" value="<?=$product->id ?>">

					<div class="card-section">
					<h2 class="product-title"><?=$product->title?></h2>
					<div class="product-price">&dollar;<?=$product->price?></div>
					</div>

					<div class="card-section">
						<div class="form-control"></div>
						<label for="product-amount">Amount</label>
						<div class="form-select" id="product-amount">
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
					</div>

					<div class="card-section">
						<div class="form-control">
						<label for="product-color">Color</label>
						<div class="form-select" id="product-color">
							<select id="product-color" name="product-color">
								<option>red</option>
								<option>green</option>
				
							</select>
						</div>
					</div>
					</div>
				<div class="card-section">
					<input type="submit" class="form-button" value= "Add to Cart">
				</div>

				</form>
			</div>
		</div>


		<div class="card soft dark">
			<p><?= $product->discription ?></p>
		</div>
	</div>


</body>

<footer>

<article4>© 2022 Katelynn Photography. All Rights Reserved.
</article4>



</footer>
</html>