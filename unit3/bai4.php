<?php
checkPalindrome('ZenttneZ');

function checkPalindrome($string)
{
    echo "Input: " . $string . "<br>";
    // Sử dụng hàm đảo ngược chuỗi strrev() hoặc explod chuỗi rồi áp dụng bào 4.2 đảo ngược mảng
    if ($string == strrev($string)) {
        echo $string . " là chuỗi palindrome.";
    } else  {
        echo $string . " không là chuỗi palindrome.";
    }
}

?>