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
                            <tr class="text-center">
                                <th style="width: 1%;" class="text-center">#</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Nama Tentor</th>
                                <th>Nama Peserta</th>
                                <th hidden>Rating</th>
                                <th>Tanggal Pertemuan</th>
                                <th style="width: 1%;">Kehadiran</th>
                                <th hidden>Ulasan</th>
                                <th style="width: 1%;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($jadwal as $u) : ?>
                                <tr>
                                    <td class="text-center"><?= $i ?></td>
                                    <td><?= $u->les ?></td>
                                    <td><?= $u->tentor ?></td>
                                    <td><?= $u->peserta ?></td>
                                    <td hidden>
                                        <?php
                                        for ($n = 1; $n <= 5; $n++) :
                                            $star = "";
                                            if ($u->rating >= $n) {
                                                $star = "text-primary";
                                            } ?>
                                            <i class="fas fa-star <?= $star ?>"></i>
                                        <?php endfor; ?>
                                    </td>
                                    <td class="text-right"><?= strftime('%d %B %Y', strtotime($u->tgl)) ?></td>
                                    <td hidden><?= $u->ulasan == '' ? 'Belum Ada Ulasan' : $u->ulasan ?></td>
                                    <td class="text-center">
                                        <?php
                                        if ($u->absen === '1') : ?>
                                            <div class="rounded-circle text-center text-white bg-success btn btn-sm">
                                                <i class="fas fa-check-circle">
                                                    <label name="status" hidden>Hadir</label>
                                                </i>
                                            </div>
                                        <?php elseif ($u->absen === '0') : ?>
                                            <div class="rounded-circle text-center text-white bg-danger btn btn-sm">
                                                <i class="fas fa-times-circle">
                                                    <label name="status" hidden>Tidak Hadir</label>
                                                </i>
                                            </div>
                                        <?php else : ?>
                                            <div class="rounded-circle text-center text-white bg-warning btn btn-sm">
                                                <i class="fas fa-spinner">
                                                    <label name="status" hidden>Belum Absen</label>
                                                </i>
                                            </div>
                                        <?php endif; ?>
                                    </td>
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
                                <table class="table table-borderless w-100 table-responsive-sm">
                                    <tbody>
                                        <tr class="pb-2">
                                            <th style="width: 20%; text-align: left;" class="align-top">Nama Tentor</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="nama_tentor"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Mata Pelajaran</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="mapel_pengajuan"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Nama Peserta</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="nama_peserta"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Tanggal Pertemuan</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="tanggal_pertemuan"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Kehadiran</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="kehadiran"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless w-100 table-responsive-sm mt-3">
                                    <tbody>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Rating</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="rating"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Ulasan</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="ulasan"></div>
                                            </td>
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
<script>
    //halaman
    const halaman_jadwal = $('#halaman_jadwal');
    const halaman_detail_jadwal = $('#halaman_detail_jadwal');
    //tombol
    const btn_detail_jadwal = $('.btn-info');
    const btn_kembali = $('#btn_kembali');
    halaman_detail_jadwal.hide()
    //detail
    const detail_nama_tentor = $('.nama_tentor');
    const detail_mapel = $('.mapel_pengajuan');
    const detail_nama_peserta = $('.nama_peserta');
    const detail_tgl_pertemuan = $('.tanggal_pertemuan');
    const detail_kehadiran = $('.kehadiran');
    const detail_rating = $('.rating');
    const detail_ulasan = $('.ulasan');

    btn_kembali.click(() => {
        halaman_detail_jadwal.fadeOut(300, () => {
            halaman_jadwal.fadeIn(300)
        })
    })

    //untuk button info
    function info(baris) {
        halaman_jadwal.fadeOut(300, () => {
            halaman_detail_jadwal.fadeIn(300)
        })

        fill_form(baris.children)
    }

    function fill_form(data) {
        detail_nama_tentor.text(data[2].textContent);
        detail_mapel.text(data[1].textContent);
        detail_nama_peserta.text(data[3].textContent);
        detail_tgl_pertemuan.text(data[5].textContent);
        detail_kehadiran.text(data[7].textContent);
        detail_rating.html(data[4].innerHTML);
        detail_ulasan.text(data[6].textContent);
    }
</script>