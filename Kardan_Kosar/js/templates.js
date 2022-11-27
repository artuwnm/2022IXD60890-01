const listItemTemplate = templater (o=>`

	<a class="col-xs-12 col-md-4 productlist" href="product_item.php?id=${o.id}">
		<figure class="figure product-overlay">
			<img src="/images/${o.thumbnail}"  alt=""/>
			<figcaption>
				<div class="caption-body">
					<div>${o.name}</div>
					<div>&dollar;${o.price.toFixed(2)}</div>
				</div>
			</figcaption>
		</figure>
	</a>
	
`)