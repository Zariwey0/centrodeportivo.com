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
				<!-- Let it snow! -->
				<canvas id="xmas"></canvas>
				<section class="error-section text-center win-height">
					<div class="container win-height">
						<div class="holder">
							<!-- page logo -->
							<div class="logo">
								<a href="#">
									<img src="images/logo-5.png" alt="Fekra" class="img-responsive w-logo">
								</a>
							</div>
							<img src="images/newdemo/img16.png" alt="Christmas Vector" class="img-responsive">
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
	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
		  iProDevSnow();
		});

		// iProDevSnow Christmas! \o/
		var iProDevSnow = function(){

			(function() {
			    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
			    function(callback) {
			        window.setTimeout(callback, 1000 / 60);
			    };
			    window.requestAnimationFrame = requestAnimationFrame;
			})();

			var flakes = [],
			    canvas = document.getElementById("xmas"),
			    ctx = canvas.getContext("2d"),
			    parent = canvas.parentNode,
			    retina = window.devicePixelRatio > 1 ? 2 : 1,
			    flakeCount = 450;

			    if( parent.offsetWidth < 767 ){
			    	flakeCount = 125;
			    }

			    canvas.width = parent.offsetWidth * retina;
			    canvas.height = parent.offsetHeight * retina;

			function snowFrame() {
			    ctx.clearRect(0, 0, canvas.width, canvas.height);

			    for (var i = 0; i < flakeCount; i++) {
			        var flake = flakes[i],
			            x = flake.x,
			            y = flake.y;

		            flake.velX *= .98;
		            if (flake.velY <= flake.speed) {
		                flake.velY = flake.speed
		            }
		            flake.velX += Math.cos(flake.step += .05) * flake.stepSize;

			        ctx.fillStyle = "rgba(255,255,255," + flake.opacity + ")";
			        flake.y += flake.velY;
			        flake.x += flake.velX;
			            
			        if (flake.y >= canvas.height || flake.y <= 0) {
			            reset(flake);
			        }

			        if (flake.x >= canvas.width || flake.x <= 0) {
			            reset(flake);
			        }

			        ctx.beginPath();
			        ctx.arc(flake.x, flake.y, flake.size, 0, Math.PI * 2);
			        ctx.fill();
			    }
			    requestAnimationFrame(snowFrame);
			};

			function reset(flake) {
			    flake.x = Math.floor(Math.random() * canvas.width);
			    flake.y = 0;
			    flake.size = ((Math.random() * 3) + getRandomInt(2, 4)) * retina;
			    flake.speed = ((Math.random() * 1) + 0.2) * retina;
			    flake.velY = flake.speed;
			    flake.velX = 0;
			    flake.opacity = (Math.random() * 0.5) + 0.4;
			}

			function init() {
			    for (var i = 0; i < flakeCount; i++) {
			        var x = Math.floor(Math.random() * canvas.width),
			            y = Math.floor(Math.random() * canvas.height),
			            size = ((Math.random() * 3) + getRandomInt(2, 4)) * retina,
			            speed = ((Math.random() * 1) + 0.2) * retina,
			            opacity = (Math.random() * 0.5) + 0.4;

			        flakes.push({
			            speed: speed,
			            velY: speed,
			            velX: 0,
			            x: x,
			            y: y,
			            size: size,
			            stepSize: (Math.random()) / 30,
			            step: 0,
			            opacity: opacity
			        });
			    }

			    snowFrame();
			};

			window.addEventListener("resize",function(){
			    canvas.width = parent.offsetWidth * retina;
			    canvas.height = parent.offsetHeight * retina;
			})

			init();
		};
		// Returns a random integer between min (included) and max (excluded)
		// Using Math.round() will give you a non-uniform distribution!
		function getRandomInt(min, max) {
		  return Math.floor(Math.random() * (max - min)) + min;
		}
	</script>
</body>
</html>