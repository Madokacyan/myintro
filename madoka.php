<!DOCTYPE HTML>
<html><head>
<meta charset="utf-8">
<title>© Copyright MADOKA WU since 2015</title>
<link href="m1page.css" rel="stylesheet" type="text/css">
<!--「自動偵測銀幕」語法上網查copy,貼在head下 
否則流變式指會顯示在PC, 有此語法才能真正顯示在各螢幕版面上-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--外掛帶入滾動式語法CSS如下-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<!--滑動效果+手型符號goTOP連結如下-->
<script type="text/javascript" src="js/goTop.js"></script>
<!--頁面載入_流瀑式效果-->
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>

<!--輪播效果slider-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<link href="css/jquery.bxslider.css" rel="stylesheet" />

</head>

<body>
<div id="menu">
<a href="m3d.php" onClick="parent.location='m3d.php'">關 於 我</a>　　|　　<a href="#block2">作 品 集</a>　　|　　<a href="#block3">相 簿</a></div>


<div id="block2" align="center"><br><br><br>作品集<br><br>
  <ul class="bxslider">
    <li><img src="mphoto/m22_4repeat.jpg">  </li>
    <li><img src="mphoto/m37_linecreation.JPG">  </li>
    <li><img src="mphoto/m24chicks0304.jpg"></li>
    <li><img src="mphoto/m28_3Dbathroom0325.jpg"></li>
    <li><img src="mphoto/m29m0328.jpg"></li>
    <li><img src="mphoto/m41.JPG"></li>
    <li><img src="mphoto/m44_0614logopaper.jpg"></li>
  </ul>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    
$('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  pause: 777,
  speed: 2000,
});
  });
</script>
<!--pause: 4000,數字愈大輪播-翻頁速度愈慢-->
<!--speed: 500,數字愈大輪播-滑動速度愈慢-->

<div align="center" id="block3"><span style="color:#FE9C03">相簿</span>
  <ul class="grid effect-8" id="grid" >
    <li><img src="mphoto/m01.JPG"></li>
    <li><img src="mphoto/m02.JPG"></li>
    <li><img src="mphoto/m03.JPG"></li>
    <li><img src="mphoto/m04.jpg"></li>
    <li><img src="mphoto/m05.JPG"></li>
    <li style="width:65%;"><img src="mphoto/m06.JPG"></li>
    <li><img src="mphoto/m07.JPG"></li>
    <li><img src="mphoto/m08.JPG"></li>
    <li><img src="mphoto/m09.jpg"></li>
    <li><img src="mphoto/m10.JPG"></li>
    <li><img src="mphoto/m11.JPG"></li>
    <li style="width:65%;"><img src="mphoto/m13.JPG"></li>
    <li><img src="mphoto/m14.JPG"></li>
    <li style="width:65%;"><img src="mphoto/m15.JPG"></li>
<!--    <li><img src="mphoto/m16.jpg"></li>
-->    <li><img src="mphoto/m17.JPG"></li>
    <li><img src="mphoto/m12.jpg"></li>
    <li><img src="mphoto/m18.JPG"></li>
    <li><img src="mphoto/m20.JPG"></li>
    <li><img src="mphoto/m19.JPG"></li>
    <li><img src="mphoto/m21.JPG"></li>
    <li><img src="mphoto/m23.JPG"></li>
    <li style="width:65%;"><img src="mphoto/m25.jpg"></li>
    <li><img src="mphoto/m26.jpg"></li>
    <li><img src="mphoto/m30.JPG"></li>
    <li><img src="mphoto/m27.jpg"></li>
    <li><img src="mphoto/m31.JPG"></li>
    <li><img src="mphoto/m32.JPG"></li>
    <li><img src="mphoto/m33.JPG"></li>
    <li><img src="mphoto/m34.JPG"></li>
    <li><img src="mphoto/m35.JPG"></li>
    <li><img src="mphoto/m36.JPG"></li>
    <li style="width:65%;"><img src="mphoto/m40.JPG"></li>
    <li><img src="mphoto/m38.JPG"></li>
    <li><img src="mphoto/m39.JPG"></li>
    <li><img src="mphoto/m42.JPG"></li>
    <li><img src="mphoto/m43.JPG"></li>
    <li><img src="mphoto/m45.JPG"></li>
</ul>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/imagesloaded.js"></script>
<script src="js/classie.js"></script>
<script src="js/AnimOnScroll.js"></script>
<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>

</div>


<div id="goTop">TOP</div>
<footer>© Copyright MADOKA WU Digital Design Studio</footer>
</body>
</html>

