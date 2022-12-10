<?php
include_once "parts/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body id="home_body">
	<?php include "parts/navbar.php"; ?>
	<div class="background-img">

		<div class="container">
			<article id="article" class="article card soft">
				<h2 id="news">Enter code  <span> SWEET30 </span>  to get 30% off!</h2>
			</article>
		</div>

		<div class="container" id="home_container">
			<h1 id="welcome">Welcome to T & 5 !</h1>
		</div>

		<div class="container recommeneded">
			<h2 class="display-flex recommeneded-h2" id="recommeneded-h2">New Arrivals</h2>
			<?php

			recommendedCategory("bread");
			?>
		</div>

	</div>

	
	

	<!-- FOOTER -->

	<?php include "parts/footer.php"; ?>

</body>