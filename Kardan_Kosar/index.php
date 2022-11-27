<?php

include_once "lib/php/functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	include "parts/meta.php";

	// include_once "lib/php/functions.php";

	include_once "parts/templates.php";
	?>

	<!-- Page Title -->
	<title>Landing  Page</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<main class="display-flex display-direction-row flex-justify-center flex-wrap-wrap grid">
		<section id="hero">
				<?php

				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` DESC LIMIT 1"); //DESC decending //ASC assending

				echo array_reduce($result, 'heroImage');

				?>
		</section>	
		<section id="feature">
			<h2>Featuring Products</h2>
				<?php

				$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_created` DESC LIMIT 6"); //DESC decending //ASC assending

				// echo "<div id='bottom' class='container'><div class='grid gap'>" ,array_reduce($result, 'productListTemplate')."</div></div>";

				echo "<div id='bottom'><div class='grid gap'>" ,array_reduce($result, 'productListTemplate')."</div></div>";

				?>
		</section>
		<section id="mission" class="col-xs-6 col-md-6 col-lg-6">
			<ul class="grid gap">
				<li class="col-xs-12 col-md-6 col-lg-4">
					<h2>Our Vision</h2>
					<p>
						Our vision is to improve the world's health and wellness.
					</p>
				</li>
				<li class="col-xs-12 col-md-6 col-lg-4">
					<h2>Our Mission</h2>
					<p>Grow our trusted brands based on quality and innovation. Over time, combine organic brand growth and future acquisitions to become the world’s most successful and trusted health and wellness Company.</p>
				</li>
				<li class="col-xs-12 col-md-6 col-lg-4">
					<h2>Our Values</h2>
					<p>Our values are our guiding principles as to how we want to conduct ourselves and the behaviours we value as an organization.</p>
				</li>
			</ul>
		</section>
	</main>
	<?php include "parts/footer.php" ?>

	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>