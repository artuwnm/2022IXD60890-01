<?php 

	$result = makeQuery(
		makeConn(),
		"
		SELECT *
		FROM `products`
		ORDER BY `date_create` DESC
		LIMIT 12
		"

	);

	echo "<div class='productlist grd gap'>",array_reduce($result,'productListTemplate'),"</div>";

?>