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
                                <th>Les</th>
                                <th>Tentor</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th hidden>Deskripsi</th>
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
                                    <td>
                                        <!-- <?= $p->aktif ?> -->
                                        <center>
                                            <div class="rounded-circle text-center text-white bg-success btn btn-sm">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            <div class="rounded-circle text-center text-white bg-warning btn btn-sm" hidden>
                                                <i class="fas fa-spinner"></i>
                                            </div>
                                            <div class="rounded-circle text-center text-white bg-danger btn btn-sm" hidden>
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </center>
                                    </td>
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
                                    <div class="col-sm-4">
                                        <center>
                                            <img id="foto" class="rounded" style="max-width: 200px; max-height: 250px; " src="/img/images.png" alt="Profile Picture">
                                        </center>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-4 col-form-label font-weight-bolder">Nama Tentor</label>
                                            <label for="nama" class="col-sm-7 col-form-label">Budi Cahyono</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label font-weight-bolder">Mata Pelajaran</label>
                                            <label for="email" class="col-sm-7 col-form-label"> Fisika</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tempat_lahir" class="col-sm-4 col-form-label font-weight-bolder">Hari Mengajar</label>
                                            <label for="tempat_lahir" class="col-sm-7 col-form-label float-left"> Senin, Selasa, Rabu</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tanggal_lahir" class="col-sm-4 col-form-label font-weight-bolder">Jam Mengajar</label>
                                            <label for="tanggal_lahir" class="col-sm-7 col-form-label">14.00 - 16.00</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_kelamin" class="col-sm-4 col-form-label font-weight-bolder">Deskripsi</label>
                                            <label for="jenis_kelamin" class="col-sm-7 col-form-label">Fisika Kelas 1 untuk SMA</label>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <label for="alamat" class="col-sm-4 col-form-label font-weight-bolder">Kode</label>
                                            <label for="alamat" class="col-sm-7 col-form-label text-uppercase">xg12g1hgvvj2</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-4 col-form-label font-weight-bolder">Status</label>
                                            <label for="no_telp" class="col-sm-7 col-form-label">Pending</label>
                                        </div>
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

    detail.hide()

    btn_kembali.click(() => {
        detail.fadeOut(300, () => {
            halaman.fadeIn(300)
        })
    })

    //untuk button info
    function info(baris) {
        btn_simpan.hide()
        btn_hapus.show()
        halaman.fadeToggle(300, () => {
            detail.fadeToggle(300)
        })
        rest_method.val('DELETE')

        fill_form(baris.children)
        form_submit.prop('action', `/data/pengajuan/${baris.children[5].textContent}`)
        toggle_form(true)
    }

    //untuk button info
    function edit(baris) {
        btn_simpan.show()
        btn_hapus.hide()
        halaman.fadeToggle(300, () => {
            detail.fadeToggle(300)
        })
        rest_method.val('PUT')

        fill_form(baris.children)
        form_submit.prop('action', `/data/pengajuan/${baris.children[5].textContent}`)
        toggle_form(false)
    }

    function toggle_form(isHide) {
        // detail_kategori.prop('disabled', isHide);
        // detail_mapel.prop('disabled', isHide);
        // detail_harga.prop('disabled', isHide);
        // detail_desk.prop('disabled', isHide);
    }

    function fill_form(data) {
        // detail_kategori.val(data[1].textContent.toLowerCase());
        // detail_mapel.val(data[2].textContent);
        // detail_harga.val(data[3].textContent);
        // detail_desk.val(data[4].textContent);
    }

    function reset_form() {
        // detail_kategori.val('praktek');
        // detail_mapel.val('');
        // detail_harga.val('');
        // detail_desk.val('');
    }
</script>