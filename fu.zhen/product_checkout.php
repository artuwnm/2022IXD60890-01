<?php include_once "lib/php/functions.php"; ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Checkout Page</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	<div class="container">
		<div class="card soft">
			<h2>Product Checkout</h2>
			<form class="form">
		        <h3>Address</h3>
		    
		    	<div class="form-control">
		    		<label for="address-street" class="form-label">Street</label>
		    		<input id="address-street" type="text" placeholder="Street name" class="form-input">
		    	</div>
		    	<div class="form-control">
		    		<div class="grid gap">
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-city" class="form-label">City</label>
		    		        <input id="address-city" type="text" placeholder="City" class="form-input">
		    			</div>
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-state" class="form-label">State</label>
		    		        <input id="address-state" type="text" placeholder="State" class="form-input">
		    			</div>
		    		</div>
		    	</div>
		    	<div class="form-control">
		    		<div class="grid gap">
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-zip" class="form-label">Zip Code</label>
		    		        <input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
		    			</div>
		    			<div class="col-xs-12 col-md-6">
		    				<label for="address-country" class="form-label">Country</label>
		    		        <input id="address-country" type="text" placeholder="Country" class="form-input">
		    			</div>
		    		</div>
		    	</div>
		    	
		        <h3>Payment</h3>
		    
		    	<div class="form-control">
		    		<label for="payment-name" class="form-label">Full Name</label>
		    		<input id="payment-name" type="text" placeholder="Name" class="form-input">
		    	</div>
		    	<div class="form-control">
		    		<label for="payment-number" class="form-label">Card Number</label>
		    		<input id="payment-name" type="text" placeholder="#### #### #### ####" class="form-input">
		    	</div>
		    	<div class="form-control">
		    	<div class="grid gap">
		    			<div class="col-xs-12 col-md-6">
		    				<label for="payment-expiration" class="form-label">Expiration</label>
		    		        <input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
		    			</div>
		    			<div class="col-xs-12 col-md-6">
		    				<label for="payment-cvv" class="form-label">CVV</label>
		    		        <input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
		    			</div>
		    		</div>
		    	</div>
		    	<div class="form-control">
		    		<label for="payment-zip" class="form-label">Zip Code</label>
		    		<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
		    	</div>
		    	<div class="form-control">
		    		<!-- <input type="submit" class="form-button" value="submit"> -->
		    		<a href="product_confirmation.php" class="form-button"> Complete Checkout</a>
		    	</div>
		    </form>
		</div>
	</div>


</body>
</html>