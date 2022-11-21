<?php
	include_once "lib/php/functions.php";


?>


<header id="navigation" class="display-flex flex-align-center">
	<nav class="container display-flex flex-justify-space-between flex-align-center">
		<ul id="storeIcons" class="display-flex">
			<li id="burger"><a href="index.php" class="bgImage"><img /></a></li>
			<li id="logo"><a href="index.php" class="bgImage"><img /></a></li>
		</ul>
		<div class="flex-stretch"></div>

		<!-- nav.nav>ul>li*4>a[href=#article$]>{link $} -->
		<nav class="nav">
			<ul class="container display-flex">
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Products</a></li>
				<li><a href="cart.php">
					<span>Cart</span>
					<span class="badge"><?= makeCartBadge(); ?></span>
				</a></li>
			</ul>
		</nav>
	</nav>
</header>