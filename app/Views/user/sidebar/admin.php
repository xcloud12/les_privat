<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Les Privat || Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/mine.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book-reader"></i> <!-- Ubah Dulu Ikonnya-->
                </div>
                <div class="sidebar-brand-text mx-3 judul">Les Privat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-home"></i>
                    <span>Halaman Utama</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <img src="/img/header.png " width="40px" height="40px" alt="">
                    <span>User Name</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Layanan Utama
            </div>

            <!-- Menu Tentor -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTentor" aria-expanded="true" aria-controls="collapseTentor">
                    <i class="fas fa-chalkboard-teacher"></i> <!-- ubah ikon terlebih dahulu-->
                    <span>Tentor</span>
                </a>
                <div id="collapseTentor" class="collapse" aria-labelledby="HeadingTentor" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Layanan Menu :</h6>
                        <a class="collapse-item" href="#">Daftar Tentor</a>
                        <a class="collapse-item" href="#">Pengajuan Tentor</a>
                        <a class="collapse-item" href="#">Laporan Data Tentor</a>
                        <a class="collapse-item" href="#">Jadwal Tentor</a>
                        <a class="collapse-item" href="#">Reset Password</a>
                    </div>
                </div>
            </li>

            <!-- Menu Peserta -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeserta" aria-expanded="true" aria-controls="collapsePeserta">
                    <i class="far fa-user"></i> <!-- ubah ikon terlebih dahulu-->
                    <span>Peserta</span>
                </a>
                <div id="collapsePeserta" class="collapse" aria-labelledby="HeadingPeserta" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Layanan Menu :</h6>
                        <a class="collapse-item" href="#">Daftar Peserta</a>
                        <a class="collapse-item" href="#">Laporan Data Peserta</a>
                        <a class="collapse-item" href="#">Reset Password</a>
                    </div>
                </div>
            </li>

            <!-- Menu Les (Mata Pelajaran) -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLes" aria-expanded="true" aria-controls="collapseLes">
                    <i class="fas fa-book"></i> <!-- ubah ikon terlebih dahulu-->
                    <span>Mata Pelajaran</span>
                </a>
                <div id="collapseLes" class="collapse" aria-labelledby="HeadingLes" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Layanan Menu :</h6>
                        <a class="collapse-item" href="#">Daftar Mata Pelajaran</a>
                        <a class="collapse-item" href="#">Laporan Data</a>
                    </div>
                </div>
            </li>

            <!-- Menu Rating -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRating" aria-expanded="true" aria-controls="collapseRating">
                    <i class="fas fa-star"></i> <!-- ubah ikon terlebih dahulu-->
                    <span>Rating</span>
                </a>
                <div id="collapseRating" class="collapse" aria-labelledby="headingrating" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Layanan Menu :</h6>
                        <!-- <i class="fas fa-fw fa-table"></i> digunakan untuk menambahkan gambar di depan-->
                        <a class="collapse-item" href="#">Daftar Rating</a>
                        <a class="collapse-item" href="#">Top Rating</a>
                        <a class="collapse-item" href="#">Rating Terbawah</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tambahan
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Diagram</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->