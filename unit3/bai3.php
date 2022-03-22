<?php 

$name=" lê tHị   ngọC hà ";
echo "chuỗi chưa được chuẩn hóa:<br>";
echo "$name<br>";
$name = mb_strtolower($name);
//đổi chữ hoa thành thường
$name= ucwords($name);
// viết hoa chữ cái đầu tiên

$name=trim($name);
// bỏ khoang trắng di
echo "chuỗi được chuẩn hóa:<br>";
echo $name;

?>