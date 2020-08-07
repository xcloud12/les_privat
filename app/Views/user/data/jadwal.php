<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content Jadwal-->
        <div class="container-fluid" id="halaman_jadwal">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Jadwal</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 1%;">#</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Nama Tentor</th>
                                <th>Nama Peserta</th>
                                <th>Tanggal Pertemuan</th>
                                <th style="width: 1%;">Kehadiran</th>
                                <th hidden>Rating</th>
                                <th hidden>Ulasan</th>
                                <th hidden>Id Jadwal</th>
                                <th style="width: 1%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($jadwal as $u) : ?>
                                <tr>
                                    <td>
                                        <center>
                                            <?= $i ?>
                                        </center>
                                    </td>
                                    <td><?= $u->les ?></td>
                                    <td><?= $u->tentor ?></td>
                                    <td><?= $u->peserta ?></td>
                                    <td><?= strftime('%d %B %Y', strtotime($u->tgl)) ?></td>
                                    <td>
                                        <?php
                                        if ($u->absen === '1') : ?>
                                            <center>
                                                <div class="rounded-circle text-center text-white bg-success btn btn-sm">
                                                    <i class="fas fa-check-circle"></i>
                                                </div>
                                            </center>
                                        <?php elseif ($u->absen === '0') : ?>
                                            <center>
                                                <div class="rounded-circle text-center text-white bg-danger btn btn-sm">
                                                    <i class="fas fa-times-circle"></i>
                                                </div>
                                            </center>
                                        <?php else : ?>
                                            <center>
                                                <div class="rounded-circle text-center text-white bg-warning btn btn-sm">
                                                    <i class="fas fa-spinner"></i>
                                                </div>
                                            </center>
                                        <?php endif; ?>
                                    </td>
                                    <td hidden><?= $u->rating ?></td>
                                    <td hidden><?= $u->ulasan ?></td>
                                    <td hidden><?= $u->id_jadwal ?></td>
                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-info btn-sm btn_info" onclick="info(parentElement.parentElement.parentElement)">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </center>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            endforeach;
                            // d($jadwal);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="halaman_detail_jadwal">
            <!-- Page Heading -->
            <button class="btn btn-secondary mb-3" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Data Jadwal</h1>
            </div>
            <!-- Content Row -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-6 col-form-label font-weight-bold">Nama tentor</label>
                                        <label for="nama" class="col-sm-6 col-form-label">: Isian nama tentor</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-6 col-form-label font-weight-bold">Nama mata pelajaran</label>
                                        <label for="email" class="col-sm-6 col-form-label">: isian mapel</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_lahir" class="col-sm-6 col-form-label font-weight-bold">Nama peserta</label>
                                        <label for="tempat_lahir" class="col-sm-6 col-form-label">: isian nama peserta</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_lahir" class="col-sm-6 col-form-label font-weight-bold">Tanggal Pertemuan</label>
                                        <label for="tanggal_lahir" class="col-sm-6 col-form-label">: isian tanggal pertemuan</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-sm-6 col-form-label font-weight-bold">Kehadiran</label>
                                        <label for="jenis_kelamin" class="col-sm-6 col-form-label">: isian kehadiran/label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-6 col-form-label font-weight-bold">Rating</label>
                                        <label for="alamat" class="col-sm-6 col-form-label">: isian rating</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_telp" class="col-sm-6 col-form-label font-weight-bold">Ulasan</label>
                                        <label for="no_telp" class="col-sm-6 col-form-label">: isian ulasanp</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    //halaman
    const halaman_jadwal = $('#halaman_jadwal');
    const halaman_detail_jadwal = $('#halaman_detail_jadwal');
    //tombol
    const btn_detail_jadwal = $('.btn-info');
    const btn_kembali = $('#btn_kembali');
    halaman_detail_jadwal.hide()

    btn_detail_jadwal.click(() => {
        halaman_jadwal.fadeOut(300, () => {
            halaman_detail_jadwal.fadeIn(300)
        })
    })
    btn_kembali.click(() => {
        halaman_detail_jadwal.fadeOut(300, () => {
            halaman_jadwal.fadeIn(300)
        })
    })
</script>