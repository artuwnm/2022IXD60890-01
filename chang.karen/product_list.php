<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product List</title>
	
	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>
<body id="list_body">

	<?php include "parts/navbar.php"; ?>

	<div class="list_bg">

		<div class="container" id="list_container">

			<div class="container" id="list_title_container">
				<h1 id="list-title">Sweet & Homie Collection</h1>
			</div>

			<div class="form-control" id="search-form-control">
					<form class="hotdog light" id="product-search">
						<input type="search" placeholder="Search Products">
					</form>
			</div>

			<div class="form-control display-flex" id="sort_and_filter">
					<div class="flex-none filter-button">
						<button data-filter="category" data-value="bread" type="button" class="form-button filter">Bread</button>
					</div>
					<div class="flex-none filter-button">
						<button data-filter="category" data-value="dessert" type="button" class="form-button filter">Dessert</button>
					</div>
					<div class="flex-none filter-button">
						<button data-filter="category" data-value="" type="button" class="form-button filter">All</button>
					</div>

					<div class="form-select new-select">
						<select class="js-sort">
							<option value="1">Newest</option>
							<option value="2">Oldest</option>
							<option value="3">Price Low</option>
							<option value="4">Price High</option>
						</select>
					</div>

			</div>


			<div class="productlist grid gap"></div>

		</div>

	</div>


	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

	<!-- CONNECTION -->

	















</body>
</html>