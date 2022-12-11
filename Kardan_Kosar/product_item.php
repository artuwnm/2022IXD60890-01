<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" .$_GET['id'])[0];

	$images = explode(",", $product->images);
	$image_elements = array_reduce($images, function($r, $o){
		return $r."<img src='/images/$o'/>";


	})
	//print_p($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>
	<script src="js/product_thumbs.js" ></script>
	
	<!-- Page Title -->
	<title>Product  Page</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<main>
		<div class="container">
			<div class="container">
				<div class="grid gap">
					<div class="col-xs-12 col-md-5 product-item">
						<div class="display-flex display-direction-column product-item-images">
							<div class="images-main">
								<img src="/images/<?= $product->thumbnail?>" />
							</div>
							<div class="images-thumbs">
								<div><?= $image_elements?></div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-7 product-item" >
						<form class="product-item-form" method="post" action="cart_actions.php?action=add-to-cart">

							<input type="hidden" name="product-id" value="<?= $product->id ?>"/>

							<h2 class="product-title">Product Title</h2>
							<h3 class="product-name"><?= $product->name?></h3>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<div class="product-price"><span>Price:</span> &dollar;<?= $product->price?></div>
							<div class="product-sku"><span>Sku:</span> <?= $product->sku?></div>
							<div class="product-size"><span>Size:</span> <?= $product->size?> Tablet</div>
							<h4 class="product-description">Description</h4>
							<div class="product-description"><?= $product->description?></div>
							

							<div>
								<h4><label for="product-amount">Amount</label></h4>
								<div class="form-select">
									<select id="product-amount" name="product-amount">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
									</select>
								</div>
							</div>

							<div class="form-control">
								<!-- <a class="form-button" href="product_added_to_cart.php?id=<?= $product->id?>">Add to Cart</a> -->
								<input type="submit" class="form-button" value="Add to Cart" />
							</div>
							
							<div class="form-control">
								<a class="form-button" href="product_list.php">Continue Shopping</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<section class="container grid gap" id="productBenefits">
			<div class="col-xs-12 col-md-3">
				<h4 class="product-benefits">Benefits</h4>
				<div class="product-benefits"><?= $product->benefits?></div>
			</div>
			<figure class="col-xs-12 col-md-9"><img src="/images/<?= $product->benefit_image?>" /></figure>
		</section>

		<section id="bottom" class="container col-xs-12 col-md-4 productlist">
			<h2>Recommanded Products</h2>
			<?php

			recommendedSimilar($product->category, $product->id);

			?>
		</section>


		
	</main>	
	<div class="product_item_footer">
		<?php include "parts/footer.php" ?>		
	</div>
	
	<script src="js/main.js" type="text/javascript"></script>
</body>
</html>