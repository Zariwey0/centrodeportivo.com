<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the title of your site -->
	<title>Fekra</title>
	<!-- ========= Favicon Icons ========= -->
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	<!-- Standard iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png">
	<!-- Retina iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
	<!-- Standard iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
	<!-- Retina iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png">
	<!-- include Google fonts  -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<!-- include the site stylesheet of bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the font awesome stylesheet  -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- include the stylesheets of headers and footer of the page  -->
	<link rel="stylesheet" type="text/css" href="css/page-assets.css">
	<!-- include the helping elements stylesheets of  the page  -->
	<link rel="stylesheet" type="text/css" href="css/helper-elements.css">
	<!-- include the site stylesheet  -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- include the site color stylesheet  -->
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
    <!-- include the site animation stylesheet  -->
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <!-- include the xmas stylesheet  -->
    <link rel="stylesheet" href="css/xmas.css" type="text/css" />
</head>
<body>
	<!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="images/preloader/logo.png" alt="Fekra"/>
                <div class="spinner7">
                    <div class="circ1"></div>
                    <div class="circ2"></div>
                    <div class="circ3"></div>
                    <div class="circ4"></div>
                </div>
            </div>
        </div>
    </div>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<div class="w1">
			<main id="main" role="main" class="win-height">
				<canvas id="xmas" > </canvas>
				<section class="error-section text-center win-height">
					<div class="container win-height">
						<div class="holder">
							<!-- page logo -->
							<div class="logo">
								<a href="#">
									<img src="images/logo-5.png" alt="Fekra" class="img-responsive w-logo">
								</a>
							</div>
							<img src="images/newdemo/img20.png" alt="Christmas Vector" class="img-responsive">
						</div>
					</div>
				</section>
				<div class="stretch snow">
					<img src="http://placehold.it/1920x1000" alt="Image Description">
				</div>
			</main>
			<!-- footer of the page -->
			<footer id="footer" class="xmas">
				<!-- footer bottom -->
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="bottom-box1">
									<!-- foote-nav -->
									<ul class="list-inline footer-nav">
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Career</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Use of terms</a></li>
									</ul>
									<span class="copyright">&copy; 2015 &nbsp; <a href="#">Fekra Corporation</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="fa fa-chevron-up" id="gotoTop" style="display: none;"></div>
	</div>
	<!-- include jQuery library -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<!-- include custom JavaScript -->
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!-- include plugins JavaScript -->
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/snowplugins.js"></script> 
	<script type="text/javascript">
		jQuery('#xmas').glauserChristmas({
		});
	</script>

</body>
</html>