<?php

include_once "lib/php/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>

	<!-- Page Title -->
	<title>Checkout Page</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<div class="container">
		<div class="card soft">
			<h2>Product Checkout</h2>
			<form>
				<h3>Address</h3>
				<div class="form-control">
					<input id="address_street" type="text" class="form-input interactive"/>
					<label for="address_street" class="form-label-animated">Street</label>
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<input id="address_city" type="text" class="form-input interactive"/>
							<label for="address_city" class="form-label-animated">City</label>
						</div>
						<div class="col-xs-12 col-md-6">
							<input id="address_state" type="text" class="form-input interactive"/>
							<label for="address_state" class="form-label-animated">State</label>
						</div>
					</div>
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<input id="address_zip" type="text" class="form-input interactive"/>
							<label for="address_zip" class="form-label-animated">Zip Code</label>
						</div>
						<div class="col-xs-12 col-md-6">
							<input id="address_country" type="text" class="form-input interactive"/>
							<label for="address_country" class="form-label-animated">Country</label>
						</div>
					</div>
				</div>

				<h3>Payment</h3>

				<div class="form-control">
					<input id="payment_name" type="text" class="form-input interactive"/>
					<label for="payment_name" class="form-label-animated">Full Name</label>
				</div>
				<div class="form-control">
					<input id="payment_number" type="text" class="form-input interactive"/>
					<label for="payment_number" class="form-label-animated">Card Number</label>
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<input id="payment_expiration" type="text" class="form-input interactive"/>
							<label for="payment_expiration" class="form-label-animated">Expiration Date</label>
						</div>
						<div class="col-xs-12 col-md-6">
							<input id="payment_cvv" type="text" class="form-input interactive"/>
							<label for="payment_cvv" class="form-label-animated">CVV</label>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<input id="payment_zip" type="text" class="form-input interactive"/>
					<label for="payment_zip" class="form-label-animated">Zip Code</label>
				</div>

				<div class="form-control">
					<a class="form-button" href="product_confirmation.php">Complete Check Out</a>
				</div>

			</form>
		</div>
	</div>
	<?php include "parts/footer.php" ?>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>