<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

</head>

<body>

	<!-- Navigation Bar -->

	<?php include "parts/navbar.php";?>

	<div id="viewwindow">
	<div class="view-window" style="background-image: url('img/pexels-scott-webb-305827.jpg');">
	</div>

	<div class="container">
		
			<h2>Product List</h2>

			<!-- <ul>
				<li><a href="product_item.php?id=1">Product 1</a></li>
				<li><a href="product_item.php?id=2">Product 2</a></li>
				<li><a href="product_item.php?id=3">Product 3</a></li>
				<li><a href="product_item.php?id=4">Product 4</a></li>
			</ul>
		 -->



		<?php 


		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(),
			"
			SELECT *
			FROM `products`
			ORDER BY `id` ASC
			LIMIT 12
			"
		);

		// print_p($result);

		echo "<div class='productlist grid gap'>", array_reduce($result,'productlistTemplate'),"</div>";


		 ?>

		 <!-- DESC = high to low; New to Old, ASC = low to high; Old to New -->


		

	

		<!-- <div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div>Product Name</div>
						<div>$3.99</div>
					</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div>Product Name</div>
						<div>$3.99</div>
					</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure product">
					<img src="https://via.placeholder.com/400x400?text=product" alt="">
					<figcaption>
						<div>Product Name</div>
						<div>$3.99</div>
					</figcaption>
					</figure>
				</div>
			</div>	 -->
	</div>




</body>
</html>