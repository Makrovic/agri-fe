<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>NOLKOMA CREATIVE</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="fullhitam.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/magnific-popup.js"></script>
	<script src="contactform/contactform.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>

	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->

		<ul class="main-nav">
			<li class="small-logo"><a href="index.php#header"><img src="img/newlogo.png" alt=""></a></li>
			<li><a href="index.php#service">PROFILE</a></li>
			<li><a href="index.php#Portfolio">portfolio</a></li>
			<li><a href="index.php#client">Partner</a></li>
			<li><a href="index.php#team">team</a></li>
			<!--<li><a href="#contact">News</a></li>-->
			<li><a href="index.php#contact">Contact</a></li>
			<li><a href="article.php">Article</a></li>
		</ul>
		<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>

	</nav>
	<!--main-nav-end-->


	<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="container">
			<h2>Article</h2>
			<p>
				<center>All About Creativity</center>
			</p>
			<br>
			<div class="row">
				<figure class="col-lg-8 col-sm-6   wow fadeInUp delay-02s">
					<div class="col-md-11 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<?php
						include "config.php";
						$id = $_GET['p'];
						$hasil = mysqli_query($config, "SELECT * FROM artikel WHERE id_artikel='$id'");
						$data = mysqli_fetch_array($hasil); {
						?>

							<h3><b><?php echo $data['judul'] ?></b></h3>
							<p><i><?php echo $data['tanggal'] ?></i></p>
							<br>
							<img src="admin/img/<?php echo $data['foto'] ?>" class="img-responsive" />
							<br><br>
							<p><?php echo $data['isi'] ?>
							</p>
						<?php
						}
						?>
					</div>

				</figure>

				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">

					<div class="service-list">

						<div class="service-list-col2">
							<div id="sidebar" class="fr_col2">

								<div id="recent-posts-2" class="widget widget_recent_entries">
									<h4 class="widget_title">Recent Posts</h4>
									<?php
									include "config.php";
									$sql = "SELECT id_artikel, judul, isi, tanggal, foto FROM artikel ORDER BY id_artikel DESC";
									$hasil = mysqli_query($config, $sql);
									while ($data = mysqli_fetch_array($hasil)) {
									?>
										<ul>
											<li>
												<a href="article.php?p=<?php echo $data['id_artikel'] ?>"> <?php echo $data['judul'] ?> </a>
											</li>
										</ul>
									<?php
									}
									?>
								</div> <!-- end .widget -->


								<!-- end .widget -->

								<!-- end .widget -->
							</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</section>


	<!--main-section alabaster-end-->

	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="img/putih123.png" alt=""></a></div>
			<span class="copyright">&copy; NOLKOMA CREATIVE. All Rights Reserved</span>
			<div class="credits">
				Designed by <a href="https://bootstrapmade.com/">NOLKOMA WEB DESIGN</a>
			</div>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

			$('.Portfolio-box').magnificPopup({
				delegate: 'a',
				type: 'image'
			});

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

</body>

</html>