<!doctype html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="http://www.x3dom.org/release/x3dom.css">
		<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="assets/css/style.css" type="text/css" rel="stylesheet">
		<link rel="shortcut icon" type="image/jpg" href="assets/images/favicon.ico"/>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://www.x3dom.org/release/x3dom.js"></script>
		<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<title>Coca-Cola :: Home</title>
		<script type="text/javascript">
		// javascript adapted from https://stackoverflow.com/questions/6002254/get-the-current-year-in-javascript
			var currentYear = (new Date).getFullYear();
			$(document).ready(function() {
				$(".year").text( (new Date).getFullYear() );
			});
        // wireframe functions taken from the labs github
			function wireFrame()
			{
				var e = document.getElementById('wire');
				e.runtime.togglePoints(true);
				e.runtime.togglePoints(true);
			}

			function wireFrame2()
			{
				var e = document.getElementById('wire2');
				e.runtime.togglePoints(true);
				e.runtime.togglePoints(true);
			}
		</script>
	</head>
	<body>
		<header class="p-3 bg-dark bg-rainbow text-white">
			<div class="container">
				<nav class="flex-wrap d-flex justify-content-lg-start justify-content-center align-items-center">
					<a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
						<div class="logo">
							<a class="navbar-brand">
								<h1>1oca</h1>
								<h2>Cola</h2>
								<! rainbox css code taken from https://codepen.io/srmanu/pen/OVXXmj ->
								<h3 class="rainbow">Journey</h3>
							</a>
						</div>
					</a>
					<ul class="col-12 justify-content-center nav me-lg-auto col-lg-auto mb-md-0 mb-2" role="menu">
						<li><a href="index.php" class="nav-link px-2 text-white"><u>Home</u></a></li>
						
						<! code for models/index.php taken from module github, lab9. Slightly adapted. ->
						<li><a href="models/index.php" class="nav-link px-2 text-white">Models</a></li>
					</ul>
					<div class="text-end">
						<a class="btn btn-outline-light" href="https://twitter.com/CocaCola" role="button"> Twitter</a>
					</div>
				</nav>
			</div>
		</header>
		<main id="content">
			<section class="homepageheader">
				<div class="container py-5">
					<div class="row py-5">
						<div class="col-lg-6 py-5 text-center">
							<image class="d-block mx-auto" src="assets/images/coke_logo.png" width="175">
							<! text shadow added to make text readable no matter the page scaling ->
							<p class="lead mb-4" style="color:white;text-shadow: 2px 2px #000000;">
								Refreshing the world, one story at a time<br>
							</p>
						</div>
						<div class="col-lg-6" style="display: flex; align-items: center;">
							<! carousel code adapted from https://www.w3schools.com/bootstrap/bootstrap_carousel.asp with transitions and buttons removed for a simpler look ->
							<div id="carouselDrinks" class="carousel" data-bs-ride="carousel">
								<div class="carousel-inner" style="box-shadow: 0px 10px 14px -4px rgba(0,0,0,0.66);-webkit-border-radius: 7px;
								-moz-border-radius: 10px;border-radius: 10px;">
									<div class="carousel-item active" data-bs-interval="3000">
									    <! 1.jpg taken from https://www.shutterstock.com/image-photo/fizzy-cola-drink-macro-shot-1858941319 ->
										<image src="assets/images/carousel/1.jpg" class="d-block w-100">
									</div>
									<div class="carousel-item" data-bs-interval="3000">
										<! 2.jpg taken from https://www.shutterstock.com/image-photo/closeup-woman-hand-holding-glass-cola-1180743685 ->
										<image src="assets/images/carousel/2.jpg" class="d-block w-100">
									</div>
									<div class="carousel-item" data-bs-interval="3000">
									    <! 3.jpg taken from https://www.shutterstock.com/image-photo/carbonated-soft-drink-bottles-close-580718833 ->
										<image src="assets/images/carousel/3.jpg" class="d-block w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>						
			<section class="bg-dark bg-rainbow text-secondary px-sm-4 px-md-5">
				<div class="container px-4">
					<div class="row flex-lg-row-reverse g-5 py-sm-2 py-md-5">
						<div class="col text-white">
							<! old coke text taken from https://www.britannica.com/topic/The-Coca-Cola-Company ->
							<h1 class="display-5 fw-bold text-center lh-1 mb-3">A drink with a rich history</h1>
							<br> <p class="lead mb-1 lh-lg text-center">The drink Coca-Cola was originated in 1886 by an Atlanta pharmacist, John S. Pemberton (1831–88), at his Pemberton Chemical Company. His bookkeeper, Frank Robinson, chose the name for the drink and penned it in the flowing script that became the Coca-Cola trademark. Pemberton originally touted his drink as a tonic for most common ailments, basing it on cocaine from the coca leaf and caffeine-rich extracts of the kola nut; the cocaine was removed from Coca-Cola’s formula in about 1903. Pemberton sold his syrup to local soda fountains, and, with advertising, the drink became phenomenally successful. By 1891 another Atlanta pharmacist, Asa Griggs Candler (1851–1929), had secured complete ownership of the business (for a total cash outlay of $2,300 and the exchange of some proprietary rights), and he incorporated the Coca-Cola Company the following year. The trademark “Coca-Cola” was registered in the U.S. Patent Office in 1893.</p>
						</div>
						<div class="col text-center">
							<div class="model3D">
								<x3d width="600px" height="600px" id="wire">
									<scene>
										<! old coke model made and modified according to this tutorial (droplets ommitted): https://youtu.be/9yS-JbXxc_g ->
										<inline nameSpaceName="model1" url="assets/models/old_coke.x3d"> </inline>
									</scene>
								</x3d>
							</div> 
							<a class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
						</div>
						<div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"></div>
					</div>
				</div>
			</section>
			<section class="bg-dark bg-rainbow text-secondary px-sm-4 px-md-5">
				<div class="container px-4">
					<div class="row flex-lg-row-reverse g-5 py-sm-2 py-md-5">
						<div class="col text-center">
							<div class="model3D">
								<x3d width="600px" height="400px" id="wire2">
									<scene>
										<Switch whichChoice="0" id='SceneSwitch'>
											<transform>
												<! coke can model taken from lab github with a modified texture, changed to coke zero ->
												<inline nameSpaceName="model2" url="assets/models/new_coke.x3d"> </inline>
											</transform>
										</Switch>
									</scene>
								</x3d>
							</div> 
							<!-- <image src="assets/images/new_coke.png" class="d-block mx-auto"> -->
							<a class="btn btn-secondary btn-responsive" onclick="wireFrame2();">Wire</a>
						</div>
						<div class="col text-white">
							<! new coke text taken from https://www.britannica.com/topic/The-Coca-Cola-Company ->
							<h1 class="display-5 fw-bold lh-1 mb-3 text-center">Great legacy, modern outlook</h1>
							<p class="lead mb-2 text-center lh-lg">In 2005 the company introduced Coca-Cola Zero, a zero-calorie soft drink with the taste of regular Coca-Cola. In 2007 the company acquired Energy Brands, Inc., along with its variously enhanced waters. That same year Coca-Cola announced that it would join the Business Leaders Initiative on Human Rights (BLIHR), a group of companies working together to develop and implement corporate responses to human rights issues that affect the business world.</p>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="footer mt-auto py-3 bg-dark bg-rainbow mt-auto">
			<div class="container bg-dark bg-rainbow">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<div class="mt-auto py-3 mt-auto">
					<span class="mr-2 text-secondary" style="text-size:7px!important;">&copy; Copyright <span class="year"></span> Coca-Cola inc., All Rights Reserved</span>
				</div>
			</div>
		</footer>
	</body>
</html>