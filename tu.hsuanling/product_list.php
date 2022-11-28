<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>


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

		 <div class="form-control">

		 	<form class="hotdog light" id="product-search">
		 		<input type="search" placeholder="Search Products">
		 	</form>
		 </div>

		 <div class="form-control">
		 	<div class="display-flex">
		 		
			 	<div class="flex-none">
			 		<button data-filter="category" data-value="" type="button" class="form-button">All</button>
			 	</div>
			 	<div class="flex-none">
			 		<button data-filter="category" data-value="Succulent" type="button" class="form-button">Succulent</button>
			 	</div>
			 	<div class="flex-none">
			 		<button data-filter="category" data-value="Cactus" type="button" class="form-button">Cactus</button>
			 	</div>
			 	

			 <div class="flex-stretch"></div>
			 
			 <div class="flex-none">

			 	<div class="form-select">
			 		<select class="js-sort">
			 			<option value="1">Price-high to low</option>
			 			<option value="2">Price-low to high</option>
			 		</select>
			 	</div>
		 	</div>
		 	</div>
		 	
		 </div>

		 <div class='productlist grid gap'></div>


	<?php 


		

		// $result = makeQuery(
		// 	makeConn(),
		// 	"
		// 	SELECT *
		// 	FROM `products`
		// 	ORDER BY `id` ASC
		// 	LIMIT 12
		// 	"
		// );

		// print_p($result);

		// echo "<div class='productlist grid gap'>", array_reduce($result,'productlistTemplate'),"</div>";


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