
const listItemTemplate = templater (o=>`

<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
	<figure class="figure product display-flex flex-column">
	<div class="flex-stretch">
		<img src="img/${o.thumbnail}" alt="">
	</div>
	<figcaption class="flex-none">
		<div style="font-weight: 700; font-size: 0.9em; padding-bottom: 0.5rem;">${o.title}</div>
		<div style="font-size: 0.8em; font-weight: 300;">${o.size}</div>
		<div>&dollar;${o.price}</div>
	</figcaption>
	</figure>
</a>

`);