<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

$cart_items = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

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
				There are no items in your cart.
			</div>
			<div class="container">	
				<h2 class="rec-products">Our Best Sellers</h2>
				<?php recommendedAnything(6); ?>
			</div>
			<?php 
		}

		?>
		
	</div>
	<div class="blank-space"></div>
<?php include "parts/footer.php"?>



</body>
</html>