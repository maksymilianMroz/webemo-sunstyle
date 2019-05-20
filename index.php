<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="pl">
<!--[endif]-->
<!--[if lt IE 9]><html class="lt-ie9" lang="pl"><![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="img/logo/favicon.png">

	<title>Webemo • Project</title>
	<meta name="description" content="Crevo Blueprint">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

	<!-- Styles -->
	<link href="library/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="library/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" rel="stylesheet">
	<link href="library/owl.carousel.2.0.0-beta.2.4/assets/owl.theme.default.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- <script src="library/jquery-3.3.1/jquery-3.3.1.min.js"></script> -->
	<script src="library/jquery2.1.4/jquery2.1.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
	<script src="library/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>
</head>
<!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->

<body>
	<div class="body-wrapper">

		<script>
			$("body").mousemove(function(e) {
				parallaxIt(e, ".cta-service-wrapper", -20);
			});

			function parallaxIt(e, target, movement) {
				var $this = $("body");
				var relX = e.pageX - $this.offset().left;
				var relY = e.pageY - $this.offset().top;

				TweenMax.to(target, 1, {
					x: (relX - $this.width() / 2) / $this.width() * movement,
					y: (relY - $this.height() / 2) / $this.height() * movement
				});
			}
		</script>

		<script>
			$("body").mousemove(function(e) {
				parallaxIt(e, ".cta-shadow", 30);
			});

			function parallaxIt(e, target, movement) {
				var $this = $("body");
				var relX = e.pageX - $this.offset().left;
				var relY = e.pageY - $this.offset().top;

				TweenMax.to(target, 1, {
					x: (relX - $this.width() / 2) / $this.width() * movement,
					y: (relY - $this.height() / 2) / $this.height() * movement
				});
			}
		</script>

		<!-- ============================== SECTION-WELCOME ============================== -->
		<section class="section-welcome">
			<div class="welcome-content">
				<div class="content-inner">
					<a href="#door2door" data-scroll class="inner-arrow">
						<img src="img/icons/arrow-down.svg" alt="">
						<p>Przejdź dalej</p>
					</a>
					<div class="inner-top">
						<a href="index" class="top-logo">
							<img src="img/logo/logo.svg" alt="">
							<img src="img/logo/logo-sygnet.svg" alt="">
							<img src="img/logo/logo-sygnet-hover.svg" alt="">
						</a>
						<button class="top-menu-button" type="button">
							<span class="button-bar"></span>
							<span class="button-bar"></span>
							<span class="button-bar"></span>
						</button>
						<div class="top-nav">
							<div class="nav-inner">
								<ul class="list-unstyled">
									<li><a href="poznaj-nas">Poznaj nas</a></li>
									<li><a href="realizacje">Realizacje</a></li>
									<li><a href="polityka-prywatnosci">Polityka prywatności</a></li>
									<li><a href="kontakt">Kontakt</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="inner-cta">
						<div class="cta-shadow"></div>
						<div class="cta-service-wrapper">
							<p class="cta-heading">Usługa</p>
							<a href="door2door" class="cta-service">
								<h2>Door<br>2<br>door</h2>
								<p>Przyjedziemy<br>dopasujemy<br>i zamontujemy</p>
								<img src="img/icons/arrow-white.svg" alt="">
							</a>
							<p class="cta-bottom">Sprawdź szczegóły</p>
						</div>
					</div>
					<div class="inner-bottom">
						<ul class="bottom-social list-unstyled">
							<li><a href=""><img src="img/logo/facebook.svg" alt=""></a></li>
							<li><a href=""><img src="img/logo/instagram.svg" alt=""></a></li>
						</ul>
					</div>
				</div>
				<div class="carousel-wrapper">
					<div class="owl-custom-nav">
						<a href="#slide-zaluzje" class="owl-nav-link active">Żaluzje</a>
						<a href="#slide-plisy" class="owl-nav-link">Plisy</a>
						<a href="#slide-rolety" class="owl-nav-link">Rolety</a>
						<a href="#slide-moskitiery" class="owl-nav-link">Moskitiery</a>
						<a href="#slide-firany" class="owl-nav-link">Firany</a>
						<a href="#slide-zaslony" class="owl-nav-link">Zasłony</a>
					</div>
					<div class="owl-carousel-welcome">
						<div class="item" data-hash="slide-zaluzje" style="background: url(img/backgrounds/fotolia_83137269.jpg) center; background-size: cover;">

						</div>
						<div class="item" data-hash="slide-plisy" style="background: url(img/backgrounds/plisa.jpg) center; background-size: cover;">

						</div>
						<div class="item" data-hash="slide-rolety" style="background: url(img/backgrounds/rolety.jpg) center; background-size: cover;">

						</div>
						<div class="item" data-hash="slide-moskitiery" style="background: url(img/backgrounds/moskitiery.jpg) center; background-size: cover;">

						</div>
						<div class="item" data-hash="slide-firany" style="background: url(img/backgrounds/firany.jpg) center; background-size: cover;">

						</div>
						<div class="item" data-hash="slide-zaslony" style="background: url(img/backgrounds/zaslony.jpg) center; background-size: cover;">

						</div>
					</div>
					<div class="owl-carousel-welcome-caption">
						<a href="zaluzje" data-hash="slide-zaluzje" class="item-heading">
							<span class="heading-number">01</span>
							<div class="heading-text">
								<h1>Żaluzje</h1>
								<p>Zobacz ofertę</p>
							</div>
						</a>
						<a href="plisy" data-hash="slide-plisy" class="item-heading">
							<span class="heading-number">02</span>
							<div class="heading-text">
								<h1>Plisy</h1>
								<p>Zobacz ofertę</p>
							</div>
						</a>
						<a href="rolety" data-hash="slide-rolety" class="item-heading">
							<span class="heading-number">03</span>
							<div class="heading-text">
								<h1>Rolety</h1>
								<p>Zobacz ofertę</p>
							</div>
						</a>
						<a href="moskitiery" data-hash="slide-moskitiery" class="item-heading">
							<span class="heading-number">04</span>
							<div class="heading-text">
								<h1>Moskitiery</h1>
								<p>Zobacz ofertę</p>
							</div>
						</a>
						<a href="zaluzje" data-hash="slide-firany" class="item-heading">
							<span class="heading-number">05</span>
							<div class="heading-text">
								<h1>Firany</h1>
								<p>Zobacz ofertę</p>
							</div>
						</a>
						<a href="zaslony" data-hash="slide-zaslony" class="item-heading">
							<span class="heading-number">06</span>
							<div class="heading-text">
								<h1>Zasłony</h1>
								<p>Zobacz ofertę</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<script>
			$('.top-menu-button').click(function() {
				$('.top-nav').toggleClass('active');
				$('.top-menu-button').toggleClass('active');
				$('.owl-custom-nav').toggleClass('hidden');
			});
		</script>
		<script>
			history.replaceState(null, null, ' ');

			var flag = false;
			var duration = 300;

			var owl = $('.owl-carousel-welcome');
			owl.owlCarousel({
				items: 1,
				center: true,
				margin: 0,
				dots: false,
				nav: false,
				URLhashListener: true,
				autoplayHoverPause: true,
				startPosition: 'URLHash',
				animateIn: 'fadeInRight',
				animateOut: 'fadeOutLeft',
				autoplay: true,
				autoplayTimeout: 5000,
				autoplayHoverPause: false,
			});

			var owlCaption = $('.owl-carousel-welcome-caption');
			owlCaption.owlCarousel({
				items: 1,
				center: true,
				margin: 0,
				dots: false,
				nav: false,
				URLhashListener: true,
				autoplayHoverPause: true,
				startPosition: 'URLHash',
				animateIn: 'fadeInRight',
				animateOut: 'fadeOutLeft',
			});

			var owlNavLinks = document.querySelectorAll('.owl-nav-link');
			owl.on('changed.owl.carousel', function(event) {
				var currentItemIndex = event.item.index;
				owlNavLinks.forEach(link => link.classList.remove('active'));
				owlNavLinks[currentItemIndex].classList.add('active');

				if (!flag) {
					flag = true;
					owlCaption.trigger('to.owl.carousel', [event.item.index, duration, true]);
					flag = false;
				}
			})

			owlCaption.on('changed.owl.carousel', function(event) {
				if (!flag) {
					flag = true;
					owl.trigger('to.owl.carousel', [event.item.index, duration, true]);
					flag = false;
				}
			});
		</script>
		<!-- ============================== SECTION-DOOR-DOOR ============================== -->
		<section class="section-door-door" id="door2door">
			<div class="container">
				<div class="door-door-heading">
					<h2>Nie musisz wychodzić z domu</h2>
				</div>
				<div class="door-door-flexbox">
					<div class="flexbox-service">
						<div class="number">01</div>
						<div class="description">
							<h3>Przyjeżdżamy</h3>
							<p>Veniam doloribus, autem modi praesentium blanditiis!</p>
						</div>
					</div>
					<div class="flexbox-service">
						<div class="number">02</div>
						<div class="description">
							<h3>Dobieramy</h3>
							<p>Quas incidunt fuga a, inventore facere voluptatibusa!</p>
						</div>
					</div>
					<div class="flexbox-service">
						<div class="number">03</div>
						<div class="description">
							<h3>Montujemy</h3>
							<p>Voluptas dolorem fugit veniam eligendi magni recusandae accusamus.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============================== SECTION-PORTFOLIO ============================== -->
		<section class="section-portfolio">
			<div class="container">
				<div class="portfolio-heading">
					<h2>Zobacz jak działamy</h2>
				</div>
				<div class="portfolio-flexbox">
					<a href="img/pictures/portfolio-1.png" class="flexbox-service" data-fancybox="galeria">
						<span class="service-cover"></span>
						<img src="img/pictures/portfolio-1.png" alt="">
					</a>
					<div class="flexbox-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus dolorem voluptatibus optio distinctio pariatur aperiam <a href=""><strong>porro labore accusantium.</strong></a> Id eos fugit reiciendis. Ab dolor nisi et possimus similique vero alias aspernatur voluptatem, esse, minus maxime!</p>
						<a href="poznaj-nas" class="btn-more">
							<img src="img/icons/plus-square.svg" alt="">
							<p>Zobacz więcej realizacji</p>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php include "include/section-footer.php"; ?>

		<script src="js/smooth-scroll.js"></script>
		<script>
			var scroll = new SmoothScroll('a[data-scroll]');
		</script>

		<?php include "include/section-footer-scripts.php"; ?>