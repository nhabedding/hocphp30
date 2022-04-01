<?php
session_start();
var_dump($_SESSION)
echo "home"

if (isset($_SESSION['login'])) {
	echo '<a href="logout.php">Logout</a>';
}else{
	echo '<a href="login.php">Login</a>';
}


?>