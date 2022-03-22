<?php
function kiemtra($n) {
    if ($n < 2) {
        return false;
    }
    for($i = 2; $i <= $n-1; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
echo ("Các số nguyên tố nhỏ hơn 100 là  <br>");
for($i = 0; $i < 100; $i ++) {
    if (kiemtra ( $i )) {
        echo ( " <b> $i ");
    }
}
?>