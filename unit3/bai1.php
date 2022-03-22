<?php 

$array = array( 1, 58, 8, 4, 5);
echo "<pre>";
print_r($array);
echo "</pre>";
// cách 1
echo "<br>Cách 1";
echo "<br>Giá trị lớn nhất của mảng là:" .max($array);

// cách2
echo "<br>Cách 2 ";
for ($i = 0; $i < count($array); $i++)
{
	$max = $array[0];
	$vitri=0;
	if ($array[$i] > $max){
		$max = $array[$i];
		$vitri=$i;
	}
}
echo "<br>Giá trị lớn nhất của mảng là:" .$max ." Tại vị trí thứ $vitri"; 
?>