        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column pt-4">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Utama Admin</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Tentor -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bolder text-primary text-uppercase mb-3">Tentor (Keseluruhan)</div>
                                            <div class="mb-0 font-weight-bold text-gray-800 h5"><?= $dashboard['total']->tentor > 0 ? $dashboard['total']->tentor . " Orang" : "Belum ada Tentor" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-graduate fa-2x text-gray-300 mr-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Peserta -->
                        <div class="col-xl-4 col-md-7 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bolder text-primary text-uppercase mb-3">Peserta (Keseluruhan)</div>
                                            <div class="mb-0 font-weight-bold text-gray-800 h5"><?= $dashboard['total']->peserta > 0 ? $dashboard['total']->peserta . " Orang" : "Belum ada peserta" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300 mr-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Mata Pelajaran -->
                        <div class="col-xl-4 col-md-7 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bolder text-primary text-uppercase mb-3">Mata Pelajaran (Keseluruhan)</div>
                                            <div class="mb-0 font-weight-bold text-gray-800 h5"><?= $dashboard['total']->les > 0 ? $dashboard['total']->les . " Mapel" : "Belum ada Mapel" ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300 mr-2"></i>
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
                                    <h6 class="m-0 font-weight-bold text-gray-800">Daftar Mata Pelajaran Paling Diminati</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="text-gray">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-bordered bgr table-striped table-hover" id="dashboardAdmin" width="100%" cellspacing="0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th style="width: 1%; align-items: center;">#</th>
                                                            <th>Kategori</th>
                                                            <th>Nama Mata Pelajaran</th>
                                                            <th>Banyak Peminat</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        foreach ($dashboard['top'] as $top) : ?>
                                                            <tr>
                                                                <td><?= $i ?></td>
                                                                <td><?= ucfirst($top->kategori) ?></td>
                                                                <td><?= $top->nama ?></td>
                                                                <td><?= $top->peminat ?></td>
                                                            </tr>
                                                        <?php
                                                            $i++;
                                                        endforeach;
                                                        ?>
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