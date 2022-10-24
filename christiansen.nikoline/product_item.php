<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product Item</title>

<?php include "parts/meta.php"?>
</head>

<body>

<?php include "parts/navbar.php"?>

	<div class="container">
		<div class="card soft" id="fig-single">
			<h2>Product Item # <?= $_GET['id'] ?></h2>
			<figure class="figure">
				<img src="https://via.placeholder.com/400x400?text=product" alt="">
				<figcaption>
					<div>Product Name</div>
					<div>$00.00</div>
				</figcaption>
			</figure>
			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<a href="product_item.php?id=1">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400x400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$00.00</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href="product_item.php?id=2">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400x400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$00.00</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href="product_item.php?id=3">
						<figure class="figure product-overlay">
							<img src="https://via.placeholder.com/400x400?text=product" alt="">
							<figcaption>
								<div class="caption-body">
									<div>Product Name</div>
									<div>$00.00</div>
								</div>
							</figcaption>
						</figure>
					</a>
				</div>
			</div>
			
		</div>
	</div>
	
</body>
</html>