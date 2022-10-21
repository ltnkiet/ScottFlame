<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<title>Scott Flame</title>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
	<div class="bg1">
		<img class="size1" src="./img/anhba.jpg">		
	</div>
	<div class="bg2">
			<h1 style="color: white">Scott Flame</h1>
	</div>
	<div class="trangchu">
		<h3><a style="color: white;" href="">Trang chủ</a></h3>
	</div>
	<div class="newsp">
		<h3><a style="color: white;" href="">Sản phẩm mới</a></h3>
	</div>
	<div class="nam">
		<h3><a style="color: white;" href="">Nam</a></h3>
	</div>
	<div class="nu">
		<h3><a style="color: white;" href="">Nữ</a></h3>
	</div>
	<div class="kid">
		<h3><a style="color: white;" href="">Trẻ em</a></h3>
	</div>
	<div class="sale">
		<h3><a style="color: white;" href="">Giảm giá/Khuyến mãi</a></h3>
	</div>
	<div class="login">
		<a href="login.php"><img class="slogin" src="./img/User_Icon.png"></a>
	</div>
	<div class="giohang">
		<a href="http://localhost/Project-Php/sanpham.html"><img class="sgiohang" src="./img/giohang-removebg-preview.png"></a>
	</div>
	<!-- <div class="bagach">
		<a href=""><img class="s3gach" src="./img/3gach.png"></a>
	</div> -->
	<!-- Slideshow container -->
<div class="slideshow-container" class="s">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img class="sizeanh" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20220519/19052022090517_2__Custom_.jpg" style="width:100%">
    <div style="color: black;" class="text"><h2>Áo MultiColor Logo</h2></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img class="sizeanh" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20221002/02102022111016_ky_bang_ha__8___Web_Nhanh_.jpg" style="width:100%">
    <div style="color: black;" class="text"><h2>Áo Kỷ Jura</h2></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img class="sizeanh" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20220919/19092022070906_doiquan__7_.jpg" style="width:100%">
    <div style="color: black;" class="text"><h2>Áo scottplaton x đội quân cún béo</h2></div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script type="text/javascript">
	let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
<div class="spm">
	<h2 style="color: red;">Sản Phẩm Mới</h2>
	<a href="http://localhost/Project-Php/sanpham.html"><h4 class="xemthem">Xem thêm...</h4></a>
</div>
<div class="bg3">
	<a href="sanpham.html"><img class="sizeanh1" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20221008/08102022071015_discovery__12___Web_Nhanh_.jpg"></a>
	<p>Tên: Áo Discovery</p>
	<p>Nhãn hàng: Scott Platon</p>
	<p>Giá: 220.000 VND</p>
</div>
<a class="dichuyen2" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="bg4">
	<a href="sanpham.html"><img class="sizeanh2" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20220927/27092022050930_meota__1___Web_Nhanh_.jpg"></a>
	<p>Tên: Áo Mèo ta</p>
	<p>Nhãn hàng: Scott Platon</p>
	<p>Giá: 203.000 VND</p>
</div>
<a class="dichuyen3" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="bg5">
	<a href="sanpham.html"><img class="sizeanh3" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20220919/19092022070906_doiquan__7_.jpg"></a>
	<p>Tên: Áo đội quân cún béo</p>
	<p>Nhãn hàng: Scott Platon</p>
	<p>Giá: 120.000 VND</p>
</div>
<a class="dichuyen4" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="bg6">
	<a href="sanpham.html"><img class="sizeanh4" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20220908/08092022060904_con_meo__4___Web_Nhanh_.jpg"></a>
	<p>Tên: Áo louis vuitton</p>
	<p>Nhãn hàng: Scott Platon</p>
	<p>Giá: 240.000 VND</p>
</div>
<a class="dichuyen5" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="bg7">
	<a href="sanpham.html"><img class="sizeanh5" src="https://img.cdn.vncdn.io/nvn/ncdn/store2/83461/ps/20220815/15082022010822_Baby__11___Web_Nhanh_.jpg"></a>
	<p>Tên: Áo Baby</p>
	<p>Nhãn hàng: Scott Platon</p>
	<p>Giá: 343.000 VND</p>
</div>
<a class="dichuyen" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="abg3">
	<a href="sanpham.html"><img class="asizeanh1" src="./img/q1.jpg"></a>
	<p>Tên: Quần louis vuitton</p>
	<p>Nhãn hàng: LOUIS VUITTON</p>
	<p>Giá: 430.000 USD</p>
</div>
<a class="dichuyen2" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="abg4">
	<a href="sanpham.html"><img class="asizeanh2" src="./img/q2.jpg"></a>
	<p>Tên: Quần louis vuitton</p>
	<p>Nhãn hàng: LOUIS VUITTON</p>
	<p>Giá: 700.000 USD</p>
</div>
<a class="dichuyen3" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="abg5">
	<a href="sanpham.html"><img class="asizeanh3" src="./img/q3.jpg"></a>
	<p>Tên: Quần louis vuitton</p>
	<p>Nhãn hàng: LOUIS VUITTON</p>
	<p>Giá: 920.000 USD</p>
</div>
<a class="dichuyen4" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="abg6">
	<a href="sanpham.html"><img class="asizeanh4" src="./img/q4.jpg"></a>
	<p>Tên: Quần louis vuitton</p>
	<p>Nhãn hàng: LOUIS VUITTON</p>
	<p>Giá: 420.000 USD</p>
</div>
<a class="dichuyen5" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="abg7">
	<a href="sanpham.html"><img class="asizeanh5" src="./img/q5.jpg"></a>
	<p>Tên: Quần louis vuitton</p>
	<p>Nhãn hàng: LOUIS VUITTON</p>
	<p>Giá: 230.000 USD</p>
</div>
<a class="dichuyen" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="cbg3">
	<a href="sanpham.html"><img class="csizeanh1" src="./img/jd1.jpg"></a>
	<p>Tên: Giày Jordan</p>
	<p>Nhãn hàng: Nike</p>
	<p>Giá: 390.000 USD</p>
</div>
<a class="dichuyen2" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="cbg4">
	<a href="sanpham.html"><img class="csizeanh2" src="./img/jd2.jpg"></a>
	<p>Tên: Giày Jordan</p>
	<p>Nhãn hàng: Nike</p>
	<p>Giá: 230.000 USD</p>
</div>
<a class="dichuyen3" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="cbg5">
	<a href="sanpham.html"><img class="csizeanh3" src="./img/jd3.jpg"></a>
	<p>Tên: Giày Jordan</p>
	<p>Nhãn hàng: Nike</p>
	<p>Giá: 900.000 USD</p>
</div>
<a class="dichuyen4" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="cbg6">
	<a href="sanpham.html"><img class="csizeanh4" src="./img/jd4.jpg"></a>
	<p>Tên: Giày Jordan</p>
	<p>Nhãn hàng: Nike</p>
	<p>Giá: 570.000 USD</p>
</div>
<a class="dichuyen5" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="cbg7">
	<a href="sanpham.html"><img class="csizeanh5" src="./img/jd5.jpg"></a>
	<p>Tên: Giày Jordan</p>
	<p>Nhãn hàng: Nike</p>
	<p>Giá: 830.000 USD</p>
</div>
<a class="dichuyen" href="http://localhost/Project-Php/sanpham.html">Xem chi tiết</a>
<div class="spbc">
	<h2 style="color: red;">Sản Phẩm Bán Chạy Nhất</h2>
	<a href="sanpham.html"><h4 class="xemthem1">Xem thêm...</h4></a>
</div>
<div class="bgsp">
	<a href="sanpham.html"><img class="sizejd" src="./img/jd1.jpg"></a>
	<p>Tên: Giày Jordan</p>
	<p>Nhãn hàng: Nike</p>
	<p>Giá: 390.000 USD</p>
</div>
<div class="bgsp1">
	<a href="sanpham.html"><img class="sizejd" src="./img/q2.jpg"></a>
	<p>Tên: Quần louis vuitton</p>
	<p>Nhãn hàng: louis vuitton</p>
	<p>Giá: 700.000 USD</p>
</div>
<div class="bgsp2">
	<a href="sanpham.html"><img class="sizejd" src="./img/jd5.jpg"></a>
	<p>Tên: Giày Jordan</p>
	<p>Nhãn hàng: Nike</p>
	<p>Giá: 830.000 USD</p>
</div>
</body>
</html>