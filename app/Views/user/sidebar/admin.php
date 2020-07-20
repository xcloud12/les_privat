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
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Menu Tentor -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTentor" aria-expanded="true" aria-controls="collapseTentor">
            <i class="fas fa-user-graduate"></i> <!-- ubah ikon terlebih dahulu-->
            <span>Tentor</span>
        </a>
        <div id="collapseTentor" class="collapse" aria-labelledby="HeadingTentor" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/data/tentor">Data Tentor</a>
                <a class="collapse-item" href="/data/pengajuan">Pengajuan Tentor</a>
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
                <a class="collapse-item" href="/data/peserta">Data Peserta</a>
                <a class="collapse-item" href="/data/pemesanan">Pemesanan Les</a>
            </div>
        </div>
    </li>

    <!-- Menu Les (Mata Pelajaran) -->
    <li class="nav-item">
        <a class="nav-link" href="/data/les">
            <i class="fas fa-book"></i>
            <span>Mata Pelajaran</span>
        </a>
    </li>

    <!-- Menu Jadwal -->
    <li class="nav-item">
        <a class="nav-link" href="/data/jadwal">
            <i class="fa fa-list-alt"></i>
            <span>Jadwal</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <!-- Nav Item - keluar -->
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->