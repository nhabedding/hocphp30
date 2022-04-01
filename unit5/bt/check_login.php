<?php
session_start;
unset($_SESSION['login']);

$username =$_POST['user'];

$pwd = $_POST['pwd'];
$_SESSION['login'] = true;
$check = check($username , $pwd);
if ($check) {
	// code...
	echo "thành công";
	header("Location: index.php");

}else{
	
	function check($username, $pwd){
	$users = [
		[
			'username' => 'minh',
			'pwd' => '1234567'
		],
		[
			'username' => 'hoannc',
			'pwd' => '123456'
		],
	];

	foreach ($users as $user) {
		if ($user['username'] == $username && $user['pwd'] == $pwd) {
			return true;
		}
	}

	return false;
}

?>