
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<style type="text/css" media="screen">
		body{
			font-family: 'Roboto', sans-serif;
			font-size: 18px;
			font-weight: 500;
			line-height: 45px;
		}
	</style>
</head>
<body>

	<?php
	
	class Oto
			{
				protected $ten;
				protected $hang_xe;
				protected $mau;
				protected $so_cho;

				function chay(){
					echo  "Đây là phương thức chạy của lớp Ô tô";
				}
			}
	
		class Baiviet{

			protected $tieude;
			protected $duongdan;
			protected $mota;
			protected $noidung;

			// function thongtinbaiviet(){
				// echo "Thông tin bài viết";
			// }

			function __construct(){
				echo "Thông tin bài viết: <br>";
				echo $tieude = "Tên bài viết: Bài tập <br>";
				echo $duongdan = "Đường đẫn: Đường dẫn bài viết đang được cập nhật <br>";
				echo $mota = "Mô tả: Mô tả bài viết đang được cập nhật <br>";
				echo $noidung = "Nội dung: Nội dung bài viết đang được cập nhật <br>";
			}
		}

		// $post = new Baiviet();

		class Danhmuc{

			protected  $ten;
			protected  $duongdan;
			protected  $danhmuccha;
			protected  $anhhienthi;
			protected  $mota;

			// function Thongtindanhmuc(){
			// 	echo "Thông Tin danh mục";
			// }

			function __construct(){
				echo "Thông tin danh mục: <br>";
				echo $duongdan = "Đường dẫn: Đường đẫn danh mục đang được cập nhật <br>";
				echo $ten = "Tên danh mục: Danh mục bài viết <br>";
				echo $danhmuccha = "Danh mục cha: Tin tức <br>";
				echo $anhhienthi = "Ảnh hiển thị: Ảnh hiển thị đang được cập nhật <br>";
				echo $mota = "Mô tả: Mô tả danh mục đang được cập nhật <br>";
			}
		}

		class nguoidung{
			protected  $ten;
			protected  $email;
			protected  $matkhau;
			protected  $anhdaidien;

			function __construct(){
				echo "Thông tin người dùng <br>";
				echo $ten = "Tên: Nguyễn Tất Thành <br>";
				echo $email = "Email: mit26101998@gmail.com <br>";
				echo $matkhau = "Mật Khẩu: Thanh1998 <br>";
				echo $anhdaidien = "Ảnh đại diện: đang được cập nhật <br>";
			}
		}

	?>

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
			// $customer-$ten();
			// $customer->thongtinnguoidung();
		?>
		</strong>
	</p>
	
	
</body>
</html>
