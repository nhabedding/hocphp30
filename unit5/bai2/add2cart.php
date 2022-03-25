<?php 
require ("dulieu.php");
session_start();
$msp=$_GET['msp'];
if (isset($_SESSION['cart'][$msp])) {
	$_SESSION['cart'][$msp]['soluong']++;
}
else{
	$product=$products[$msp];
	$product['soluong']=1;

	$_SESSION['cart'][$msp]=$product;
}
header('Location:cart.php');


 ?>