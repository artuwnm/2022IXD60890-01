

const listItemTemplate = templater(o=>`
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="img/${o.thumbnail}" alt="">
		</div>
		<figcaption class="flex-none">
			<div>${o.name}</div>	
			<div>&dollar;${o.price.toFixed(2)}</div>
		</figcaption>
	</figure>	
</a>
`);