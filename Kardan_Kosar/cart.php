<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	// $cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (10,7,2)");
	$cart = getCart();

	$cart_items = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>

	<!-- Page Title -->
	<title>Landing Page</title>
</head>
<body class="cart_body">
	<?php include "parts/navbar.php" ?>
	<main id="cartMain"	class="container">

		<?php

			if(count($cart)) {
		?>
				<div class="cart-info">
					<div class="grid gap">
						<div class="col-xs-12 col-md-12 col-lg-7" >
							<div class="card soft">
								<?= array_reduce($cart_items, 'cartListTemplate')?>
							</div>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-5">
							<?= cartTotals()?>
						  	<div id="checkout_btn" class="form-control">
				            	<a class="form-button" href="product_checkout.php">Check Out</a>
				        	</div>
						</div>
					</div>
				</div>
		<?php
	
			}else {
				?>
				<div class="cart-info">
					<h3 style="text-align: center;">Your Shopping Cart is Empty.</h3>
					<div class="form-control display-flex flex-justify-center" >
						<a class="form-button" style="width:auto;" href="product_list.php">Start Shopping</a>
					</div>
				</div>
				<div class="cart-recommentation">
					<h3>We Recommend:</h3>
					<?php 
					generalRecommendation(6); 
					?>
				</div>
				<?php
			}
		?>

		
	</main>
	<div class="cart_footer">
		<?php include "parts/footer.php" ?>		
	</div>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>