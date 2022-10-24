<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<div class="container">
				
				<figure class="figure" id="item-figure">
					<a href="product_list.php">Back</a>
					<img src="https://via.placeholder.com/400x400?text=product" alt="" class="">
				</figure>

				<div class="content">
					<h1>BTS | Light Stick</h1>
					<h1>$59</h1>
					<p>By BTS</p>

					<div class="form-control">
						<p>Qty</p>
						<div class="form-select">
							<select>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
					</div>

					<div class="form-control">
						<button type="button" class="form-button">Add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>