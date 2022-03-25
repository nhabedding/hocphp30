<?php 
session_start();
if (isset($_SESSION['cart'])) {
	$products=$_SESSION['cart'];
}
else{
	$products=array();
}

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
		<h2>Danh sách sản phẩm</h2>
		<a href="index.php">Xem trang sản phẩm</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Mã sản phẩm</th>
					<th>Tên sản phẩm</th>
					<th>Giá bán</th>
					<th>Số lượng</th>
					<th>Thành tiền</th>
					<th>Ảnh sản phẩm</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $product) { ?>
					<tr>
						<td><?= $product['id'] ?></td>
						<td><?= $product['ten']?></td>
						<td><?= $product['gia']?></td>
						<td><a style="margin-right:10px;" href="add2cart.php?msp=<?= $product['id']?>&type=0" class="btn btn-danger">+</a><?= $product['soluong'] ?><a href="remove.php?msp=<?= $product['id'] ?>" style="margin-left:10px;" class="btn btn-primary">-</a> </td>
						<td><?= number_format($product['soluong']*$product['gia'])?></td>
						<td><img style="width:80px;height:100px;" src="<?= $product['anh'] ?>"></td>
						<td>
							<a href="remove.php?msp=<?= $product['id'] ?>&type=1" class="btn btn-danger">Xóa sản phẩm</a>
						</td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
