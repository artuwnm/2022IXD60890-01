<?php 
include_once"lib/php/functions.php";
include_once"parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Our beers</title>
	<link rel="shortcut icon" href="#">
	<?php include "parts/meta.php"?>

</head>
<body>

	<?php include "parts/navbar.php"?>

	<div class="view-window" style="background-image:url(img/view-window.jpg);">
		<div class="fill-parent display-flex flex-align-center flex-justify-center">
		</div>
	</div>

<div class="container">
	<div class="grid gap">
	 	<a href="product_list.php" class="form-button1 col-xs-12 col-md-4">Our Beer</a>
	 	<a href="http://www.nikoline.ch/aau/ixd608/christiansen.nikoline/product_item.php?id=15" class="form-button1 col-xs-12 col-md-4">Anniversary Beer</a>
	 	<a href="product_cart.php" class="form-button1 col-xs-12 col-md-4">Your Cart</a>
 	</div>
		<br>
		<br>
		<hr>
		<br>
		<br>
</div>
			

		<section class="container">
			<div class="grid">
				<figure class="col-xs-12 col-md-3"><img class="welcome-img" src="img/van3.jpg"></figure>
				<div class="col-xs-12 col-md-9 welcome-txt">
					<h2 class="product-benefits">Welcome!</h2>
					<div class="product-benefits">Rising Tide Brewing Company is an independent, family-owned brewery that anchors Portland,<br> Maine’s vibrant East Bayside neighborhood. We are guided by creative flavors, quality, consistency, community, and a love of all things outdoors.<br><br>Open 7 days a week, inside and out serving cold and refreshing beer to pair with delicious food from The Galley, our new onsite kitchen!</div>
				</div>
			</div>

			<br>
			<br>
			<hr>
			<br>
			<br>

		</section>

	<div class="container">	
		<h2>Our Best Sellers</h2>
		<?php recommendedCategory("lager"); ?>
	</div>

<?php include "parts/footer.php"?>

	
</body>
</html>