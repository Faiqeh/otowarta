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

    // READ CATEGORY
    $select_category = mysqli_query($c, "SELECT * FROM category");
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
												<li><a href="news.php">Berita</a></li>
												<li><a href="category.php">Kategori</a></li>
											</ul>
										</div>
									</div>
								</nav>

                                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
									<form method="post">
                                        <?php foreach($select_users as $data): ?>
                                            <li class="nav-item dropdown">
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
                    <div class="col-lg-8">
                        <div class="card shadow-lg border-5 rounded-lg mt-4">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Berita</h3></div>

                            <div class="card-body">
                                <?php
                                    $news_id = $_GET['news_id'];

                                    $select_news = mysqli_query($c, "SELECT * FROM news JOIN category ON category.category_id=news_category JOIN users ON users.user_id=news_author WHERE news_id='$news_id'");

                                    while($data = mysqli_fetch_array($select_news)){
                                        $news_id = $data ['news_id'];
                                        $news_tittle = $data ['news_tittle'];
                                        $news_desc = $data ['news_desc'];
                                        $news_img = $data ['news_img'];
                                        $news_category = $data ['news_category'];
                                        $news_author = $data ['news_author'];
                                        $news_date = $data ['news_date'];
                                        $category_id = $data ['category_id'];
                                        $category_name = $data ['category_name'];
                                        $user_id = $data ['user_id'];
                                        $user_name = $data ['user_name'];
                                ?>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-floating mb-3">
                                                <input type="hidden" class="form-control" name="news_id" value="<?=$news_id;?>">
                                                                            
                                                <input type="text" class="form-control" placeholder="news_tittle" required name="news_tittle" value="<?=$news_tittle;?>">
                                                <label>Judul Berita</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select class="form-select" required name="news_category">
                                                    <option value="<?=$category_id;?>"><?=$category_name;?></option>
                                                    <option value="" disabled>---------</option>

                                                    <?php
                                                        $select_category = mysqli_query($c, "SELECT * FROM category");
                                                        while($data = mysqli_fetch_array($select_category)){
                                                            $category_id = $data ['category_id'];
                                                            $category_name = $data ['category_name'];
                                                    ?>
                                                        <option value="<?=$category_id;?>"><?=$category_name;?></option>
                                                    <?php
                                                        };
                                                    ?>
                                                </select>
                                                <label>Kategori Berita</label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Thumbnail</label>
                                                <br>
                                                <img src="../assets/images/news/<?=$news_img;?>" style="width:fitcontent">
                                                <input class="form-control" type="file" accept="image/png, image/jpg, image/jpeg" id="formFile" name="news_img">
                                            </div>
                                            <div class="mt-4">
                                                <textarea class="form-control" style="height: 350px" name="news_desc" placeholder="Deskripsi Berita" required><?=$news_desc;?></textarea>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success" style="background-color:#276cc3" name="updatenews">Simpan</button>
                                        </div>
                                    </form>
                                <?php
                                    };
                                ?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
	<script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>