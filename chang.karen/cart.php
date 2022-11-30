<?php 

include_once "parts/templates.php";
include_once "lib/php/functions.php"; 

$cart = getCart();
$isPromo = getPromo();

$cart_items = getCartItems();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body id="cart_body">
	<?php include "parts/navbar.php"; ?>
	<div class="cart_bg">


		<div class="container" id="cart_container">
			<a href="product_list.php">< Back</a>
			<h2 class="cart-item-form"><br>In Your Cart</h2>

			<?php

			if(count($cart)){
			?>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft cart-item-form" >

						<?= cartTotals($isPromo) ?>
						<?= checkPromoCode($isPromo) ?>
						<p id="promo-label">Promo Code:</p>
						<form action="cart_actions.php?action=apply-promo-code" method="post" onchange="this.submit()">
							<input type="text" id="promo" name="promoCode">
							<button type="submit" class="form-button" id="applyPromo">Apply</button>
						</form>
						

						<a href="checkout.php"><button type="button" class="form-button" id="checkout">Checkout</button></a>
					</div>
				</div>
			</div>
			<?php
			} else {
				?>
				<div class="card soft">
					<p>No Items in cart</p>
					</div>
					<h3 id="otherRecommendations">Other Recommendations</h3>
					<div class="card soft">
						<?php cartRecommendation(); ?>
					</div>
				
				<?php
			}
			?>
	
			
		</div>

	</div>

	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

</body>
</html>