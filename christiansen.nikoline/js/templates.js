

const listItemTemplate = templater(o=>`
<a class="col-xs-6 col-md-4" href="product_item.php?id=${o.id}">
    <div class="col-xs-6 col-md-4">
        <figure class="figure product">
            <img src="./img/${o.thumbnail}"; alt="">
            <figcaption>
                <div class="caption-body">
                    <strong>${o.name}</strong>
                    <div>&dollar;${o.price}</div>
                </div>
            </figcaption>
        </figure>
    </div>
</a>

`);