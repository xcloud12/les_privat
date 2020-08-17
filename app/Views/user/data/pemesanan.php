<style>
    #halaman_detail_pemesanan{
        display: none;
    }
</style>
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
                    <table class="table table-bordered bgr table-hover" id="pemesanan" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th style="width: 1%; align-items: center;">#</th>
                                <th>Mata Pelajaran</th>
                                <th>Tentor</th>
                                <th>Peserta</th>
                                <th>Tanggal Pemesanan</th>
                                <th style="width: 1%;">Pembayaran</th>
                                <th style="width: 1%;">Diterima</th>
                                <th hidden>Banyak Pertemuan</th>
                                <th hidden>Deskripsi</th>
                                <th hidden>Harga Total</th>
                                <th hidden>id_pesanan</th>
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
                                    <td class="text-center" style="font-size: 1.5rem;">
                                        <?php if ($p->pembayaran === '1') : ?>
                                            <i class="fas fa-check-circle text-success"></i>
                                        <?php elseif ($p->pembayaran === '0') : ?>
                                            <i class="fas fa-times-circle text-warning"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center" style="font-size: 1.5rem;">
                                        <?php if ($p->diterima === '1') : ?>
                                            <i class="fas fa-check-circle text-success"></i>
                                        <?php elseif ($p->diterima === '0') : ?>
                                            <i class="fas fa-times-circle text-danger"></i>
                                        <?php else : ?>
                                            <i class="fas fa-spinner text-warning"></i>
                                        <?php endif; ?>
                                    </td>
                                    <td hidden><?= $p->banyak_pertemuan ?> Pertemuan</td>
                                    <td hidden><?= $p->deskripsi_pemesanan ?></td>
                                    <td hidden><?= number_to_currency($p->harga, "IDR", "id") ?></td>
                                    <td hidden><?= $p->id_pemesanan ?></td>
                                    <td style="width: 2%;">
                                        <center>
                                            <button type="button" class="btn btn-info btn-sm btn_info" onclick="info(parentElement.parentElement.parentElement)">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </center>
                                    </td>
                                </tr>
                            <?php $i++;
                            endforeach; ?>
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
                <div class="d-sm-flex align-items-center justify-content-end">
                    <form action="/data/pemesanan/" id="form_pesanan" method="POST">
                        <input type="hidden" name="_method" value="PUT" />
                        <button class="btn btn-primary mb-3" id="btn_cetak" title="Print Data Pemesanan" type="button"><i class="fas fa-print fa-sm text-white"></i> Cetak Pemesanan</button>
                        <button class="btn btn-success ml-3 mb-3" id="btn_konfir" title="Print Data Pemesanan" type="submit" name="bayar"><i class="fas fa-check fa-sm text-white"></i> Konfirmasi Pembayaran</button>
                    </form>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <table class="table table-borderless w-100 table-responsive-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 20%; text-align: left;" class="align-top">Mata Pelajaran</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="mapel_pengajuan"></div>
                                            </td>
                                        </tr>
                                        <tr class="pb-2">
                                            <th style="width: 20%; text-align: left;" class="align-top">Nama Tentor</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="nama_tentor"></div>
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
    const form_pesan = $("#form_pesanan");

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
        detail_pertemuan.html(data[7].textContent);
        detail_keterangan.html(data[8].textContent);
        detail_harga.html(data[9].textContent);
        form_pesan.attr('action', `/data/pemesanan/${data[10].textContent}`)
    }
</script>