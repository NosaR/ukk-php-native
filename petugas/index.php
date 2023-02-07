<?php
require '../request.php';

// JIKA SESI USERT PETUGAS KOSONG
if(!empty($_SESSION['USER']['tipe'] == "petugas")) {
    header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="/asset/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>AdminKit Demo - Bootstrap 5 Admin Template</title>

    <link href="/asset/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="?page=dashboard">
                    <span class="align-middle">Nosa</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Halaman
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="?page=kelas">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Kelas</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?page=petugas">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Petugas</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?page=siswa">
                            <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Siswa</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?page=spp">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">SPP</span>
                        </a>
                    </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?page=laporan">
                            <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Laporan</span>
                        </a>
                    </li>


                </ul>

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <div class="d-grid">
                            <a href="?page=transaksi" class="btn btn-primary">+ Entri Transaksi</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        
						<li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="/asset/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
                                    alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../kontrol/kontrolLogin.php?aksi=logout">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <?php 
                //MEMBUAT HALAMAN DINAMIS
                if (!empty($_GET['page'])) {
                    $page = $_GET['page'].'.php';
                    include($page);
                } else {
                    include('dashboard.php');
                }
                ?>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/"
                                    target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
                                    href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="/asset/js/app.js"></script>
</body>

</html>