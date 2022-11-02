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
					<!-- <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=1"><img src="img/chocolatecookies.jpg" alt=""></a>
							<figcaption>
								<div>Chocolate Cookies</div>
								<div>$4.05</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=2"><img src="img/cinnamonroll.jpg" alt=""></a>
							<figcaption>
								<div>Cinnamon Roll</div>
								<div>$3.20</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=3"><img src="img/lemonsouffle.jpg" alt=""></a>
							<figcaption>
								<div>Lemon Souffle</div>
								<div>$3.70</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=4"><img src="img/birthdaycupcake.jpg" alt=""></a>
							<figcaption>
								<div>Birthday Cupcake</div>
								<div>$3.20</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=5"><img src="img/boroh.jpg" alt=""></a>
							<figcaption>
								<div>Boroh</div>
								<div>$3.30</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=6"><img src="img/cheesecake.jpg" alt=""></a>
							<figcaption>
								<div>Cheese Cake</div>
								<div>$3.50</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=7"><img src="img/chocolatecroissant.jpg" alt=""></a>
							<figcaption>
								<div>Chocolate Croissant</div>
								<div>$3.99</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=8"><img src="img/classicbrownie.jpg" alt=""></a>
							<figcaption>
								<div>Classic Brownie</div>
								<div>$3.60</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=9"><img src="img/coconuttwist.jpg" alt=""></a>
							<figcaption>
								<div>Coconut Twist</div>
								<div>$3.20</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=10"><img src="img/expressobun.jpg" alt=""></a>
							<figcaption>
								<div>Expresso Bun</div>
								<div>$3.70</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=11"><img src="img/milkbutterpuff.jpg" alt=""></a>
							<figcaption>
								<div>Milk Butter Puff</div>
								<div>$3.80</div>
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
						<figure class="figure product">
							<a href="product_item.php?id=12"><img src="img/readbeanbun.jpeg" alt=""></a>
							<figcaption>
								<div>Red Bean Bun</div>
								<div>$2.99</div>
							</figcaption>
						</figure>
					</div> -->

				<?php 

					include_once "lib/php/functions.php";
					include_once "parts/templates.php";

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