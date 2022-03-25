<?php
  session_start();
  $type=$_GET['type'];
  $msp=$_GET['msp'];

  if($_SESSION['cart'][$msp]['soluong']>1 && $type==0){
    $_SESSION['cart'][$msp]['soluong']--;

  }else{
    unset($_SESSION['cart'][$msp]);
  }
  header('Location:cart.php')
 ?>
