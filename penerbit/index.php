<?php
require '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>TOKO BUKU</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="../dist/images/logo/koran.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="../dist/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="../dist/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="../dist/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="../dist/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="../dist/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="../dist/css/custom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="dashboard dashboard_1">
    <?php
    session_start();
    if (isset($_SESSION["created"])) {
        echo "<script>
     swal({
        title: 'Congratulation!',
        text: 'Tambah data penerbit berhasil!',
        icon: 'success',
        button: 'ok',
      });
    </script>";
        unset($_SESSION["created"]);
    } else if (isset($_SESSION["errdes"])) {
        echo "<script>
      swal({
        title: 'Maaf!',
        text: 'Penerbit ini memiliki data buku terkait!',
        icon: 'warning',
        button: 'ok',
      });
    </script>";
        unset($_SESSION["errdes"]);
    } else if (isset($_SESSION["updated"])) {
        echo "<script>
     swal({
        title: 'Congratulation!',
        text: 'Update data penerbit berhasil!',
        icon: 'success',
        button: 'ok',
      });
    </script>";
        unset($_SESSION["updated"]);
    } elseif (isset($_SESSION["destroy"])) {
        echo "<script>
     swal({
        title: 'Congratulation!',
        text: 'Hapus data penerbit berhasil!',
        icon: 'success',
        button: 'ok',
      });
    </script>";
        unset($_SESSION["destroy"]);
    } ?>
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="../dist/index.html"><img class="logo_icon img-responsive" src="dist/images/logo/logo_icon.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="../images/profile.jpg" alt="#" />
                            </div>
                            <div class="user_info">
                                <h6>Admin</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li><a href="../index.php"><i class="fa fa-home white_color"></i>
                                <span>Home</span></a>
                        </li>
                        <li><a href="../admin.php"><i class="fa fa-database white_color"></i>
                                <span>Admin</span></a>
                        </li>
                        <li><a href="../pengadaan.php"><i class="fa fa-book white_color"></i>
                                <span>Pengadaan</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                <img class="img-responsive rounded-circle" src="../images/profile.jpg" alt="#" />
                                                <span class="name_user">Admin</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="" class="dropdown-item">My
                                                    Profile</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->

                <div class="row column_title">
                    <div class="col-md-12">
                        <div class="page_title">
                            <div class="float-right">
                                <ul class="d-flex">
                                    <li><a href="../index.php">Home <span class="mx-1">></span></a></li>
                                    <li><a href="../admin.php">Admin <span class="mx-1">></span></a></li>
                                    <li><a> Penerbit </a></li>
                                </ul>
                            </div>
                            <h2 style="width: max-content">Data Penerbit</h2>
                        </div>
                    </div>
                </div>

                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="float-right heading1 margin_0">
                                            <a href="create.php">
                                                <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table_section padding_infor_info">
                                        <div class="table-responsive-sm">
                                            <table class="table table-hover">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Kota</th>
                                                        <th>Telepon</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($penerbit as $p) { ?>
                                                        <tr>
                                                            <td><?= ++$no ?></td>
                                                            <td><?= $p['kode'] ?></td>
                                                            <td><?= $p['nama'] ?></td>
                                                            <td><?= $p['alamat'] ?></td>
                                                            <td><?= $p['kota'] ?></td>
                                                            <td><?= $p['telepon'] ?></td>
                                                            <td class="text-right d-flex justify-content-end">
                                                                <a class="btn btn-warning" href="edit.php?id=<?= $p['id'] ?>"><i class="fa fa-pencil"></i></a>
                                                                <a class="btn btn-danger" href="destroy.php?id=<?= $p['id'] ?>"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                    if (mysqli_num_rows($penerbit) == 0) { ?>
                                                        <tr>
                                                            <td colspan="7" class="text-center">
                                                                Data belum ada
                                                            </td>
                                                        </tr>
                                                    <?php     }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p class="pb-1">Copyright © 2018 Designed by Badrr design. All rights reserved.
                            </p>
                            <p class="pt-1"> Distributed By: Badrr </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="dist/js/animate.js"></script>
    <!-- select country -->
    <script src="dist/js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="dist/js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="dist/js/Chart.min.js"></script>
    <script src="dist/js/Chart.bundle.min.js"></script>
    <script src="dist/js/utils.js"></script>
    <script src="dist/js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="dist/js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="dist/js/chart_custom_style1.js"></script>
    <script src="dist/js/custom.js"></script>
</body>

</html>