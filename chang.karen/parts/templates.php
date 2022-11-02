<?php



function productListTemplate($r,$o){


	return $r.<<<HTML

	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<figure class="figure product">
			<a href="product_item.php?id=$o->id"><img src="img/$o->thumbnail" alt=""></a>
			<figcaption>
				<div>$o->name</div>
				<div>&dollar;$o->price</div>
			</figcaption>
		</figure>
	</div>

	HTML;
}

function cartListTemplate($r,$o){
	return $r.<<<HTML

	<div class="display-flex cart-item-form card-section-1">
		<div class="flex-stretch">
			<strong>$o->name</strong>
			<div>Delete</div>
		</div>
		<div class="flex-none">
			&dollar;$o->price
		</div>
	</div>

	HTML;
}