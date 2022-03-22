<?php 

$name=" lê thị   ngọc hà ";
echo "chuỗi chưa được chuẩn hóa:<br>";
echo "$name<br>";
// viết hoa chữ cái đầu tiên
$name= ucwords($name);
// bỏ khoang trắng di
$name=trim($name);

echo "chuỗi được chuẩn hóa:<br>";
echo $name;

?>