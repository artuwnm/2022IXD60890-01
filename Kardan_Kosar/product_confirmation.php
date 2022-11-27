<?php

include_once "lib/php/functions.php";
resetCart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>

	<!-- Page Title -->
	<title>Product Confirmation Page</title>
</head>
<body>

	<?php include "parts/navbar.php" ?>
	<main class="container">
		<div class="card soft">
			<h2>Thank You For Your Purchase</h2>
			<p><a href="product_list.php">Continue Shopping</a></p>
		</div>
	</main>
	<div class="confirm_footer">
		<?php include "parts/footer.php" ?>		
	</div>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>