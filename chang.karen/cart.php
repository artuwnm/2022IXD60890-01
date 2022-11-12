<?php 

include_once "parts/templates.php";
include_once "lib/php/functions.php"; 

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

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

		<!-- TEST -->

		<div class="container" id="cart_container">
			<a href="product_list.php">< Back</a>
			<h2 class="cart-item-form"><br>In Your Cart</h2>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft cart-item-form" >

						<?= cartTotals() ?>

						<a href="checkout.php"><button type="button" class="form-button" id="checkout">Checkout</button></a>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

</body>
</html>