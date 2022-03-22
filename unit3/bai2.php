<?php 
$array =array(37,32,33,30,40);

echo "<pre>";
print_r($array);
echo "</pre>";


// cách 1
echo "mảng theo thứ tự ngược lạ:<br>";
for ($i=count($array) ; $i >=0 ; $i--) { 
	echo $array[$i] ." ";
}

?>