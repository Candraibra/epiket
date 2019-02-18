<!doctype html>
<html lang="en">

<head>
	<title>KONSEL</title>
	<link rel="shortcut icon" sizes="350x300" href="<?=base_url("assets/img/logo2.png")?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.css")?>"> 
	<link rel="stylesheet" href="<?=base_url("assets/css/animate.css")?>"> 
	<link rel="stylesheet" href="<?=base_url("assets/css/owl.carousel.min.css")?>"> 
	<link rel="stylesheet" href="<?=base_url("assets/fonts/ionicons/css/ionicons.min.css")?>"> 
	<link rel="stylesheet" href="<?=base_url("assets/fonts/fontawesome/css/font-awesome.min.css")?>">
	<link rel="stylesheet" href="<?=base_url("assets/fonts/flaticon/font/flaticon.css")?>">
	<link rel="stylesheet" href="<?=base_url("assets/css/magnific-popup.css")?>">
	<link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>"> 
</head>
<body>

	<div class="wrap">

		<header role="banner">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<a class="navbar-brand absolute" href="<?=base_url()?>"><img class="logoqu" style="width:28px;margin-top:-5px;" src="<?= base_url("assets/img/logo2.png")?>">KONSEL</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05"aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo base_url('index.php/Login'); ?>">Login</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- END header -->
	<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/bg.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-8 text-center">
            <div class="mb-5 element-animate">
              <div class="block-17">
			  <h1 class="heading mb-4">Let Your Dreams Come True men.</h1>
			  <p><a href="#about" class="btn btn-primary-white py-3 px-5">About</a> <a href="http://smktelkom-pwt.sch.id/" class="text-white ml-4"> <span class="ion-ios-location mr-2"></span> Visit SMK Telkom Purwokerto</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		<!-- END section -->
		<section class="site-section" id="about">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 order-md-2">
						<div class="block-16">
							<figure>
								<img src="<?= base_url("assets/images/img_1.jpg")?>" alt="Image placeholder" class="img-fluid img-shadow">		
							</figure>
						</div>
					</div>
					<div class="col-md-6 order-md-1">
						<div class="block-15">
							<div class="heading">
								<h2>Welcome To ekonsul</h2>
							</div>
							<div class="text mb-5">
								<p class="mb-4">Ekonsul merupakan Web Aplication yang digunakan oleh Sekretaris dan guru BK untuk
									mendigitalisasikan jurnal kehadiran siswa dan menjadi kotak saran digital ke guru BK</p>
								<p class="text-black">SMK Telkom <strong>Purwokerto</strong></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END section -->
		<section class="site-section pt-0">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4 mb-5">
						<div class="block-43">
							<div class="block-43-icon">
								<span class="icon-wrapper">
									<span class="icon fa fa-book text-primary"></span>
								</span>
							</div>
							<div class="block-43-text">
								<h3 class="block-43-heading">Digitaisasi Buku Jurnal </h3>
								<p>Mempermudah proses absensi siswa dan memindahkan fungsi dari buku jurnal ke dalamnya.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 mb-5">
						<div class="block-43">
							<div class="block-43-icon">
								<span class="icon-wrapper">
									<span class="icon fa fa-user text-primary"></span>
								</span>
							</div>
							<div class="block-43-text">
								<h3 class="block-43-heading">TEMAN KITA</h3>
								<p>Menerima Curhatan Dan Keluhan Siswa Ke guru BK.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 mb-5">
						<div class="block-43">
							<div class="block-43-icon">
								<span class="icon-wrapper">
									<span class="icon fa fa-heart text-primary"></span>
								</span>
							</div>
							<div class="block-43-text">
								<h3 class="block-43-heading">MEMBERIKAN TERBAIK</h3>
								<p>Memberikan Saran Yang Terbaik dari yang pernah ada di SMK Telkom Purwokerto.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="site-section bg-light">
		<center>
			<div class="container">
			
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading">
							<h2 class="heading">KOTAK KELUHAN</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="main-content">
				<form class="form-basic" method="post" action="http://localhost/EKONSEL/index.php/Cilin/masukkan">
					<table>
						<tr>
							<div class="form-row">
									<td>
										<span>Nama Lengkap</span>
									</td>
									<td>
										<input type="text" style="border-radius:5px;margin-left:10px" name="fullname" required>
									</td>
							</div>
						</tr>
						<div class="form-row">
							<tr>
								<label>
									<td>
										<span>Kelas</span>
									</td>
									<td>
										<input type="text" style="border-radius:5px;margin-left:10px" name="kelas" required>
									</td>
								</label>
						</div>
						</tr>
						<div class="form-row">
							<tr>
								<label>
									<td>
										<span>Email</span>
									</td>
									<td>
										<input type="email"style="border-radius:5px;margin-left:10px" name="email" required>
									</td>
								</label>
							</tr>
						</div>
						<div class="form-row">
							<tr>
								<label>
									<td>
										<span>Keluhan</span>
									</td>
									<td style="width:50px">
										<input type="text" style="border-radius:5px;margin-left:10px;width:50px,height:20px"  name="keluhan"required>
									</td>
								</label>
							</tr>
						</div>
					</table>
					<button class="btn btn-outline-primary"  style="margin-top:20px;border-radius:23px;padding:12px;padding-left: 30px;padding-right: 30px;"type="submit" value="Submit">Masukan</button>
			</div>
	</div>
	</form>
	</div>
	</center>
	</section>
	<footer class="site-footer">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
					<h3 class="heading">EKONSEL</h3>
				</div>
			</div>
			<div class="row pt-5" style="margin-top:-80px">
				<div class="col-md-12 text-center copyright">
					<p class="float-md-left">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
						 href="http://smktelkom-pwt.sch.id/" target="_blank" class="text-primary">SMK Telkom Purwokerto</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<p class="float-md-right">
						<a href="#" class="fa fa-facebook p-2"></a>
						<a href="#" class="fa fa-twitter p-2"></a>
						<a href="#" class="fa fa-linkedin p-2"></a>
						<a href="#" class="fa fa-instagram p-2"></a>

					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- END footer -->

	

	<script src="<?= base_url("assets/js/jquery-3.2.1.min.js")?>"></script>
	<script src="<?= base_url("assets/js/jquery-migrate-3.0.0.js")?>"></script> 
	<script src="<?= base_url("assets/js/popper.min.js")?>"></script>
	<script src="<?= base_url("assets/js/bootstrap.min.js")?>"></script> 
	<script src="<?= base_url("assets/js/owl.carousel.min.js")?>"></script>
	<script src="<?= base_url("assets/js/jquery.waypoints.min.js")?>"></script>
	<script src="<?= base_url("assets/js/jquery.stellar.min.js")?>"></script>
	<script src="<?= base_url("assets/js/jquery.animateNumber.min.js")?>"> </script>
	<script src="<?= base_url("assets/js/jquery.magnific-popup.min.js")?>"></script>
	<script src="<?= base_url("assets/js/main.js")?>"></script> 
	</body> 
	  <script>
		$(document).ready(function () {
			// Add smooth scrolling to all links
			$("a").on('click', function (event) {
				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();
					// Store hash
					var hash = this.hash;
					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 700, function () {
						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
		});
	</script>

</html>