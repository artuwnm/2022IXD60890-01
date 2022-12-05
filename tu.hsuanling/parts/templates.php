<?php


function productlistTemplate($r,$o) {

return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
	<div class="flex-stretch">
		<img src="img/$o->thumbnail" alt="">
	</div>
	<figcaption class="flex-none">
		<div style="font-weight: 700; font-size: 0.9em; padding-bottom: 0.5rem;">$o->title</div>
		<div style="font-size: 0.8em; font-weight: 300;">$o->size</div>
		<div>&dollar;$o->price</div>
	</figcaption>
	</figure>
</a>


HTML;

};

function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}


function cartListTemplate($r,$o){
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,10);
	return $r. <<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->title</strong>
		<form action="cart_actions.php?action=delete-cart-item" method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="form-button inline" value="Delete" style="font-size: 0.8em;">
		</form>
	</div>

	<div class="flex-none">
		<div>&dollar;$totalfixed</div>
		<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
		<input type="hidden" name="id" value="$o->id">
			<div class="form-select" style="font-size:0.8em">
				$selectamount
			</div>
		</form>
	</div>
</div>


HTML;
}


function cartTotals() {
	$cart = getCartItems();

	$cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');


	return <<<HTML

	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Subtotal</strong></div>
		<div class="flex-none">&dollar;$pricefixed</div>
	</div>
	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Taxes</strong></div>
		<div class="flex-none">&dollar;$taxfixed</div>
	</div>
	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Total</strong></div>
		<div class="flex-none">&dollar;$taxedfixed</div>
	</div>
	<div class="card-section">
		<a href="product_checkout.php" class="form-button">Checkout</a>
	</div>


	HTML;
}

function recommendedProducts($a) {
	$products = array_reduce($a,'productlistTemplate');

	echo <<<HTML
	<div class="grid gap productlist">$products</div>



	HTML;

}


function recommendedCategory($cat,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` = '$cat' ORDER BY `id` DESC LIMIT 3");
	recommendedProducts($result);
}


function recommendedSimilar($cat,$id=0,$limit=3) {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` = '$cat' AND `id`<>$id ORDER BY rand() DESC LIMIT 3");
	recommendedProducts($result);
}

// Deals & Best Seller


function dealsTemplate($r,$o) {

return $r.<<<HTML
<a class="col-xs-12 col-md-8" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column" style="height: 50vh;">
	<div class="flex-stretch">
		<img style="position: relative; top: -15em;" src="img/$o->thumbnail" alt="">
	</div>
	</figure>
</a>


HTML;
};

function bestSellerTemplate($r,$o) {

return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column" style="height: 50vh;">
	<div class="flex-stretch">
		<img src="img/$o->thumbnail" alt="">
	</div>
	</figure>
</a>


HTML;
};

function dealsProducts($a) {
	$products = array_reduce($a,'dealsTemplate');

	echo <<<HTML
	<div>$products</div>

	HTML;

}

function bestSellerProducts($a) {
	$products = array_reduce($a,'bestSellerTemplate');

	echo <<<HTML
	<div>$products</div>

	HTML;

}

function deals() {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `price` ASC LIMIT 1");
	dealsProducts($result);
}

function bestSeller() {
	$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `quantity` ASC LIMIT 1");
	bestSellerProducts($result);
}




















