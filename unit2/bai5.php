<?php
$number = 1234;
$sum = 0;
while ($number >0) {
	// code...
	$digit = $number % 10;
	$sum += $digit ;
	$number = ($number - $digit) / 10;
}
echo $sum;
?>