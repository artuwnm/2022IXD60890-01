<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = array_find(getCart(),function($o){return $o->id==$_GET['id'];});

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Added to Cart</title>

	<?php include "parts/meta.php"; ?>

</head>
<body id="home_body">
	<?php include "parts/navbar.php"; ?>
	<div class="background-img">

		<div class="container">
			<div class="card soft">
				<h2>You added <?= $product->name ?> to your cart!</h2>

				<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart.</p>

				<div class="container" id="buttons_container">
					
						<a href="product_list.php"><button type="button" class="form-button" id="checkout">Back to Shop</button></a>
				
						<a href="cart.php"><button type="button" class="form-button" id="checkout">Go to Cart</button></a>
				</div>
			</div>
		</div>

	</div>
	

	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

</body>