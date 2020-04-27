<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="user-panel">
					<h6><a href="<?php echo base_url('index.php/Welcome/login_pilihan') ?>">Login   | </a>
					<a href="<?php echo base_url('index.php/Welcome/regis_pilihan') ?>">Registrasi</a></h6>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="<?php echo base_url() ?>asset_home/img/logo1.png" width="400px" height="110" alt="" >
				</a>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="<?php echo base_url() ?>asset_home/img/slider-bg-1.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Cari</span></h2>
					<h2 class="hs-title-2"><span>Kos</span></h2>
					<h2 class="hs-title-3"><span>DISINI AJA !!!</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="<?php echo base_url() ?>asset_home/img/slider-bg-3.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Cari</span></h2>
					<h2 class="hs-title-2"><span>Kos</span></h2>
					<h2 class="hs-title-3"><span>DISINI AJA !!!</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="<?php echo base_url() ?>asset_home/img/slider-bg-2.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Cari</span></h2>
					<h2 class="hs-title-2"><span>Kos</span></h2>
					<h2 class="hs-title-3"><span>DISINI AJA !!!</span></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="<?php echo base_url() ?>asset_home/img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="<?php echo base_url() ?>asset_home/img/logo1.png" width="200px" height="60" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">

					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Ngekos Yuk <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<div class="container">
		<div class="card-columns">
			<?php foreach ($artikel as $a): ?>
				<div class="card">
					<a href="<?= base_url('index.php/welcome/view_artikel/'.$a->id_artikel); ?>">
						<img class="card-img-top" src=" <?= base_url('asset_admin/artikel/'.$a->foto) ?>" alt="Card image cap">
					</a>
					<div class="card-body">
						<h2 class="card-title"><?= $a->judul ?></h2>
						<p class="card-text"><?= substr($a->deskripsi, 0, 40) ?>...</p>
					</div>
					<div class="card-footer">
						<small class="text-muted"><?= $a->tgl_upload ?></small>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
