<?php 

 include_once "lib/php/functions.php";
 include_once "parts/templates.php";




 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

</head>

<body>

	<!-- Navigation Bar -->

	<?php include "parts/navbar.php";?>

	<div id="viewwindow">
		<div class="view-window" style="background-image: url('img/pexels-scott-webb-305827.jpg');">
	</div>


	<!-- Features -->
	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-8" >
				<h2>Deals.</h2>
				<?php 
					deals("price"); 
				?>
			</div>
			<div class="col-xs-12 col-md-4" >
				<h2>Best Seller.</h2>
				<?php 
					bestSeller("quantity"); 
				 ?>
					
				
			</div>
		</div>
	</div>


	<!-- Recommended Products -->

	<div class="container">

		<h2>Recommended Products.</h2>

		<?php 

		recommendedCategory("succulent");

		 ?>

	</div>





	<!-- About -->
	<div class="container" style="padding-top: 3em;">
		<h2>The Goal of SunnyPlants.</h2>
		<p style="color:black; font-size: 0.8em; font-weight: 300;">
			At SunnyPlants you will be able to find over 100 individual varieties of cactus and succulents for sale. Our online store provides potted succulents for sale, succulent cuttings for sale, and the ability to buy cactus and succulents in bulk. Take a look at our wide variety of cactus and succulents for sale! We are happy to ship them directly to your home for your enjoyment!
		</p>
	</div>


	<!-- Footer -->
	<?php include "parts/footer.php" ?>


</body>
</html>