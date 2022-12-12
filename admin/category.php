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
    $i = 1;
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
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-5 rounded-lg mt-4">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Manajemen Kategori</h3></div>

                            <div class="card-body">
								<div class="d-flex justify-content-start mb-3">
                                    <button type="button" class="btn btn-success" style="background-color:#276cc3" data-bs-toggle="modal" data-bs-target="#insertcategory"><i class="fa-solid fa-plus"></i></button>
                                    <a href="print_category.php" target="_blank" type="button" class="btn btn-dark ml-2"><i class="fa-solid fa-download"></i></a>

									<div class="modal fade" id="insertcategory">
										<div class="modal-dialog modal-sm">
											<div class="modal-content">
												<div class="modal-header" style="background-color:#276cc3">
													<h5 class="modal-title text-white">Tambah Kategori</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
												</div>
												<form method="post" enctype="multipart/form-data">
													<div class="modal-body">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" placeholder="tittle" required name="category_name">
                                                            <label>Nama Kategori</label>
                                                        </div>
													</div>

													<div class="modal-footer">
                                                        <button type="submit" class="btn btn-success" style="background-color:#276cc3" name="insertcategory">Simpan</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>

								<div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Ketegori</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($select_category as $data): ?>
                                                <tr>
                                                    <td><?=$i++;?></td>
                                                    <td><?=$data['category_name'];?></td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                            <a class="btn btn-success" type="submit" href="../search.php?side_category=<?=$data['category_id'];?>" target="_blank" name="side_category"><i class="fa-solid fa-eye"></i></a>
                                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editcategory<?=$data['category_id'];?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletecategory<?=$data['category_id'];?>"><i class="fa-solid fa-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="editcategory<?=$data['category_id'];?>">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color:#276cc3">
                                                                <h5 class="modal-title text-white">Edit Kategori</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <form method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="category_id" value="<?=$data['category_id'];?>">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control" placeholder="tittle" required name="category_name" value="<?=$data['category_name'];?>">
                                                                        <label>Nama Kategori</label>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success" style="background-color:#276cc3" name="updatecategory">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="deletecategory<?=$data['category_id'];?>">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header" style="background-color:#276cc3">
                                                                <h5 class="modal-title text-white">Hapus Kategori</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <form method = "post">
                                                                <div class="modal-body">
                                                                    <div>
                                                                        <p>Yakin ingin menghapus <?=$data['category_name'];?>?</p>
                                                                        <input type="hidden" name="category_id" value="<?=$data['category_id'];?>">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-danger" name="deletecategory">Hapus</button>
                                                                </div>
                                                            <form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
	<script src="assets/js/datatables-simple-demo.js"></script>
</body>

</html>