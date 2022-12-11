<?php

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

	<!-- Page Title -->
	<title>Product List</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<div class="container">
		<h2 id="productListTitle">Product List</h2>

		<div class="form-control">
			<form action="" id="product-search">
				<div class="form-control">
					<input id="address_street" type="text" class="form-input interactive"/>
					<label for="address_street" class="form-label-animated">Search Product</label>
				</div>
			</form>
		</div>
		<div class="container form-control display-flex flex-justify-space-between flex-wrap-wrap" id="filterProducts">

			<div class="form-control display-flex gap flex-wrap-wrap">
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button" class="form-button">All Products</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="Letter Vitamin" type="button" class="form-button">Letter Vitamin</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="Multivitamin" type="button" class="form-button">Multivitamins</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="Omega" type="button" class="form-button">Omega</button>
				</div>
				<div class="flex-none">
					<button data-filter="category" data-value="Solutions" type="button" class="form-button">Solutions</button>
				</div>
			</div>
			<div class="form-control" id="sort">
				<div class="form-select">
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Most Expensive</option>
						<option value="4">Least Expensive</option>
					</select>
				</div>
			</div>
		</div>

		<div id='bottom' class='container'><div class='productlist grid gap'></div></div>
	</div>
	<?php include "parts/footer.php" ?>
	<script src="js/main.js" type="text/javascript"></script>	
</body>
</html>