<script>
	$("body").mousemove(function(e) {
	  parallaxIt(e, ".btn-inner", -20);
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
	  parallaxIt(e, ".btn-shadow", 20);
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

<a href="door2door" class="btn-door2door">
	<span class="btn-shadow"></span>
	<span class="btn-inner">door2door</span>
</a>

<div class="body-wrapper">

<!-- ============================== SECTION-HEADER ============================== -->
	<nav class="section-header">
		<div class="container">
			<div class="header-flexbox">
				<a href="index" class="flexbox-logo">
					<img src="img/logo/logo.svg" alt="">
					<img src="img/logo/logo-sygnet.svg" alt="">
					<img src="img/logo/logo-sygnet-hover.svg" alt="">
				</a>
				<div class="flexbox-nav-wrapper">
					<div class="nav-button-close">
						<div class="container">
							<button type="button" id="nav-button-close">
								<span class="button-bar"></span>
								<span class="button-bar"></span>
							</button>
						</div>
					</div>
					<div class="flexbox-nav-inner">
						<ul class="flexbox-nav list-unstyled">
							<li><a href="zaluzje">Żaluzje</a></li>
							<li><a href="plisy">Plisy</a></li>
							<li><a href="rolety">Rolety</a></li>
							<li><a href="moskitiery">Moskitiery</a></li>
							<li><a href="firany">Firany</a></li>
							<li><a href="zaslony">Zasłony</a></li>
						</ul>
					</div>
				</div>
				<ul class="flexbox-social list-unstyled">
					<li><a href=""><img src="img/logo/facebook.svg" alt=""></a></li>
					<li><a href=""><img src="img/logo/instagram.svg" alt=""></a></li>
				</ul>
				<button type="button" class="nav-button" id="nav-button">
					<span class="button-bar"></span>
					<span class="button-bar"></span>
					<span class="button-bar"></span>
				</button>
			</div>
		</div>
	</nav>
