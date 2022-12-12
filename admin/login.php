<?php
    require '../functions.php';

    // CEK SESSION
	if(!isset($_SESSION['log'])){

	} else {
		header('location:news.php');
	};
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Otowarta | Kabar Otomotif Terkini</title>
	<link rel="shortcut icon" href="../assets/images/logo/favicon.png" />

	<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;500;600;700;800&family=Barlow:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="../assets/css/simple-scrollbar.css" />
	<link rel="stylesheet" href="../assets/css/fontawesome.all.min.css" />
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/color/color-four.css" />

	<script src="../assets/js/modernizr.min.js"></script>
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
									<a href="../index.php">
										<img src="../assets/images/logo/logo.png" style="width:120px"/>
									</a>
								</div>
								
								<nav class="navigation">
									<div class="menu-wrapper">
										<div class="menu-content">
											<ul class="mainmenu">
												<li><a href="../index.php">Beranda</a></li>
												<li><a href="../search.php">Telusuri</a></li>
												<!-- <li class="megamenu">
													<a class="" >Kategori</a>
													<ul class="sub-menu megamenu-main">
														<li><a href="index.html">Home
															One</a></li>
														<li><a href="index02.html">Home
															Two</a></li>
														<li><a href="index03.html">Home
															Three</a></li>
														<li><a href="index04.html">Home
															Four</a></li>				
													</ul>
												</li> -->
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
										<a href="login.php">
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
            <div class="container ">
                <div class="row">
                    <div class="col-5 mx-auto">
                        <div class="card border-0 shadow rounded-3 my-5 f-lightgray">
                            <div class="card-body p-4 p-sm-5">
                                <div class="text-center mb-5">
                                    <img class="m-auto rounded-circle mb-4" src="../assets/images/logo/favicon.png" style="width:70px">
                                </div>
                                
                                <form method="post">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_email" required>
                                        <label for="floatingInput">Alamat Email</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user_password" required>
                                        <label for="floatingPassword">Kata Sandi</label>
                                    </div>
                                    <div class="d-grid mb-4">
                                        <button class="btn btn-default" style="background-color:#276cc3" type="submit" name="login">Masuk</button>
                                    </div>
									<div class="text-center">
										<p style="color:#00549c">Belum terdaftar? <a href="#" class="fw-bold">Buat Akun</a></p>
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
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/plugins.js"></script>
	<script src="../assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="../assets/js/simple-scrollbar.min.js"></script>
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/masonry.pkgd.min.js"></script>
	<script src="../assets/js/theia-sticky-sidebar.min.js"></script>
	<script src="../assets/js/ResizeSensor.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/scrolla.jquery.min.js"></script>
	<script src="../assets/js/main.js"></script>
</body>

</html>