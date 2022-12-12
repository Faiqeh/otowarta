<?php
    require 'functions.php';

    // READ CATEGORY
    $select_category = mysqli_query($c, "SELECT * FROM category");

	// READ NEWS
	$select_news = mysqli_query($c, "SELECT * FROM news JOIN category ON category.category_id=news_category JOIN users ON users.user_id=news_author ORDER BY news_date DESC");
	$category = "";

	if(isset($_GET['side_category'])){
		$news_category = $_GET['side_category'];

		$select_news = mysqli_query($c, "SELECT * FROM news JOIN category ON category.category_id=news_category JOIN users ON users.user_id=news_author WHERE news_category='$news_category' ORDER BY news_date DESC");

		foreach($select_news as $data):
			$category = $data['category_name'];
		endforeach;

	}

	// READ NEWS LIMIT 4
	$select_news4 = mysqli_query($c, "SELECT * FROM news JOIN category ON category.category_id=news_category JOIN users ON users.user_id=news_author ORDER BY news_date DESC LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Otowarta | Kabar Otomotif Terkini</title>
	<link rel="shortcut icon" href="assets/images/logo/favicon.png" />

	<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;500;600;700;800&family=Barlow:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="assets/css/simple-scrollbar.css" />
	<link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/color/color-four.css" />

	<script src="assets/js/modernizr.min.js"></script>
</head>

<body class="bg-white-smoke">

	<div class="site-content">
		<!-- NAVBAR -->
		<header class="site-header header-style-one intro-element">
			<div class="navigation-area" style="background-color:#276cc3">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="site-navigation">
								<div class="site-branding text-center">
									<a href="index.php">
										<img src="assets/images/logo/logo.png" style="width:120px"/>
									</a>
								</div>
								
								<nav class="navigation">
									<div class="menu-wrapper">
										<div class="menu-content">
											<ul class="mainmenu">
												<li><a href="index.php">Beranda</a></li>
												<li><a href="search.php">Telusuri</a></li>
											</ul>
										</div>
									</div>
								</nav>

								<div class="header-right-area">
									<div class="search-wrap">
										<div class="search-btn">
											<i class="fas fa-search text-white"></i>
										</div>
										<div class="search-form">
											<form action="#">
												<input type="search" placeholder="Telusuri">
												<button type="submit"><i class="fas fa-search"></i></button>
											</form>
										</div>
									</div>
									<div class="header-card-area">
										<a href="admin/dashboard.php">
											<span class="fas fa-solid fa-lock text-white"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mobile-sidebar-menu sidebar-menu">
				<div class="overlaybg"></div>
			</div>
        </header>
        
        <div id="sticky-header" class="active"></div>

		<!-- CONTENTS -->
		<div class="main-wrapper mrb-80 mt-4">
			<div class="container">
				<div class="row justify-content-between gutters-50">
					<div class="col-lg-9 main-wrapper-content">
						<?php
							if($category == ""){

							} else {
						?>
						<h2 class="mb-4">Kategori: <span class="ml-2"><?=$category;?></span></h2>
						<?php
							}
						?>

						<!-- POST -->
						<main class="site-main style-one">
							<div class="row gutters-50">
								<?php foreach($select_news as $data): ?>
									<div class="col-lg-6 col-md-6 grid item">
										<article class="post hentry post-grid text-center style-one shadow">
											<div class="entry-thumb">
												<figure class="thumb-wrap">
													<a href="news.php?news_id=<?=$data['news_id'];?>">
														<img src="assets/images/news/<?=$data['news_img'];?>" style="width:fitcontent" />
													</a>
												</figure>
											</div>
											<div class="content-entry-wrap">
												<div class="entry-category">
													<a class="cat" type="submit" href="search.php?side_category=<?=$data['category_id'];?>" name="side_category"><?=$data['category_name'];?></a>
												</div>
												<h3 class="entry-title">
													<a href="news.php?news_id=<?=$data['news_id'];?>"><?=$data['news_tittle'];?></a>
												</h3>
												<div class="entry-meta-content">
													<div class="entry-author">
														oleh <a href="#"><?=$data['user_name'];?></a>
													</div>
													<div class="entry-date">
														<span><?=date("d M Y", strtotime($data['news_date']));?></span>
													</div>
												</div>
												<div class="read-more-wrap">
													<a class="read-more" href="news.php?news_id=<?=$data['news_id'];?>">Baca Selengkapnya</a>
												</div>
											</div>
										</article>
									</div>
								<?php endforeach ?>
							</div>
						</main>
					</div>

					<!-- SIDEBAR -->
					<div class="col-lg-3">
						<div class="sidebar-items style-three style-three-two">
							<!-- CATEGORY -->
							<aside class="widget widget_categories">
								<h4 class="widget-title" style="background-color:#276cc3">
									Kategori
								</h4>
								<div class="widget-content">
									<?php foreach($select_category as $data): ?>
										<form method="get">
											<ul>
												<li class="d-flex justify-content-center">
													<a type="submit" href="search.php?side_category=<?=$data['category_id'];?>" name="side_category"><?=$data['category_name'];?></a>
												</li>
											</ul>
										</form>
									<?php endforeach ?>
								</div>
							</aside>

							<!-- SUBSCRIBE -->
							<aside class="widget tb-signup-widget shadow">
								<div class="widget-content">
									<div class="signup-box">
										<h2>Berlangganan dengan kami!</h2>
										<div class="signup-form-area">
											<form class="signup-form">
												<div class="form-group">
													<input id="sign-email" name="EMAIL" placeholder="Alamat email ...." type="email">
													<button class="btn btn-default" type="submit">Berlangganan</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</aside>

							<!-- RECENT POST -->
							<aside class="widget widget-post-list">
								<h4 class="widget-title" style="background-color:#276cc3">Berita Terkini</h4>
								
								<?php foreach($select_news4 as $data): ?>
									<div class="widget-content mb-2">
										<article class="post">
											<div class="thumb-wrap">
												<a href="news.php?news_id=<?=$data['news_id'];?>">
													<img src="assets/images/news/<?=$data['news_img'];?>" style="width:90px" />
												</a>
											</div>
											<div class="content-entry-wrap">
												<h3 class="entry-title">
													<a href="news.php?news_id=<?=$data['news_id'];?>"><?=$data['news_tittle'];?></a>
												</h3>
												<div class="entry-meta-content">
													<div class="entry-date">
														<?=date("d M Y", strtotime($data['news_date']));?>
													</div>
												</div>
											</div>
										</article>
									</div>
								<?php endforeach ?>
								
							</aside>

							<!-- ADS -->
							<aside class="widget widget_advertisement">
								<div class="widget-content">
									<a href="#"><img src="assets/images/widget/autonetcare.gif" alt="Advertisement" /></a>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- SUBSCRIBE -->
		<div class="subscribe-section style-two mrb-80">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="subscribe-section-content bg-white mr-0 shadow">
							<div class="section-header">
								<h2 class="title">Berlangganan Sekarang!</h2>
								<p>Ketahui bertia terkini melalui email</p>
							</div>
							<div class="subscribe-form">
								<form class="dv-form" id="mc-form">
									<div class="form-group">
										<input id="mc-email" name="EMAIL" placeholder="Alamat Email" type="email" />
										<button class="btn btn-default" name="Subscribe" id="subscribe-btn" type="submit">
											Berlangganan
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<footer class="site-footer bg-white">
			<div class="footer-bottom-area" style="background-color:#276cc3">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="footer-bottom-content">
								<div class="copyright-text text-center">
									<p class="text-white">
										Copyright - 2022 Otowarta
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- SCRIPT -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/simple-scrollbar.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/theia-sticky-sidebar.min.js"></script>
	<script src="assets/js/ResizeSensor.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/scrolla.jquery.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>