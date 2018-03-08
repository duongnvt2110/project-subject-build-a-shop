<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS -->
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css"  href="fpshop/public/css/custom.css">
	<link rel="stylesheet" type="text/css"  href="fpshop/public/css/ss.css">
	<link rel="stylesheet" type="text/css"  href="fpshop/public/css/layout.css">
	<link rel="stylesheet" type="text/css"  href="fpshop/public/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css"  href="fpshop/public/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css"  href="fpshop/public/css/style.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- JS -->
	<script type="text/javascript"  src="fpshop/public/js/jquery-3.2.1.min.js" ></script>
	<script type="text/javascript"  src="fpshop/public/js/js.js" ></script>
	<script type="text/javascript" src="fpshop/public/js/owl.carousel.js" ></script>
	<script type="text/javascript" src="fpshop/public/js/owl.carousel.min.js" ></script>
	<script stype="text/javascript" src="fpshop/public/js/jquery-ui.js""></script>
	<script src="https://use.fontawesome.com/9325ad171d.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Shop 2min_corner</title>
	<link href="fpshop/public/image/logo/logoicon.ico" rel="icon">
	<link href="fpshop/public/image/logoicon.ico" rel="icon">
	<meta charset="UTF-8">
</head>
<body>
	<!-- Header task-bar -->
	<div clas="header-all navbar">
		<div class="navbar-top" style="position:fixed;">
			<div class="container">
				<nav class="navbar navbar-expand-lg ">
					<a class="navbar-brand" href="{{route('trangchu')}}">
						<img src="fpshop/public/image/logo/fulllogoheader.png" style="width:160px;height:40px;" href="#">
					</a>
					<button class="navbar-toggler collapsed btn-he" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
{{-- 							<div class="nav-item ">
								<a class="nav-link" href="fpshop/index.php">
									&nbsp;HOME
								</a>
							</div> --}}

							<div class="nav-item dropdown">
								<a class="nav-link dropbtn" href="{{route('duongda')}}">&nbsp;DƯỠNG DA
									<i class="fa fa-caret-down"></i>
								</a>

								<div class="dropdown-content">
									<a href="{{route('duongda')}}">Làm sạch</a>
									<a href="{{route('duongda')}}">Mặt nạ</a>
									<a href="{{route('duongda')}}">Xịt khoáng</a>
									<a href="{{route('duongda')}}">Chống nắng</a>
								</div>
							</div>


							<div class="nav-item dropdown">
								<a class="nav-link dropbtn" href="{{route('trangdiem')}}">&nbsp;TRANG ĐIỂM
									<i class="fa fa-caret-down"></i>
								</a>

								<div class="dropdown-content">
									<a href="{{route('trangdiem')}}">Trang điểm môi</a>
									<a href="{{route('trangdiem')}}">Trang điểm mắt</a>
								</div>
							</div>

							<div class="nav-item">
								<a class="nav-link" href="{{route('cart')}}">
									<i class="fa fa-shopping-cart" aria-hidden="true">&nbsp;</i>
								</a>
							</div>
						</ul>
						<div>
							<form class="form-inline my-2 my-lg-0">
								<!-- <label for="input-text">Search: </label> -->
								<input id="input-text" name="text" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							</form>
							<div class="quick-view">
								
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="content">
		@yield('content')
	</div>
	<!-- scroll top-->
	<button href="#" class="scrollToTop">Top</button>

	<script>
		$(document).ready(function(){

	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
});
</script>
<!-- End header taskbar -->		
<!-- end list -->
<!-- statar-footer -->
<div class="footer">
	<img class="Logo2minFooter" src="fpshop/public/image/logo/logofooter.jpg">
	<p class="TextFooter">
		<i class="fa fa-home" aria-hidden="true"></i>
	Tòa BA1, Ký túc xá khu B, Đại học Quốc gia TPHCM</p>
	<p class="TextFooter">
		<i class="fa fa-phone" aria-hidden="true"></i>
	01632533968 - 01685209913</p>
	<p class="TextFooter">
		<i class="fa fa-clock-o" aria-hidden="true"></i>
	Mở cửa: 9.00AM - 9.00PM</p>

	<div class="logofb_insta">
		<a href="https://www.facebook.com/2mins-corner-1109281215839012/" title="Facebook"><img src="fpshop/public/image/logo/logo-fb.jpg" width="100px" height="100px"></a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://www.instagram.com/2mins_corner/" title="Instagram"><img src="fpshop/public/image/logo/logo-insta.jpg" width="100px" height="100px"></a>
	</div>
</div>	
<!-- End footer -->
</div>
</div>
</body>
</html>