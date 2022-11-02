<?php 

include_once "parts/templates.php";
include_once "lib/php/functions.php"; 

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body id="cart_body">
	<?php include "parts/navbar.php"; ?>
	<div class="cart_bg">

		<!-- TEST -->

		<div class="container" id="cart_container">
			<a href="product_list.php">< Back</a>
			<h2 class="cart-item-form"><br>In Your Cart</h2>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart,'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft cart-item-form" >
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Subtotal</strong></div>
							<div class="flex-none">&dollar;10.89</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Taxes</strong></div>
							<div class="flex-none">&dollar;2.00</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Total</strong></div>
							<div class="flex-none">&dollar;12.89</div>
						</div>
						<a href="checkout.php"><button type="button" class="form-button" id="checkout">Checkout</button></a>
					</div>
				</div>
			</div>
		</div>

		<!-- END-OF-TEST -->

		<!-- <div class="container" id="cart_container">
			<a href="product_list.php">< Back</a>
			<script>

				function select() {
  					document.getElementsByClassName("form-select-small").innerHTML = "<select></select>";
				}
			
				const makeTable1 = (classes='')=> {
				const head = ['Cart Items', 'Price', 'Qty'];
				const body = [
					['Milk Butter Puff','$1.25','1'],
					['Cinnamom Roll','$2.25','1'],
					['Classic Cheesecake','$30.00','1'],
					['T & 5 Coffee','$4.50','1'],
				];

				document.write(`<table class="${classes}">
				<thead>
				<tr>

				${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr>

				</thead>
				<tbody>
			

					${body.reduce((r,o)=>r+`<tr><td>${o[0]}</td><td>${o[1]}</td><td>${o[2]}</td></tr>`,"")}
				</tbody>

				</table>`)
			
				}


			const makeTable2 = (classes='')=> {
				const head = ['Item Total','$45.00'];
				const body = [
					['Tax','$2.90'],
					['Shipping','Free'],
					['Subtotal','$47.90'],
				];

				document.write(`<table class="${classes}">
				<thead>
				<tr>

				${head.reduce((r,o)=>r+`<th style="width:100px;">${o}</th>`,'')}</tr>

				</thead>
				<tbody>
			

					${body.reduce((r,o)=>r+`<tr><td>${o[0]}</td><td>${o[1]}</td></tr>`,"")}
				</tbody>

				</table>`)
			
				}
			
			</script>

			<div class="container" id="cart_separater">

				<div class="card soft cart-card">
					<script>makeTable1("table")</script>
				</div>

				<div class="checkout-block" id="place_order_container">
					<div class="card soft cart-card" id="total-card">
						<script>makeTable2("table")</script>
					</div>
					<a href="checkout.php"><button type="button" class="form-button" id="checkout">Checkout</button></a>
				</div>	
			</div>

		</div> -->

<!-- 		<div class="container" id="place_order_container">
			<div class="form-control">
				<a href="checkout.php"><button type="button" class="form-button" id="checkout">Checkout</button></a>
			</div>
		</div> -->

	</div>

	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

</body>
</html>