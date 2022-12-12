<?php 
	include_once "lib/php/functions.php";
	// include_once "parts/templates.php";

	$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

	$cart_product = cartItemById($_GET['id']);

	// print_p($product);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Confirmation Page</title>

	<?php include "parts/meta.php"; ?>

</head>

<body class="flush">
	<?php include "parts/navbar.php";?>

	<div id="viewwindow">
		<div class="view-window" style="background-image: url('img/pexels-scott-webb-305827.jpg');">
	</div>

	<div class="container">
		<div class="card soft">
			<h2>You added <?=$product->title ?> to your cart.</h2>

			<p>There are now <?= $cart_product->amount ?> of <?=$product->title ?> in your cart.</p>
			
			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="product_cart.php">Go to Cart</a></div>
			</div>

		</div>
	</div>

	<!-- Footer -->
	<?php include "parts/footer.php" ?>
</body>
</html>