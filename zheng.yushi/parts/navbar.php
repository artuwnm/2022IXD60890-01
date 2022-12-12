<?php

include_once "lib/php/functions.php";

?>
<input type="checkbox" id="menu" class="hidden">
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Ipdeok</h1>
			</div>
			<div class="flex-stretch"></div>
			<div class="flex-none menu-button">
				<label for="menu">&equiv;</label>
			</div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="index.php">New</a></li>
					<li><a href="product_list.php">Shop</a></li>
					<li><a href="Musicchart.php">Music Chart</a></li>
					<li><a href="product_list.php">Fans Club Shop</a></li>
					<li><a href="cart.php">
						<span>Cart</span>
						<span class="bage"><?= makeCartBadge(); ?></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>