<?php 	


function productListTemplate($r,$o) {

	return $r.<<<HTML
	<a class="col-xs-12col-md-6" href="product-item.php?id=$o->id">

		<figure class="figure product display-flex-column">
			<div class="flex-stretch">
			<img src="img/$o->thumbnail" alt="">
			</div>
			<figcaption class="flex-none">
				<div>$o->title</div>
				<div>&dollar;$o->price=</div>
			</figcaption>
			
		</figure>
	</a>



	HTML;
}



function selectAmount($amount=1, $total=10) {
	$output = "<select name ='amount'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</selected>";
	return $output;

}




function cardListTemplate($r,$o) {
	$totalfixed = number_format($o->total,2,'.','');
	$selectamount = selectAmount($o->amount,10);

	return $r.<<<HTML
	
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="/img/$o->thumbnail">

		</div>

		<div class="flex-stretch">
			<strong>$o->title</strong>
			<form action="cart_action.php?action=delete-cart-item" method="post">
			<input type="hidden" name="id" value="$o->id">
			<input type="submit" class="form-button inline" value="Delete" style="font-size: 0.8em;">
			</form>
		</div>
		
		<div class="flex-none">
			<div>&dollar;$totalfixed</div>
			<form action="cart_action.php?action=update-cart-item" method="post" onchange="this.submit()">

				<div class="form-select" style="font-size:0.8em">
				$selectamount
				</div>
			</form>			
		</div>

		</div>
	</div>


	HTML;
}

function cartTotals() {
	$cart = getCartItems();

	$cartprice =  array_reduce($cart,function($r,$o){return $r + $o->total;},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$taxedfixed = number_format($cartprice*1.0725,2,'.','');

	return <<<HTML

	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Sub Total</strong></div>
		<div class="flex-none">&dollor;$pricefixed</div>
					
	</div>


	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Taxes</strong></div>
		<div class="flex-none">&dollor;$taxfixed</div>
					
	</div>
			

	<div class="card-section display-flex">
		<div class="flex-stretch"><strong>Total</strong></div>
		<div class="flex-none">&dollor;$taxedfixed</div>
					
	</div>
	<div class="card-section">
			<a href="product_checkout.php" class="form-button">Checkout</a>
	</div>
					

	HTML;

}
 ?>