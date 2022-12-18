<?php

include_once "lib/php/function.php";

?>

<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>Store</h1>
		</div>
		<div class="flex-stretch"></div>
		<nav class="nav nav-flex flex-none">
			<ul>

				<li><a href="index.php">Home</li>
				<li><a href="about.php">About</li>
				<li><a href="product_list.php">Store</li>
				<li><a href="product_cart.php">cart</li>
					<span>Cart</span>
					<span class="badge"><?=makeCartBadge(); ?> </span>

			</ul>

			</nav>
		</div>
</header>