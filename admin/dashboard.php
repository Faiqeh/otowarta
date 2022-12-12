<?php
    require '../functions.php';

    // CEK SESSION
    if(isset($_SESSION['log'])){
        $email = $_SESSION['log'];
    } else {
        header('location:login.php');
    };

    // READ USERS
    $select_users = mysqli_query($c, "SELECT * FROM users WHERE user_email='$email'");
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

	<link href="../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
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
												<li><a href="dashboard.php">Dashboard</a></li>
												<li><a href="news.php">Berita</a></li>
												<li><a href="category.php">Kategori</a></li>
											</ul>
										</div>
									</div>
								</nav>

								<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
									<form method="post">
                                        <?php foreach($select_users as $data): ?>
                                            <li class="nav-item dropdown mainmenu">
                                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="me-2 fw-semibold text-white"><?=$data['user_name'];?></span><i class="ml-2 fas fa-user text-white"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <li><button class="dropdown-item" name="logout">Keluar</button></li>
                                                </ul>
                                            </li>
                                        <?php endforeach ?>
									</form>
                                </ul>


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
                <div class="row justify-content-center gutters-40">
                    <div class="col-lg-12 mt-4">
						<div class="row">
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2 rounded-lg">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Jumlah Berita</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-newspaper fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-success shadow h-100 py-2 rounded-lg">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
													Jumlah Kategori</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-folder-open fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-info shadow h-100 py-2 rounded-lg">
									<div class="card-body">
									<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
													Pengunjung Hari Ini</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">3.202</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-user fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-warning shadow h-100 py-2 rounded-lg">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
													Total Pengunjung</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">717.029</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-users fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">

							<!-- Area Chart -->
							<div class="col-xl-8 col-lg-7">
								<div class="card shadow mb-4 rounded-lg">
									<!-- Card Header - Dropdown -->
									<div
										class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Pendapatan Iklan</h6>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-area">
											<canvas id="myAreaChart"></canvas>
										</div>
									</div>
								</div>
							</div>

							<!-- Pie Chart -->
							<div class="col-xl-4 col-lg-5">
								<div class="card shadow mb-4 rounded-lg">
									<!-- Card Header - Dropdown -->
									<div
										class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Sebaran Berita</h6>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-pie pt-4 pb-2">
											<canvas id="myPieChart"></canvas>
										</div>
										<div class="mt-4 text-center small">
											<span class="mr-2">
												<i class="fas fa-circle text-primary"></i> Direct
											</span>
											<span class="mr-2">
												<i class="fas fa-circle text-info"></i> Social
											</span>
											<span class="mr-2">
												<i class="fas fa-circle text-success"></i> Referral
											</span>
										</div>
									</div>
								</div>
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

	<!-- Bootstrap core JavaScript-->
    <script src="../assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/dashboard/js/demo/chart-area-demo.js"></script>
    <script src="../assets/dashboard/js/demo/chart-pie-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
	<script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>