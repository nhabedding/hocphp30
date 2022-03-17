
<?php 
$kq='';
if (isset($_POST['tinh'])) {
	$a=isset($_POST['soA']) ? $_POST['soA']:'';
	$b=isset($_POST['soB']) ? $_POST['soB']:'';
	$c=isset($_POST['soC']) ? $_POST['soC']:'';

	$deta=(($b*$b)-(4*$a*$c));
	if($deta ==0){
		$kq= "Phương trình có nghiệm kép x1=x2= ".(-$b/2*$a);
	}
	else{
		if ($deta <0) {
			$kq= "Phương trình vô nghiệm";
		}
		else{
			$kq= "Phương trình có nghiệm x1= ".( (-$b+sqrt($deta)/(2*$a) )) ." X2= ".( (-$b-sqrt($deta)/(2*$a) ));
		}
	}
}

//echo "Kết quả của phép toán:<br>" .$kq." ";
?>
<form method="post" action="">
	<h1 style="text-align: center;">GIẢI PHƯƠNG TRÌNH BẬC 2:<br>ax<sup>2</sup> + bx + c = 0</h1>
	<h3>VD: Nhập<br> a= -3 b= 5 c=-2 phương trình có 2 nghiệm <br>
	             a=1 b=2 c=3 phương trình vô nghiệm <br>
	             a=1 b=2 c=1 phương trình có nghiệm kép <br> </h3>
	<div style="margin-top: 2%">
		<span>Mời nhập số A: </span>
		<input type="number" name="soA" >
	</div>
	<div style="margin-top: 2%">
		<span>Mời nhập số B: </span>
		<input type="number" name="soB">
	</div>
	<div style="margin-top: 2%">
		<span>Mời nhập số C: </span>
		<input type="number" name="soC">
	</div>
	<div style="margin-top: 2%">
		<input type="submit" name="tinh" value="Tính" >
	</div>
	<h2>kết quả: <?php 
echo "deta= $deta <br>";
	echo "$kq"; ?></h2>
</form>