<?php
	
	class Baiviet{

		var	$tieude;
		var	$duongdan;
		var	$mota;
		var	$noidung;

		// function thongtinbaiviet(){
		// 	echo "Thông tin bài viết";
		// }

		function __construct(){
			echo "Thông tin bài viết: <br>";
			echo $tieude = "Bài viết <br>";
			echo $duongdan = "Đường đẫn đang được cập nhật <br>";
			echo $mota = "Mô tả đang được cập nhật <br>";
			echo $noidung = "Nội dung đang được cập nhật <br>";
		}
	}

	class Danhmuc extends Baiviet{

		var $ten;
		// var $duongdan
		var $danhmuccha;
		var $anhhienthi;
		// var $mota;

		// function Thongtindanhmuc(){
		// 	echo "Thông Tin danh mục";
		// }

		function __construct(){
			echo "Thông tin danh mục: <br>";
			echo $ten = "Danh mục bài viết <br>";
			echo $danhmuccha = "Tin tức <br>";
			echo $anhhienthi = "Ảnh hiển thị đang được cập nhật <br>";
		}
	}

	class nguoidung{
		var $ten;
		var $email;
		var $matkhau;
		var $anhdaidien;

		function __construct(){
			$ten = "Nguyễn Tất Thành";
			$email = "mit26101998@gmail.com";
			$matkhau = "Thanh1998";
			$anhdaidien = "đang được cập nhật";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<p>
		<strong>
		<?php 
			$post = new Baiviet();
			// $post->thongtinbaiviet();
		?>
		</strong>
	</p>
	<p>
		<strong>
		<?php
			$category = new Danhmuc();
			// $category->Thongtindanhmuc();
		?>
		</strong>
	</p>
	<p>
		<strong>
		<?php 
			$customer = new nguoidung();
			// $customer->thongtinnguoidung();
		?>
		</strong>
	</p>
	
</body>
</html>