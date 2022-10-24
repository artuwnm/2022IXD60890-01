<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>

	<!-- Page Title -->
	<title>Landing  Page</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<main class="display-flex display-direction-row flex-justify-center flex-wrap-wrap grid">
		<section id="hero"></section>	
		<section id="feature">
			<h2>Featuring Products</h2>
			<ul id="bottom" class=" grid gap ">
				<li class="col-xs-12 col-md-6 col-lg-4"><?php include "parts/productOverlay.php" ?></li>
				<li class="col-xs-12 col-md-6 col-lg-4"><?php include "parts/productOverlay.php" ?></li>
				<li class="col-xs-12 col-md-6 col-lg-4"><?php include "parts/productOverlay.php" ?></li>
				<li class="col-xs-12 col-md-6 col-lg-4"><?php include "parts/productOverlay.php" ?></li>
				<li class="col-xs-12 col-md-6 col-lg-4"><?php include "parts/productOverlay.php" ?></li>
				<li class="col-xs-12 col-md-6 col-lg-4"><?php include "parts/productOverlay.php" ?></li>
			</ul>
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