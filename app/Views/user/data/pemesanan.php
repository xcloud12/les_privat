<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content Jadwal-->
        <div class="container-fluid" id="halaman_pemesanan">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Pemesanan</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 1%; align-items: center;">#</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Nama Tentor</th>
                                <th>Nama Peserta</th>
                                <th>Tanggal Pemesanan</th>
                                <th class="text-center" style="width: 1%;">Status</th>
                                <th hidden>banyak pertemuan</th>
                                <th hidden>deskripsi</th>
                                <th hidden>harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($pemesanan as $p) : ?>
                                <tr>
                                    <td class="text-center"><?= $i ?></td>
                                    <td><?= $p->les ?></td>
                                    <td><?= $p->tentor ?></td>
                                    <td><?= $p->peserta ?></td>
                                    <td><?= strftime('%d %B %Y', strtotime($p->tgl_pesan)) ?></td>
                                    <td class="text-center">
                                        <?php
                                        if ($p->diterima === '1') : ?>
                                            <div class="rounded-circle text-center text-white bg-success btn btn-sm">
                                                <i class="fas fa-check-circle">
                                                    <label name="status" hidden>Diterima Untuk Diajar</label>
                                                </i>
                                            </div>
                                        <?php elseif ($p->diterima === '0') : ?>
                                            <div class="rounded-circle text-center text-white bg-danger btn btn-sm">
                                                <i class="fas fa-times-circle">
                                                    <label name="status" hidden>Ditolak Oleh Tentor</label>
                                                </i>
                                            </div>
                                        <?php else : ?>
                                            <div class="rounded-circle text-center text-white bg-warning btn btn-sm">
                                                <i class="fas fa-spinner">
                                                    <label name="status" hidden>Pemesanan Masih Ditangguhkan</label>
                                                </i>
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td hidden><?= $p->banyak_pertemuan ?> Pertemuan</td>
                                    <td hidden><?= $p->deskripsi_pemesanan ?></td>
                                    <td hidden><?= number_to_currency($p->harga, "IDR", "id") ?></td>
                                    <td style="width: 2%;">
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
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="halaman_detail_pemesanan">
            <!-- Page Heading -->
            <button class="btn btn-secondary mb-3" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Data Pemesanan</h1>
                <button class="btn btn-primary mb-3" id="btn_cetak" title="Print Data Pemesanan"><i class="fas fa-print fa-sm text-white"></i> Cetak Pemesanan</button>
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
                                            <th style="width: 20%; text-align: left;" class="align-top">Tanggal Pemesanan</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="tanggal_pemesanan"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Banyak Pertemuan</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="banyak_pertemuan"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Deskripsi</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="keterangan"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless w-100 table-responsive-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Status</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="status"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Harga</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="harga"></div>
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
</div>



<script>
    //halaman
    const halaman_pemesanan = $('#halaman_pemesanan');
    const halaman_detail_pemesanan = $('#halaman_detail_pemesanan');
    //tombol
    const btn_detail_pemesanan = $('.btn-info');
    const btn_kembali = $('#btn_kembali');
    //detail
    const detail_nama_tentor = $('.nama_tentor');
    const detail_mapel = $('.mapel_pengajuan');
    const detail_nama_peserta = $('.nama_peserta');
    const detail_tgl_pemesanan = $('.tanggal_pemesanan');
    const detail_pertemuan = $('.banyak_pertemuan');
    const detail_keterangan = $('.keterangan');
    const detail_status = $('.status');
    const detail_harga = $('.harga');

    halaman_detail_pemesanan.hide()

    btn_kembali.click(() => {
        halaman_detail_pemesanan.fadeOut(300, () => {
            halaman_pemesanan.fadeIn(300)
        })
    })

    //untuk button info
    function info(baris) {
        halaman_pemesanan.fadeOut(300, () => {
            halaman_detail_pemesanan.fadeIn(300)
        })

        fill_form(baris.children)
    }

    function fill_form(data) {
        detail_nama_tentor.html(data[2].textContent);
        detail_mapel.html(data[1].textContent);
        detail_nama_peserta.html(data[3].textContent);
        detail_tgl_pemesanan.html(data[4].textContent);
        detail_status.html(data[5].textContent);
        detail_pertemuan.html(data[6].textContent);
        detail_keterangan.html(data[7].textContent);
        detail_harga.html(data[8].textContent);
    }
</script>