<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<script>
	query({type:'products_all'}).then(d=>{
		$(".productlist").html(listItemTemplate(d.result))
	});
	</script>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>


	<div class="container">
			<h2>Shop</h2>

			<div class="form-control">
				<form classs="hotdog light" id="product_search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>


	<div class='productlist grid gap'></div>

	</div>
</body>
</html>