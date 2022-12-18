<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">
			<h2>Shop</h2>

			<div class="form-control">
				<form classs="hotdog light" id="product_search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>
<div class="form-control">
		<div class="card soft">
		<div class="display-flex flex-wrap">
			<div class="flex-stretch display-flex">
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button" class="form-button">All</button>
				</div>
		
				<div class="flex-none">
					<button data-filter="category" data-value="album" type="button" class="form-button">Albums</button>
				</div>
		
				<div class="flex-none">
					<button data-filter="category" data-value="merch" type="button" class="form-button">Merchandise</button>
				</div>
		
				<div class="flex-none">
					<button data-filter="category" data-value="Poster" type="button" class="form-button">Poster</button>
				</div>
			</div>
			<div class="flex-none">
				<div class="form-select">
					<select class="js-sort">
						<option value="1">Price high to low</option>
						<option value="2">Price low to high</option>
					</select>
				</div>
			</div>
		</div>
		</div>
</div>		


	<div class='productlist grid gap'></div>

	</div>
	</div>
</body>
</html>