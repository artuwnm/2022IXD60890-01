<?php 
include_once "lib/php/functions.php"; 
include_once "parts/templates.php"; 
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<?php include "parts/meta.php"; ?>
</head>
<body class="flush">
	<?php include "parts/navbar.php"; ?>
	<div class="content">		
		<div class="container">
			<div class="card soft">
				<h2>Finding your favorite jewelry</h2>
			   

				
			</div>

		</div>
		<div class="container" id="viewwindow">
			</div>
		<div class="view-window" style="background-image: url('img/earing.jpg');">
		</div>

		<div class="container">
			<div class="card soft">
				<h2>Winter Collection</h2>

				<?php

				include_once "lib/php/functions.php";
				include_once "parts/templates.php";

				$result = makeQuery(
					makeConn(),
					"
					SELECT *
					FROM `products`
					ORDER BY `date_create` 
					LIMIT 6
					"
				);

				echo "<div class='productlist grid gap'>",array_reduce($result,'collectionTemplate'),"</div>";

				?>

				
			   

				
			</div>

		</div>
		<div class="container">
			<h2>Latest Ring</h2>
			<?php recommendedCategory("ring");?>
			<h2>Latest Necklace</h2>
			<?php recommendedCategory("necklace");?>
			<h2>Latest Earring</h2>
			<?php recommendedCategory("earring");?>
		</div>
	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>