<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<!-- Page Title -->
	<title>Product List</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<div class="container">
		<h2>Product List</h2>
		<?php

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		// $result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` DESC LIMIT 12"); //DESC decending //ASC assending
		$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` "); 

		echo "<div id='bottom' class='container'><div class='grid gap'>" ,array_reduce($result, 'productListTemplate')."</div></div>";

		?>
	</div>
	<?php include "parts/footer.php" ?>
	<script src="js/main.js" type="text/javascript"></script>	
</body>
</html>