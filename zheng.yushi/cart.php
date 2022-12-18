<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();
$cart = getCart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Your Cart</h2>

			<figure class="figure" id="item-figure">
				<a href="product_list.php">Not ready to checkout? Continue shopping</a>
			</figure>

		<?php

		if(count($cart)) {
		?>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= carTotals() ?>
				<div class="card-section">
					<a href="checkout.php" class="form-button">Checkout</a>
				</div>
				</div>
			</div>
		</div>
		<?php
		} else {
		?>
		<div class="card soft">
			<p>No items in cart</p>
		</div>
			<h3>Other Recommendations</h3>
				<?php recommendedAnything(6); ?>
		<?php
		}
		?>
			
		</div>
	</div>


</body>
</html>