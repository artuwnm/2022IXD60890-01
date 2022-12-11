<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
	$cart = getCartItems();

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
	<main class="container grid gap">
		<div class="col-xs-12 col-md-5">
			<div class="checkOutSummary">
				<h2>Order Summary</h2>
				<?php 
					echo array_reduce($cart, function($r, $o){
						$totalFixed = number_format($o->total,2,'.','');
							return $r."
							<div class='display-flex'>
								<div class='display-flex images-thumbs-mini gap' style='width:100%'>
									<div><img src='/images/$o->thumbnail'/></div>
									<ul>
										<li style='font-weight: bold;'>$o->name</li>
										<li>&dollar;$totalFixed</li>
									</ul>
								</div>
							</div>";

				})?>
				<div id="summaryTotal"><?= cartTotals()?></div>
			</div>

			
		</div>
		<div class="col-xs-12 col-md-7">
			<div class="checkOutForm">
				<h2 class="form-legend">Product Checkout</h2>
				<p class="form-legal"><span class="form-indicator">*</span> Indicates required field</p>
				<form id="checkout-form">
					<h3>Address</h3>
					<div class="form-control">
						<input id="address_street" type="text" class="form-input interactive"/>
						<label for="address_street" class="form-label-animated"><span class="form-indicator">*</span>Street</label>
					</div>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<input id="address_city" type="text" class="form-input interactive"/>
								<label for="address_city" class="form-label-animated"><span class="form-indicator">*</span>City</label>
							</div>
							<div class="col-xs-12 col-md-6">
								<input id="address_state" type="text" class="form-input interactive"/>
								<label for="address_state" class="form-label-animated"><span class="form-indicator">*</span>State</label>
							</div>
						</div>
					</div>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<input id="address_zip" type="text" class="form-input interactive"/>
								<label for="address_zip" class="form-label-animated"><span class="form-indicator">*</span>Zip Code</label>
							</div>
							<div class="col-xs-12 col-md-6">
								<input id="address_country" type="text" class="form-input interactive"/>
								<label for="address_country" class="form-label-animated"><span class="form-indicator">*</span>Country</label>
							</div>
						</div>
					</div>

					<h3>Payment</h3>

					<div class="form-control">
						<input id="payment_name" type="text" class="form-input interactive"/>
						<label for="payment_name" class="form-label-animated"><span class="form-indicator">*</span>Full Name</label>
					</div>
					<div class="form-control">
						<input id="payment_number" type="text" class="form-input interactive"/>
						<label for="payment_number" class="form-label-animated"><span class="form-indicator">*</span>Card Number</label>
					</div>
					<div class="form-control">
						<div class="grid gap">
							<div class="col-xs-12 col-md-6">
								<input id="payment_expiration" type="text" class="form-input interactive"/>
								<label for="payment_expiration" class="form-label-animated"><span class="form-indicator">*</span>Expiration Date</label>
							</div>
							<div class="col-xs-12 col-md-6">
								<input id="payment_cvv" type="text" class="form-input interactive"/>
								<label for="payment_cvv" class="form-label-animated"><span class="form-indicator">*</span>CVV</label>
							</div>
						</div>
					</div>
					<div class="form-control col-xs-12 col-md-6">
						<input id="payment_zip" type="text" class="form-input interactive"/>
						<label for="payment_zip" class="form-label-animated"><span class="form-indicator">*</span>Zip Code</label>
					</div>

					<div class="form-control">
						<a class="form-button" href="product_confirmation.php">Complete Check Out</a>
					</div>

				</form>
			</div>
		</div>	
	</main>
	<?php include "parts/footer.php" ?>
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>