<?php


include_once "lib/php/function.php"; 
include_once "parts/templates.php";

//print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Katelynn Photography</title>

	<?php include "parts/meta.php"; ?>

<body>
	<?php include "parts/navbar.php";?>
	<div class="container">
		<h2>Product List</h2>


<?php include_once "lib/php/function.php"; 
	include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(),
			"
			SELECT * FROM `Products`
		ORDER BY `date_create` DESC
		LIMIT 3
		"
		);

		echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

?>	
	</div>
</body>

</html>