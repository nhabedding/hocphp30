<?php 

$name=" lê thị   ngọC hà ";
echo "chuỗi chưa được chuẩn hóa:<br>";
echo "$name<br>";

$name= ucwords($name);
// viết hoa chữ cái đầu tiên
$name = mb_strtolower($name);
//đổi chữ hoa thành thường
$name=trim($name);
// bỏ khoang trắng di
echo "chuỗi được chuẩn hóa:<br>";
echo $name;

?>