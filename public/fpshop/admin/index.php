<?php
session_start();
if(!isset($_SESSION["tk_user"])){
	header("location:login.php");
	exit();
}
include 'config.php';
include 'library/connect.php';
include 'library/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
	<link type="text/css" rel="stylesheet" href="template/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="template/css/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="template/css/mycss.css">
	<script type="text/javascript" src="template/js/bootstrap.js"></script>
	<script type="text/javascript" src="template/js/myscript.js"></script>
	<link href="upload/logoicon.ico" rel="icon">
	<!-- <meta http-equiv="refresh" content="5"> -->
	<title>Admin</title>
	
	<script>
		function acceptRemove(){
			if(window.confirm("bạn có muốn xóa?")==true){
				return true;
			}
			else{
				return false;
			}
		}
	</script>
</head>
<body>

	<div class="containersp">
		<div class="tieude"><img src="upload/fulllogoheader.png" alt="" class="logo-admin"> </div>
		
		<div class="row rowone">
			<div class="col-md-2">
				<div class="menu-vertical">
					<ul>
						<li><div class="admin">Admin</div><a href="logout.php"><button type="button" class="btn btn-primary btn-sm">Đăng xuất</button></a></li>
						<li><div class="list"><a class="text-list" href="index.php">Danh sách</a></div></li>
						<li><div class="list"><a class="text-list" href="index.php?t=them">Thêm sản phẩm</a></div></li>
						<li><div class="list"><a class="text-list" href="index.php?t=don-hang">Đơn hàng</a></div></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="content">

					<?php
					if(isset($_GET["t"])){
						$t=$_GET["t"];
						switch ($t) {
							case 'danh-sach':
							include 'pages/danh-sach.php';
							break;
							case 'sua':
							include 'pages/sua.php';
							break;
							case 'xoa':
							include 'pages/xoa.php';
							break;
							case 'them':
							include 'pages/them.php';
							break; 
							case 'don-hang':
							include 'pages/don-hang.php';
							break; 

							default:
							include 'pages/danh-sach.php';
							break;
						}
					}
					else{
						include 'pages/danh-sach.php';
					}
					?>

				</div>
			</div>
			
		</div>
		
		
	</div>
	<div class="footer-admin" ><p style="margin-top:10px; ">Copyright © 2014-2016 2min’s corner. All rights reserved.</p></div>

</body>
</html>