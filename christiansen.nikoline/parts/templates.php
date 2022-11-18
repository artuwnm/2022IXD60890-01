<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product">
		<div class="flex-stretch">
			<img src="https://via.placeholder.com/300" alt="">
		</div>
		<figcaption>
				<div>$o->name</div>
				<div>&dollar;$o->price</div>
		</figcaption>
	</figure>
</a>
HTML;
}