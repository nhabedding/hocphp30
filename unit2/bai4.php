<?php
echo ("Tổng s = 1 + 1/2 + 1/3 +... + 1/100  <br>");
$s=0;
for ($i=1; $i<=100 ; $i++) { 
	$s+= 1/$i;
}
echo "Tổng s= $s";
 ?>