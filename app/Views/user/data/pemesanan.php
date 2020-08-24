<style>
    /* #halaman_detail_pemesanan {
        display: none;
    } */

    /* @page {
        size: portrait;
        margin: 0;
        padding: 0;
    } */
    .hti {
        visibility: hidden;
        display: none;
    }

    .judul_tabel {
        display: none;
        visibility: hidden;
    }

    @media print {

        @page {
            size: A4;
            margin: 0;
            padding: 0;
        }

        .hti {
            width: 100% !important;
            height: 225px !important;
            margin-top: -95px !important;
            visibility: visible;
            display: inline-block;
        }

        .judul_tabel {
            display: contents;
            visibility: visible;
        }

        html,
        body {

            font-size: 18pt;
            padding: 0;
            margin: 0;
            box-shadow: none !important;
        }

        table {
            margin-top: -40px !important;
            border: none !important;
            width: initial;
            min-height: initial;
            background: url("/img/tentor.png");


        }

        .card {
            box-shadow: none !important;
            border: none !important;
        }

        #btn_kembali,
        #btn_cetak,
        #btn_konfir,
        .sidebar,
        #judul_detail,
        #debug-icon {
            display: none;
        }
    }
</style>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content Jadwal-->
        <div class="container-fluid halaman_pemesanan" id="halaman_pemesanan">
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
                                <th style="width: 1%;">Status</th>
                                <th hidden>Banyak Pertemuan</th>
                                <th hidden>Deskripsi</th>
                                <th hidden>Biaya Tota</th>
                                <th hidden>id_pesanan</th>
                                <th hidden>Biaya</th>
                                <th hidden>Pertemuan</th>
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
                                            <i class="fas fa-check-circle text-success">
                                                <label name="status" hidden>Sudah Melakukan Pembayaran</label>
                                            </i>
                                        <?php elseif ($p->pembayaran === '0') : ?>
                                            <i class="fas fa-times-circle text-danger">
                                                <label name="status" hidden>Belum Melakukan Pembayaran</label>
                                            </i>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center" style="font-size: 1.5rem;">
                                        <?php if ($p->diterima === '1') : ?>
                                            <i class="fas fa-check-circle text-success">
                                                <label name="status" hidden>Sudah Diterima Oleh Tentor</label>
                                            </i>
                                        <?php elseif ($p->diterima === '0') : ?>
                                            <i class="fas fa-times-circle text-danger">
                                                <label name="status" hidden>Ditolak Oleh Tentor</label>
                                            </i>
                                        <?php else : ?>
                                            <i class="fas fa-spinner text-warning">
                                                <label name="status" hidden>Masih Ditangguhkan</label>
                                            </i>
                                        <?php endif; ?>
                                    </td>
                                    <td hidden><?= $p->banyak_pertemuan ?> Pertemuan</td>
                                    <td hidden><?= $p->deskripsi_pemesanan ?></td>
                                    <td hidden><?= number_to_currency($p->total_bayar, "IDR", "id") ?></td>
                                    <td hidden><?= $p->id_pemesanan ?></td>
                                    <td hidden><?= $p->total_bayar ?></td>
                                    <td hidden><?= $p->banyak_pertemuan ?></td>
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
                <h1 class="h3 mb-0 text-gray-800" id="judul_detail">Detail Data Pemesanan</h1>
                <div class="d-sm-flex align-items-center justify-content-end">
                    <form action="/data/pemesanan/" id="form_pesanan" method="POST">
                        <input type="hidden" name="_method" value="PUT" />
                        <button class="btn btn-primary mb-3" id="btn_cetak" title="Print Data Pemesanan" type="button"><i class="fas fa-print fa-sm text-white"></i> Cetak Pemesanan</button>
                        <button class="btn btn-success ml-3 mb-3" id="btn_konfir" title="Print Data Pemesanan" type="submit" name="bayar"><i class="fas fa-check fa-sm text-white"></i> Konfirmasi Pembayaran</button>
                    </form>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row justify-content-center ">
                <div class="col-xl-8 col-md-6 mb-4 ">
                    <div class="card shadow h-100 py-2" id="cetak">
                        <img src="/img/header_print.png" class="w-100 hti" style="width: 100%; height: 165px;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <table class="table table-borderless w-100 table-responsive-sm">
                                    <tbody>
                                        <tr class="judul_tabel">
                                            <th style="width: 100%; text-align: center; font-size: 28pt;" class="align-top" colspan="2">Detail Pemesanan</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Mata Pelajaran</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="mapel_pengajuan"></div>
                                            </td>
                                        </tr>
                                        <tr class="pb-2">
                                            <th style="width: 40%; text-align: left;" class="align-top">Nama Tentor</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="nama_tentor"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Nama Peserta</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="nama_peserta"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Tanggal Pemesanan</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="tanggal_pemesanan"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Banyak Pertemuan</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="banyak_pertemuan"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Deskripsi</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="keterangan"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless w-100 table-responsive-sm mt-5">
                                    <tbody>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Status Pembayaran</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="status_pembayaran"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Status Diajar</th>
                                            <td class=" align-top" style="width: 60%; text-align: left;">
                                                <div class="status_diajar"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 40%; text-align: left;" class="align-top">Biaya Total</th>
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
    const detail_status_pembayaran = $('.status_pembayaran');
    const detail_status_diajar = $('.status_diajar');
    const detail_harga = $('.harga');
    const form_pesan = $("#form_pesanan");

    halaman_detail_pemesanan.hide()
    btn_kembali.click(() => {
        halaman_detail_pemesanan.fadeOut(300, () => {
            halaman_pemesanan.fadeIn(300)
        })
    })
    $('#btn_cetak').click(() => {
        // const print
        window.print();
        // $(".hti").prop('hidden', false)
        // $(".judul_tabel").prop('hidden', false)

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
        detail_status_pembayaran.html(data[5].textContent);
        detail_status_diajar.html(data[6].textContent);
        detail_pertemuan.html(data[7].textContent);
        detail_keterangan.html(data[8].textContent);
        detail_harga.html(data[9].textContent);
        form_pesan.attr('action', `/data/pemesanan/${data[10].textContent}`)
    }
</script>