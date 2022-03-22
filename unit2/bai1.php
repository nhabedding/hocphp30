<?php 
echo "Viết một chương trình để in ra các số từ 1 đến 100. Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” thay vì hiển thị số đó và đối với các số chia hết cho 5 thì in ra chữ “Buzz”. Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”<br> <br>";
echo "chia hết cho 3 và 5 thì sẽ in đậm <br> chia hết cho 3 thì chữ Fizz in nghiêng <br> chia hết cho 5 thì Buzz có dấu gạch chân <br><br>";
for ($i=1; $i<=100 ; $i++) { 

	if($i%3==0 && $i%5==0){
		echo " <b > FizzBuzz </b> <br> ";
	}

	else if ($i%3==0){
		echo "  <i > Fizz </i> <br>";
	}
	else if ($i%5==0){
		echo "  <u > Buzz </u> <br>";
	}
	else{
		die();
		echo " $i <br> ";
	}
}
?>