<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<?php include "parts/meta.php"; ?>
</head>
<body id="cart_body">
	<?php include "parts/navbar.php"; ?>
	<div class="cart_bg">


		<div class="container" id="cart_container">
			<a href="product_list.php">< Back</a>
			<script>

				function select() {
  					document.getElementsByClassName("form-select-small").innerHTML = "<select></select>";
				}
			
				const makeTable1 = (classes='')=> {
				const head = ['Cart Items', 'Price', 'Quantity'];
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
				const head = ['Item Total','','','$45.00'];
				const body = [
					['Tax','','','$2.90'],
					['Shipping','','','Free'],
					['Subtotal','','','$47.90'],
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

			<div class="card soft">
				<script>makeTable1("table")</script>
			</div>

			<div class="card soft">
				<script>makeTable2("table")</script>
			</div>

		</div>

		<div class="container" id="place_order_container">
			<div class="form-control">
				<a href="checkout.php"><button type="button" class="form-button" id="checkout">Checkout</button></a>
			</div>
		</div>

	</div>

	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

</body>
</html>