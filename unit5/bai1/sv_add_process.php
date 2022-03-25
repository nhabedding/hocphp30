<?php 

session_start();

// b1
$sv=$_POST;
// b2
$_SESSION['svs'][]=$sv;

header('Location: sv_list.php'); 
 ?>