<?php
	include_once "lib/php/functions.php";

	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" .$_GET['id'])[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>

	<!-- Page Title -->
	<title>Landing Page</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<div class="container">
		<div class="card soft">
			<h2>You Added <?= $product->name ?> To Your Cart</h2>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>	
				<div class="flex-stretch"></div>	
				<div class="flex-none"><a href="cart.php">Go to Cart</a></div>	
			</div>
		</div>
	</div>
	<div class="to_cart_footer">
		<?php include "parts/footer.php" ?>
	</div>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>