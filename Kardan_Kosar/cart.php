<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (10,7,2)");
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
	<div class="container">
		<div class="card soft">
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart, 'cartListTemplate')?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Sub Total</strong></div>
							<div class="flex-none">&dollar;3.50</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Taxes</strong></div>
							<div class="flex-none">&dollar;3.50</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Total</strong></div>
							<div class="flex-none">&dollar;7.00</div>
						</div>
						<div id="checkout_btn" class="form-control">
							<a class="form-button" href="product_checkout.php">Check Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cart_footer">
		<?php include "parts/footer.php" ?>		
	</div>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>