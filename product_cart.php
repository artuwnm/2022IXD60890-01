<?php



include_once "lib/php/function.php"; 
include_once "parts/templates.php";

// $card = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,2,3)";
// print_p($getCartItem());

$cart_items = getCartItems();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Cart Pages</title>
	
	<?php include "parts/meta.php"; ?>

</head>

<body>

	<?php include "parts/navbar.php"; ?>


	<div class="container"> 
		<div class="card soft">
		<h2>In Your Cart</h2>

		<div class="grid">
			<div class="col-xs-12col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items,'cardListTemplate')?>
				</div>
				

			<div class="col-xs-12col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
				</div>
			</div>



			
		
		<p><a href="product_checkout.php">Checkout</p>
			
		</div>

</body>


</html>