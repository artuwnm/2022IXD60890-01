<?php



function productListTemplate($r,$o){


	return $r.<<<HTML

	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<figure class="figure product">
			<a href="product_item.php?id=$o->id"><img src="img/$o->images" alt=""></a>
			<figcaption>
				<div>$o->name</div>
				<div>&dollar;$o->price</div>
			</figcaption>
		</figure>
	</div>

	HTML;
}


function selectAmount($amount=1,$total=10){
	$output = "<select name='amount'>";
	for($i=1;$i<=$total;$i++){
		$output .="<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}

function cartListTemplate($r,$o){

	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,10);

	return $r.<<<HTML

	<div class="display-flex cart-item-form card-section-1">
		<div class="flex-none images-thumbs">
			<img src="img/$o->images" alt="">
		</div>
		<div class="flex-stretch">
			<strong>$o->name ($o->amount)</strong>
			<form action="cart_actions.php?action=delete-cart-item" method="post">
				<input type="hidden" name="id" value="$o->id">
				<input type="submit" class="form-button inline" value="Delete">
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

function cartTotals(){
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

	HTML;
}



























