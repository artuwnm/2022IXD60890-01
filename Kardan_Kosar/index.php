
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	include "parts/meta.php" 
	?>
	<?php 
	include_once "lib/php/functions.php";
	?>
	<?php 
	include_once "parts/templates.php";
	?>

	<!-- Page Title -->
	<title>Landing  Page</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<main class="display-flex display-direction-row flex-justify-center flex-wrap-wrap grid">
		<section id="hero" class="container">
				<?php

				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` DESC LIMIT 1"); //DESC decending //ASC assending

				echo array_reduce($result, 'heroImage');

				?>
		</section>	
		<section id="feature">
			<h2>Featuring Products</h2>
				<?php

				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` DESC LIMIT 6"); //DESC decending //ASC assending

				echo "<div id='bottom' class='container'><div class='grid gap'>" ,array_reduce($result, 'productListTemplate')."</div></div>";

				?>
		</section>
		<section id="mission" class="col-xs-6 col-md-6 col-lg-6">
			<h2 >Mission</h2>
			<ul class="grid gap">
				<li class="col-xs-12 col-md-6 col-lg-4">1</li>
				<li class="col-xs-12 col-md-6 col-lg-4">1</li>
				<li class="col-xs-12 col-md-6 col-lg-4">1</li>
			</ul>
		</section>
	</main>
	<?php include "parts/footer.php" ?>

	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>