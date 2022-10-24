<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Your Cart</h2>
				
			<figure class="figure" id="item-figure">
				<a href="product_list.php">Not ready to checkout? Continue shopping</a>
			</figure>


			<div class="container">
				<div class="grid gap xs-small md-medium">
				<div class="col-xs-6 col-md-3">
					<div class="card soft">
						<img src="https://via.placeholder.com/500" alt="" class="media-image">
					</div>
				</div>
				</div>
			</div>
			
			<div class="container">
				<div class="form-control">
					<a href="checkout.php"><button type="button" class="form-button">Check Out</button></a>
				</div>
			</div>
		</div>
	</div>


</body>
</html>