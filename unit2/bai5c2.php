<?php 
if(isset($_POST['tinh'])){
  $n=isset($_POST['soN']) ? $_POST['soN']:'';
  $a=$n;
  $s=0;
  while($n>0){
    $s+=$n%10;
    $n=$n/10;
  }
}

?>
<h1 style="text-align: center;">chương trình tính tổng các chữ số của một số nguyên N
<br>VD: 1234 = 1 + 2 + 3 + 4 = 10</h1>
<form method="post" >
  <span>Nhập số N:</span><input type="number" name="soN">
  <input type="submit" value="Tính" name="tinh">
  <?php   echo " <br> SỐ N: $a <br>";
   echo "Kết quả: $s";?>
</form>