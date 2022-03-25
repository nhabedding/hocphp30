<?php 
session_start();

$svs=$_SESSION['svs'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h2>Danh sách sinh viên</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Họ và tên</th>
					<th>Giới tính</th>
					<th>Ngày tháng năm sinh</th>
					<th>Quê quán</th>
					<th>Ngoại ngữ</th>
					<th>Thông tin thêm</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($svs as  $sv) {
    		# code.. ?>
    		<tr>
    			<td><?= $sv['info_name'] ?></td>
    			<td><?= $sv['gioitinh'] ?></td>
    			<td><?= $sv['info_date'] ?></td>
    			<td><?= $sv['info_home'] ?></td>
    			<td>
    				<?php 
    				if (isset($sv['ngonngu'])) {
    					foreach ($sv['ngonngu'] as $value) {
    						echo $value ." ";
    					}
    				}
    				?>
    			</td>
    			<td><?= $sv['tn'] ?></td>

    		</tr>
    	<?php } ?>
    </tbody>
</table>
</div>

</body>
</html>