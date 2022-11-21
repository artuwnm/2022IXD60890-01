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

function cartListTemplate($r,$o){
	$totalfixed = number_format($o->total,2,'.','');
	return $r. <<<HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->title</strong>
		<div>Amount: $o->amount</div>
		<div>Delete</div>
	</div>

	<div class="flex-none">
		&dollar;$totalfixed
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






















