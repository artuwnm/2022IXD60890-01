<?php

function productListTemplate($r,$o) {
return $r.<<<HTML
	<a class="col-xs-12 col-md-4 productlist" href="product_item.php?id=$o->id">
		<figure class="figure product-overlay">
			<img src="/images/$o->thumbnail"  alt=""/>
			<figcaption>
				<div class="caption-body">
					<div>$o->name</div>
					<div>&dollar;$o->price</div>
				</div>
			</figcaption>
		</figure>
	</a>
HTML;
}


function heroImage($r,$o) {
return $r.<<<HTML
	<a href="product_item.php?id=$o->id">
		<img src="/images/$o->hero_images"  alt=""/>
	</a>
HTML;
}

function cartListTemplate($r,$o) {
return $r.<<<HTML
	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<div>
				<img src="/images/$o->thumbnail" />
			</div>
		</div>
		<div class="flex-stretch card-product-section">
			<strong>$o->name</strong>
			<div>Edit</div>
			<div>Delete</div>
		</div>
		<div class="flex-none card-product-section">&dollar;$o->price</div>
	</div>
HTML;
}