<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th style="width: 1%;">#</th>
                                <th>Kode</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Tentor</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th hidden>Deskripsi</th>
                                <th hidden>foto</th>
                                <th style="width: 2%;">Status</th>
                                <th style="width: 2%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($pengajuan as $p) : ?>
                                <tr class="text-center">
                                    <td><?= $i ?></td>
                                    <td><?= $p->kode ?></td>
                                    <td><?= $p->les ?></td>
                                    <td><?= $p->tentor ?></td>
                                    <td>
                                        <?php
                                        foreach (explode(',', $p->hari) as $hari) : ?>
                                            <span class="badge badge-primary badge-pill"><?= ucfirst($hari) ?></span>
                                        <?php
                                        endforeach;
                                        ?>
                                    </td>
                                    <td><?= $p->jam_kerja ?></td>
                                    <td hidden><?= $p->deskripsi ?></td>
                                    <td class="text-center">
                                        <?php
                                        if ($p->aktif === '1') : ?>
                                            <div class="rounded-circle text-center text-white bg-success btn btn-sm">
                                                <i class="fas fa-check-circle">
                                                    <label name="status" hidden>Pengajuan Mengajar Diterima</label>
                                                </i>
                                            </div>
                                        <?php elseif ($p->aktif === '0') : ?>
                                            <div class="rounded-circle text-center text-white bg-danger btn btn-sm">
                                                <i class="fas fa-times-circle">
                                                    <label name="status" hidden>Pengajuan Mengajar Ditangguhkan</label>
                                                </i>
                                            </div>
                                        <?php else : ?>
                                            <input type="hidden" name="status" value="Anjay"></input>
                                            <div class="rounded-circle text-center text-white bg-warning btn btn-sm">
                                                <i class="fas fa-spinner">
                                                    <label name="status" hidden>Pengajuan Mengajar Menunggu Persetujuan</label>
                                                </i>
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td hidden><?= $p->tentor_foto ?></td>
                                    <td>
                                        <center>
                                            <button class="btn btn-info btn-sm btn_info" onclick="info(parentElement.parentElement.parentElement)">
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
        <div class="container-fluid" id="detail">
            <!-- Page Heading -->
            <form action="/data/les" method="post" id="form_submit">
                <input type="hidden" name="_method" id='rest_method' value="PUT" />
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a class="btn btn-secondary" id="btn_kembali" href="#"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</a>
                    <div class="d-sm-flex justify-content-end">
                        <button class="btn btn-primary" id="btn_terima"><i class="fas fas fa-check"></i> Terima</button>
                        <button class="btn btn-danger ml-2" id="btn_tolak"><i class="fas fa-times"></i> Tolak</button>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row justify-content-center align-content-start">
                    <div class="col-xl-10 col-sm-8 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutter">
                                    <div class="col-sm-3">
                                        <center>
                                            <img id="foto" class="rounded" style="max-width: 200px; max-height: 250px; " src="/img/images.png" alt="Profile Picture">
                                        </center>
                                    </div>
                                    <div class="col-sm-9">
                                        <table class="table table-borderless w-100 table-responsive-sm">
                                            <tbody>
                                                <tr class="pb-2">
                                                    <th style="width: 20%; text-align: left;" class="align-top">Nama Tentor</th>
                                                    <td class=" align-top" style="width: 60%; text-align: left;">
                                                        <div class="nama_tentor">

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 20%; text-align: left;" class="align-top">Mata Pelajaran</th>
                                                    <td class=" align-top" style="width: 60%; text-align: left;">
                                                        <div class="mapel_pengajuan"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 20%; text-align: left;" class="align-top">Hari Mengajar</th>
                                                    <td class=" align-top" style="width: 60%; text-align: left;">
                                                        <div class="hari_mengajar"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 20%; text-align: left;" class="align-top">Jam Mengajar</th>
                                                    <td class=" align-top" style="width: 60%; text-align: left;">
                                                        <div class="jam_mengajar"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 20%; text-align: left;" class="align-top">Keterangan</th>
                                                    <td class=" align-top" style="width: 60%; text-align: left;">
                                                        <div class="keterangan"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-borderless w-100 table-responsive-sm mt-5">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 20%; text-align: left;" class="align-top">Kode</th>
                                                    <td class=" align-top font-weight-bold" style="width: 60%; text-align: left;">
                                                        <div class="kode_pengajuan">
                                                            ASDSA5412453
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 20%; text-align: left;" class="align-top">Status</th>
                                                    <td class=" align-top" style="width: 60%; text-align: left;">
                                                        <div class="status_pengajuan">
                                                        </div>
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
            </form>
        </div>
    </div>
</div>

<script>
    const halaman = $('#halaman');
    const detail = $('#detail');
    const btn_info = $('.btn_info');
    const btn_edit = $('.btn_edit');
    const btn_kembali = $('#btn_kembali');
    const btn_simpan = $('#btn_simpan');
    const btn_hapus = $('#btn_hapus');
    const rest_method = $("#rest_method")
    const form_submit = $('#form_submit');

    //data info
    const detail_nama_tentor = $('.nama_tentor');
    const detail_mapel = $('.mapel_pengajuan');
    const detail_hari = $('.hari_mengajar');
    const detail_jam = $('.jam_mengajar');
    const detail_keterangan = $('.keterangan');
    const detail_kode = $('.kode_pengajuan');
    const detail_status = $('.status_pengajuan');
    const detail_foto = $('#foto');


    detail.hide()

    btn_kembali.click(() => {
        detail.fadeOut(300, () => {
            halaman.fadeIn(300)
        })
    })

    //untuk button info
    function info(baris) {
        // btn_simpan.hide()
        // btn_hapus.show()
        halaman.fadeToggle(300, () => {
            detail.fadeToggle(300)
        })
        // rest_method.val('DELETE')

        fill_form(baris.children)
        // form_submit.prop('action', `/data/pengajuan/${baris.children[5].textContent}`)
    }

    function fill_form(data) {
        detail_nama_tentor.html(data[3].textContent);
        detail_mapel.html(data[2].textContent);
        detail_hari.html(data[4].textContent);
        detail_jam.html(data[5].textContent);
        detail_keterangan.html(data[6].textContent);
        detail_kode.html(data[1].textContent);
        detail_status.html(data[7].textContent);
        detail_foto.attr("src", "/img/img_profil/" + data[8].textContent)
    }

    function reset_form() {
        // detail_kategori.val('praktek');
        // detail_mapel.val('');
        // detail_harga.val('');
        // detail_desk.val('');
    }
</script>