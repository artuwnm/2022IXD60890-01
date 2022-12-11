<?php 

include_once "lib/php/functions.php";

?>


<input type="checkbox" id="menu" class="hidden">
<header class="navbar">
	<div class="container display-flex flex-align-center">
		<div class="flex-none">
			<a class="logo_nav" href="index.php"><img src="https://craftpeak-cooler-images.imgix.net/rising-tide-brewing/logomark.png?auto=compress%2Cformat&ixlib=php-1.1.0&s=d4405b91fd2a897d60ec7399ea57bafc"></a>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none menu-button">
			<label for="menu">&equiv;</label>
		</div>
		<nav class="nav nav-flex flex-none">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="product_list.php">Store</a></li>
				<li><a href="product_cart.php">Cart</a></li>
			</ul>
		</nav>
	</div>
</header>


