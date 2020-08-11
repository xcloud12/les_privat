        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column pt-4">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Utama Tentor</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Baqnyak Peserta (Keseluruhan) -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h4 font-weight-bolder text-primary text-uppercase mb-3">Peserta (Keseluruhan)</div>
                                            <div class="mb-0 font-weight-bold text-gray-800 h5"><?= $dashboard['peserta']->peserta > 0 ? $dashboard['peserta']->peserta . " Orang" : "Belum ada Siswa" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300 mr-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Materi Pelajaran -->
                        <div class="col-xl-6 col-md-7 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h4 font-weight-bolder text-primary text-uppercase mb-3">Materi Pelajaran (Keseluruhan)</div>
                                            <div class="mb-0 font-weight-bold text-gray-800 h5"><?= $dashboard['mapel']->mapel > 0 ? $dashboard['mapel']->mapel . " Materi" : "Belum ada Materi" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300 mr-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content jadwal -->
                    <div class="row">
                        <!-- Tabel jadwal pertemuan  -->
                        <div class="col-xl col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-gray-800">Jadwal Mengajar Terdekat</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="text-gray">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered bgr table-striped table-hover" width="100%" cellspacing="2">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama Mata Pelajaran</th>
                                                                <th>Nama Murid</th>
                                                                <th>Tanggal Pertemuan</th>
                                                                <th>Jam Pertemuan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Matematika</td>
                                                                <td>dolla</td>
                                                                <td>28 Agustus 2020</td>
                                                                <td>54.00 - 12.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Matematika</td>
                                                                <td>dolla</td>
                                                                <td>33 Agustus 2020</td>
                                                                <td>54.00 - 12.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Tabel Mmapel terbanyak -->
                        <div class="col-xl col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-gray-800">Selamat Datang Tentor (Nama)</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <p class="font-weight-bold mb-1">Seto Mulyadi :</p>
                                    <p class="font-weight-light font-italic pb-3">"Pendidikan kita belum memenuhi tuntutan pendidikan karakter. Masih ada kekerasan di sekolah dan rumah, kurikulum semakin padat, dan cara mengajar yang belum ramah anak."</p>

                                    <p class="font-weight-normal">Langkah langkah mengajukan diri untuk mengajar :</p>
                                    <ol class="decimal mt-0">
                                        <li style="margin-top: -12px">Pilih menu les</li>
                                        <li>Tekan tombol tambah jadwal</li>
                                        <li>Cari mata pelajaran yang ingin di ajarkan</li>
                                        <li>Isi data yang dibutuhkan</li>
                                        <li style="margin-bottom: 10px;">Pilih tombol ajukan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Page level plugins -->
        <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="/js/demo/datatables-demo.js"></script>
        <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">