<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	// include_once "parts/templates.php";

	// $cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");
	
	$cart = getCart();

	$cart_items = getCartItems();



?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>

</head>

<body>
	<?php include "parts/navbar.php";?>

	<div class="container">
			<h2>In Your Cart</h2>

			<?php 

			if (count($cart)) {
				?>
				<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<?= cartTotals() ?>
						<div class="card-section">
						<a href="product_checkout.php" class="form-button">Checkout</a>
						</div>
					</div>
				</div>
			</div>
			<?php 
			} else {
				?>
					<div class="card soft">
						<p style="color:black;">No Items in Cart</p>
					</div>
					<h3>Other Recommendations</h3>
					<?php 

					recommendedAnything(6);

					 ?>

				<?php 
				 
			}
			?>

			
	</div>

	<!-- Footer -->
	<?php include "parts/footer.php" ?>

</body>
</html>