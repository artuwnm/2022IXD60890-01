<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product List</title>
	
	<?php include "parts/meta.php"; ?>

</head>
<body id="list_body">
	<?php include "parts/navbar.php"; ?>
	<div class="list_bg">

		<div class="container" id="list_container">

			<div class="container" id="list_title_container">
				<h1 id="list-title">Sweet & Homie Collection</h1>
			</div>

			<div class="grid gap">

				<?php 

					$result = makeQuery(
						makeConn(),
						"
						SELECT *
						FROM `products`
						ORDER BY `date_create` DESC
						LIMIT 12
						"

					);

					echo array_reduce($result,'productListTemplate');

				?>

			</div>
		</div>

	</div>


	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

	<!-- CONNECTION -->

	















</body>
</html>