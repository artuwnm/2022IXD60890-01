
const listItemTemplate = templater(o=>`
	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<figure class="figure product">
			<a href="product_item.php?id=${o.id}"><img src="img/${o.thumbnail}" alt=""></a>
			<figcaption>
				<div>${o.name}</div>
				<div>&dollar;${parseFloat(o.price).toFixed(2)}</div>
			</figcaption>
		</figure>
	</div>
`);