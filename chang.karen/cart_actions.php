<?php 

include_once "lib/php/functions.php";

print_p($_GET['action']);

	switch($_GET['action']) {
		case "add-to-cart":
			$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_POST['product-id'])[0];
			addToCart($_POST['product-id'],$_POST['product-amount']);
			header("location:added_to_cart.php?id={$_POST['product-id']}");
			break;
		case "update-cart-item":
			$p = cartItemById($_POST['id']);
			$p->amount = $_POST['amount'];
			header("location:cart.php");
			break;
		case "reset-cart":
			resetCart();
			break;
		case "delete-cart-item":
			$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){return $o->id!=$_POST['id'];});
			header("location:cart.php");
			break;
		default:
			die("Incorrect Action");
	}

print_p([$_GET,$_POST,$_SESSION]);