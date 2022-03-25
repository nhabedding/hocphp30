<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="sv_add_process.php" method="POST" role="form">
		<h1>Nhập dữ liệu thông tin sinh viên</h1>
		<div>
			<label>Họ và tên:</label>
			<input type="text" placeholder="Nhập họ và tên của bạn" name="info_name">
		</div>
		<div style="margin-top: 2%">
			<label>Giới tính:</label>
			<input type="radio" name="gioitinh" value="nam" >Nam
			<input type="radio" name="gioitinh" value="nu" >Nữ
		</div>
		<div style="margin-top: 2%">
			<label>Ngày tháng năm sinh:</label>
			<input type="text" placeholder="Nhập ngày tháng năm sinh" name="info_date">
		</div>
		<div style="margin-top: 2%">
			<label>Quê quán:</label>
			<input type="text" placeholder="Nhập nơi bạn ở" name="info_home">
		</div>
		<div style="margin-top: 2%">
			<label>Ngoại ngữ:</label>
			<input type="checkbox" name="ngonngu[]" value="tienganh" >Tiếng Anh
			<input type="checkbox" name="ngonngu[]" value="tiengnhat" >Tiếng Nhật
			<input type="checkbox" name="ngonngu[]" value="tiengphap" >Tiếng Pháp
		</div>
		<div style="margin-top: 2%">
			<label style="display: block;">Thông tin thêm:</label>
			<textarea name="tn" style="width: 300px; height: 100px" ></textarea>
		</div>
		<button>Thêm thông tin</button>
	</form>
</body>
</html>