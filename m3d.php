<!DOCTYPE HTML>
<html><head>
<meta charset="utf-8">
<title>© Copyright MADOKA WU since 2015</title>
<link href="m1page.css" rel="stylesheet" type="text/css">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--外掛帶入滾動式語法CSS如下-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-migrate.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<!--滑動效果+手型符號goTOP連結如下-->
<script type="text/javascript" src="js/goTop.js"></script>
<!--頁面載入_流瀑式效果
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>-->


<!--3D翻轉輪播-->
<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>

</head>

<body>
<div id="menu">
<a href="#block1">關 於 我</a>　　|　　<a href="madoka.php" onClick="parent.location='madoka.php'">作 品 集</a>　　|　　<a href="madoka.php" onClick="parent.location='madoka.php'">相 簿</a></div>

<div id="block1" align="center" class="wrapper"><span style="color:#FE9C03">關於我</span><br>
<ul id="sb-slider" class="sb-slider">
    <li><img src="mphoto/m2005b.jpg">
			<div class="sb-description">Welcome to MADOKA world！</div>
    </li>
    <li><img src="mphoto/m-resume.jpg">
			<div class="sb-description">I'm MADOKA</div>
    
    </li>
    <li><a href="mailto:madoka125@gmail.com"><img src="mphoto/mcontact.jpg"></a>
			<div class="sb-description">Contact MADOKA</div>
    </li>
    
    
</ul>
			<div id="shadow" class="shadow"></div>

			<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
			</div>

			<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
			</div>

		</div><!-- /block1 -->

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 215
						} ),						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>

<script type="text/javascript">
  $(document).ready(function(){
    
$('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  autoStart: true,
  speed: 500,
});
  });
</script>

<div id="goTop">TOP</div>

<footer>© Copyright MADOKA WU Digital Design Studio</footer>

</body>
</html>

