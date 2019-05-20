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
	<link href="css/style-rekrutacja.css" rel="stylesheet">

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
				parallaxIt(e, ".service-cover", 50);
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
				parallaxIt(e, ".cta-shadow", 100);
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
				<div class="content-inner blinds">

					<!-- ==================== ODNOŚNIKI ==================== -->
					<div class="arrow-container">
						<a href="index" data-scroll class="inner-arrow-main-site">
							<img src="img/icons/arrow-left.svg" alt="">
							<p>Wróć do strony głównej</p>
						</a>
					</div>
					<div class="image-blinds-container">
						<div class="image-blinds-background"></div>
					</div>
					<div class="arrow-container-second">
						<a href="#offert" data-scroll class="inner-arrow">
							<img src="img/icons/arrow-down.svg" alt="">
							<p>Przejdź dalej</p>
						</a>
					</div>
					<!-- ==================== LOGO I NAWIGACJA HAMBURGER ==================== -->
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
									<li><a class="nav-color-change" href="poznaj-nas">Poznaj nas</a></li>
									<li><a class="nav-color-change" href="realizacje">Realizacje</a></li>
									<li><a class="nav-color-change" href="polityka-prywatnosci">Polityka prywatności</a></li>
									<li><a class="nav-color-change" href="kontakt">Kontakt</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- ==================== SEKCJA Z HASŁEM SPRZEDAŻOWYM ==================== -->
					<div class="inner-cta">
						<div class="cta-shadow"></div>
						<div class="cta-service-wrapper">
							<a href="#offert" class="cta-service">
								<h2>Żaluzje</h2>

								<img src="img/icons/arrow-white.svg" alt="">
							</a>
							<p class="cta-bottom">Lorem ipsum dolor sit!</p>
						</div>
					</div>
					<!-- ==================== IKONY SOCIAL MEDIA ==================== -->
					<div class="inner-bottom">
						<ul class="bottom-social list-unstyled">
							<li><a href=""><img src="img/logo/facebook.svg" alt=""></a></li>
							<li><a href=""><img src="img/logo/instagram.svg" alt=""></a></li>
						</ul>
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

			var owl = $('.owl-carousel');
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
		<!-- ============================== SECTION-OFFERT ============================== -->
		<section class="section-door-door offert" id="offert">
			<div class="container">
				<span class="service-cover service-cover--left-medium"></span>
				<div class="flip-card-container">

					<div class="flip-card">
						<div class="flip-card-front blind-one">
							<div class="flip-card-front__title">
								Lorem, ipsum dolor.
							</div>
						</div>
						<div class="flip-card-back">
							<h3 class="flip-card-back-header">Lorem, ipsum dolor.</h3>
							<p class="flip-card-back-content"><strong>Lorem:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem et non necessitatibus nemo ea reiciendis illum totam dolorum deleniti laboriosam?<br /><br />
								<strong>Ipsum:</strong> 200$</p>
							<button class="flip-card-front__btn">
								Lorem, ipsum dolor.
							</button>
						</div>
					</div>
				</div>
				<span class="service-cover service-cover--big"></span>
				<div class="flip-card-container">

					<div class="flip-card">
						<div class="flip-card-front">
							<p class="flip-card-back-content"><strong>Lorem:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem et non necessitatibus nemo ea reiciendis illum totam dolorum deleniti laboriosam?<br /><br />
								<strong>Ipsum:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem et non necessitatibus nemo ea reiciendis illum totam dolorum deleniti laboriosam</p>
							<div class="flip-card-front__title">
								Lorem, ipsum dolor.
							</div>
						</div>
						<div class="flip-card-back">
							<h3 class="flip-card-back-header">Lorem, ipsum dolor.</h3>
							<p class="flip-card-back-content"><strong>Lorem:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem et non necessitatibus nemo ea reiciendis illum totam dolorum deleniti laboriosam?<br /><br />
								<strong>Ipsum:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem et non necessitatibus nemo ea reiciendis illum totam dolorum deleniti laboriosam</p>

						</div>
					</div>
				</div>
				<span class="service-cover"></span>
				<div class="flip-card-container">
					<div class="flip-card none">
						<div class="flip-card-front">
							<div class="scroll-to-next-section">
								<div class="arrow-container-second">
									<a href="#section-portfolio" data-scroll class="inner-arrow">
										<img src="img/icons/arrow-down.svg" alt="">
										<p>Przejdź dalej</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</section>

		<!-- ============================== SECTION-PORTFOLIO ============================== -->
		<!-- Póki co zostawiam nazwę portfolio ze względu na już istniejące stylowanie -->
		<section id="section-portfolio" class="section-portfolio">
			<span class="service-cover"></span>
			<span class="service-cover service-cover--left-medium"></span>
			<span class="service-cover service-cover--big"></span>
			<div class="portfolio-heading">
				<h2>Lorem ipsum dolor sit amet.</h2>
			</div>
			<div class="container">

				<!-- ==================== GALLERY CONTAINER ======================== -->
				<div class="gallery-container">

					<div class="gallery-main-photo">
						<img class='main-photo' src="https://github.com/maksymilianMroz/items-for-ajax/blob/master/img/1.jpg?raw=true" alt="main photo">
					</div>

					<div class="gallery-items-container">
						<div class="gallery-item" onclick="gallerySwitchOne()">
							<img class='gallery-photo1' src="https://github.com/maksymilianMroz/items-for-ajax/blob/master/img/1.jpg?raw=true" alt="gallery next item">
						</div>

						<div class="gallery-item" onclick="gallerySwitchTwo()">
							<img class='gallery-photo2' src="img/custom-rekrutacja/2.jpg" alt="gallery next item">
						</div>

						<div class="gallery-item" onclick="gallerySwitchThree()">
							<img class='gallery-photo3' src="img/custom-rekrutacja/3.jpg" alt="gallery next item">
						</div>

					</div>

				</div>

				<!-- ==================== PRODUCT DESCRIPTION CONTAINER ======================== -->
				<div class="product-description-container">

					<div class="product-description-title">Lorem, ipsum dolor.</div>

					<div class="product-description">

					<strong>Lorem:</strong><p class="product-description-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vel earum iusto!</p>
						<p class="product-description-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vel earum iusto!</p>
						<strong>Lorem: </strong><p class=" product-description-price"> 300$</p>
						<div class="btn-container">
							<button class="product-description-buy-now-btn">KUP TERAZ</button>
						</div>

					</div>


				</div>

			</div>

			<div class="product-list-container">

				<div class="product-list-container__list-line">
					<div class="product-list-container__list-item">
						<img src="#" alt="#">
						<h4>item</h4>
					</div>
				</div>

			</div>


		</section>
		<script src="./js/custom-rekrutacja.js"></script>

		<?php include "include/section-footer.php"; ?>

		<script src="js/smooth-scroll.js"></script>
		<script>
			var scroll = new SmoothScroll('a[data-scroll]');
		</script>

		<?php include "include/section-footer-scripts.php"; ?>