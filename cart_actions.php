<?php



include_once "lib/php/function.php"; 
include_once "parts/templates.php";

function arryay_find($array,$fn) {
	foreach($array as $o) if($fn($o)) return $o;
	return false;
}
function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}


function addToCart($id,$amount,$color) {
	//$_SESSION['cart'][] = $p['product-id'];
	$cart = getCart();

	$p = array_find($cart,function($o) use($id) {return $o->id==$id;});

	if ($p) {
		$p->amount += $amount;

	}	else {

	$_SESSION['cart'][] = (object) [
		"id"=>$id,
		"amount"=>$amount,
		"color"=>$color

	];
	}
}

function resetCart() {$_SERVER['cart'] = []; }


switch($_GET['action']) {

	case "add-to-cart":
	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =".$_POST[`product-id`])[0];
		addToCart($_POST['product-id'],$_POST['product-amount'],$_POST['product-color']);
		header("location:product_added_to_cart.php?id={$_POST['product-id']}");
		break;
	

	case "update-cart-item":
		$p = cartItemById($_POST['id']);
		$p->amount = $_POST['amount'];
		header("location:product_card.php");
		break;
	
	case "delete-cart-item":
		$_SESSION['cart'] = array_filter($_SESSION['cart'],function($o){return $o->id!=$_POST['id'];});
		header("location:product_cart.php");
		break;

	case "reset-cart":
		resetCart();
		
		break;

	default:
		die("incorrect Action");
}


print_p([$_GET,$_POST,$_SESSION]);