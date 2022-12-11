<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<link rel="shortcut icon" href="#">

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Product List</h2>

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>
		<div class="form-control">
			<div class="container">
				<div class="display-flex flex-wrap">
					<div class="flex-stretch display-flex flex-align-center">
							<div class="flex-none">
								<button data-filter="category" data-value="" type="button" class="filter-button">All</button>
							</div>
							<div class="flex-none">/</div>
							<div class="flex-none">
								<button data-filter="category" data-value="ALE" type="button" class="filter-button">ALES</button>
							</div>
							<div class="flex-none">/</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Lager" type="button" class="filter-button">LAGER</button>
							</div>
							<div class="flex-none">/</div>
							<div class="flex-none">
								<button data-filter="category" data-value="Porter" type="button" class="filter-button">PORTER</button>
							</div>
						</div>
					<div class="flex-none">
						<div class="form-select">
							<select class="js-sort" style="background-color: inherit; border: 1px solid var(--color-main-dark); font-size: 0.7em;">
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
								<option value="3">Price low to high</option>
								<option value="4">Price high to low</option>								
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='productlist grid gap'></div>		

	</div>
	<?php include "parts/footer.php"?>
</body>
</html>