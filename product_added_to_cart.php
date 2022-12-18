<?php


include_once "lib/php/function.php"; 
include_once "parts/templates.php";

$product = makeQuery(makeConn(), "SELECT * FROM `Products` WHERE `id` =".$_GET['id'])[0];
$cart_product = cartItemById($_GET['id']);

print_p($product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Confirmation Page</title>
	
	<?php include "parts/meta.php"; ?>

</head>

<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>You add <?= $product->title ?> to your cart.</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->title ?> in your cart.</p>

			<div class="display-flex">
				<div class="flex-none"><a href="product_added_to_cart.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="product_cart.php">Go to Cart</a></div>



			</div>

		</div>
	</div>


</body>

<footer>

<article4>© 2022 Katelynn Photography. All Rights Reserved.
</article4>



</footer>
</html>