<!DOCTYPE html>
<html lang="en">
<head>
	<title>Checkout</title>
	<?php include "parts/meta.php"; ?>
</head>
<body id="checkout_body">
	<?php include "parts/navbar.php"; ?>
	<div class="checkout_bg">

		<div class="container" id="checkout_container">
			<a href="cart.php">< Back</a>

			<h1>Payment Information</h1>

			
		<div class="container" id="placeorder_separater">

			<div class="card soft cart-card" id="form-card">

				<h3>Credit Card</h3>

				<form id="controls">
					<div class="form-control">
						<label class="form-label" id="labels">Name on Card</label>
						<input type="text" placeholder="Name" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Card Number</label>
						<input type="number" placeholder="Number" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Expiration Month</label>
						<input type="number" placeholder="Month" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">Expiration Year</label>
						<input type="number" placeholder="Year" class="form-input">
					</div>
					<div class="form-control">
						<label class="form-label">CVV</label>
						<input type="number" class="form-input">
					</div>
				</form>

			</div>

			<script>
				const makeTable2 = (classes='')=> {
				const head = ['Item Total','','','$10.89'];
				const body = [
					['Tax','','','$2.00'],
					['Shipping','','','Free'],
					['Subtotal','','','$12.89'],
				];

				document.write(`<table class="${classes}">
				<thead>
				<tr>

				${head.reduce((r,o)=>r+`<th style="width:100px;">${o}</th>`,'')}</tr>

				</thead>
				<tbody>
			

					${body.reduce((r,o)=>r+`<tr><td>${o[0]}</td><td>${o[1]}</td><td>${o[2]}</td><td>${o[3]}</td></tr>`,"")}
				</tbody>

				</table>`)
			
				}
			</script>

			<div class="placeorder">
				<div class="card soft cart-card" id="total-box">
					<script>makeTable2("table")</script>
					<div class="placeorder_button" id="place_order_container">
						<a href="confirmation.php"><button type="button" class="form-button" id="checkout">Place Order</button></a>	
					</div>
				</div>
			</div>
				
		</div>
				

		</div>
	</div>

<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>	
</body>
</html>