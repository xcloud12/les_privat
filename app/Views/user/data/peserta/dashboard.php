        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column pt-4">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang (nama peserta)</h1>
                    </div>
                    <!-- Content jadwal -->
                    <div class="row">
                        <!-- Tabel jadwal pertemuan  -->
                        <div class="col-xl col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-gray-800">Daftar Pertemuan Dengan Tentor</h6>
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
                                                                <th>Nama Tentor</th>
                                                                <th>Tanggal Pertemuan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($dashboard['jadwal'] as $jadwal) : ?>
                                                                <tr>
                                                                    <td><?= $i ?></td>
                                                                    <td><?= $jadwal->les ?></td>
                                                                    <td><?= $jadwal->tentor ?></td>
                                                                    <td><?= strftime('%d %B %Y', strtotime($jadwal->tgl)) ?></td>
                                                                </tr>
                                                            <?php $i++;
                                                            endforeach; ?>
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
                                    <h6 class="m-0 font-weight-bold text-gray-800">Kata Kata Penyemangat Kehidupan</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="pb-1">
                                        <p class="font-weight-bold mb-1">Arthur Wellesley :</p>
                                        <p class="font-weight-light font-italic pb-3">"Orang bijak belajar ketika mereka bisa. Orang bodoh belajar ketika mereka terpaksa."</p>
                                    </div>
                                    <div class="pb-1">
                                        <p class="font-weight-bold mb-1">Nelson Mandela :</p>
                                        <p class="font-weight-light font-italic pb-3">"Pendidikan adalah senjata paling mematikan di dunia, karena dengan pendidikan, Anda dapat mengubah dunia."</p>
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