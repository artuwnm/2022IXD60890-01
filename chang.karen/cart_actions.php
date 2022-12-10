<?php 

include_once "lib/php/functions.php";

print_p($_GET['action']);
print_p($_GET['cart']);
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
		case "apply-promo-code":
			if(isset($_POST['promoCode']) ){
			
				$promoCode = $_POST['promoCode'];
			}else{
				$promoCode = 0;
			}
			
			if($promoCode=="SWEET30"){
				$_SESSION['promo'] = true;
			}else{
				$_SESSION['promo'] = false;
			}
			
			header("location:cart.php");
			break;
		default:
			die("Incorrect Action");
	}

print_p([$_GET,$_POST,$_SESSION]);
print_p($_POST['promoCode']);
