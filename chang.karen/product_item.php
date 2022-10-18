<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Item</title>
	<?php include "parts/meta.php"; ?>
</head>
<body id="item_body">
	<?php include "parts/navbar.php"; ?>
	<div class="item_bg">

		<div class="container" id="figure_container">

			<figure class="figure" id="item-figure">
				<a href="product_list.php">< Back</a>
				<img src="img/chocolatecookies.jpg" alt="">
			</figure>

			<div class="content">
				<h1>Chocolate Cookies (3pc)</h1>
				<h1>$4.05</h1>
				<p><br>Our crispy chocolate cookies are made of 75% dark chocolate chips, organic cocoa powder, and fresh peanuts.</p>

				<div class="form-control">
					<p>Quantity:</p>
					<div class="form-select">
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</div>
				</div>

				<div class="form-control">
					<button type="button" class="form-button" id="addtocart">Add to Cart</button>
				</div>

			</div>
		</div>

	</div>


	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

</body>
</html>