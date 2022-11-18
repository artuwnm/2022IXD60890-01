<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product List</title>

<?php include "parts/meta.php"?>

</head>

<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<h3>Products</h3>
				
			
		<?php 

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(), 
			"
			SELECT *
			FROM `products`
			ORDER BY `price` DESC
			LIMIT 12
			"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";


		?>
	</div> 
	
</body>
</html>