<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (10,7,2)");

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
	<div class="container">
		<div class="card soft">
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items, 'cartListTemplate')?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<?= cartTotals()?>
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