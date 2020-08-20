<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Mata Pelajaran</h1>
                <button class="btn btn-primary shadow-sm" id="btn_tambah" onclick="tambah()"><i class="fas fa-plus fa-sm text-white"></i> Tambah Data</button>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th style="width: 1%;">#</th>
                                <th>Kategori</th>
                                <th>Nama Mata Pelajaran</th>
                                <th style="width: 15%;">Biaya</th>
                                <th style="width: 18%">Biaya Pendaftaran</th>
                                <th hidden>deskripsi</th>
                                <th hidden>id_les</th>
                                <th hidden>harga_non_format</th>
                                <th hidden>biaya_non_format</th>
                                <th style="width: 8%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($les as $u) : ?>
                                <tr>
                                    <td class="text-center"><?= $i ?></td>
                                    <td><?= ucfirst($u['kategori']) ?></td>
                                    <td><?= $u['nama'] ?></td>
                                    <td class="text-right"><?= number_to_currency($u['harga'], "IDR", "ID") ?></td>
                                    <td class="text-right"><?= number_to_currency($u['biaya_daftar'], "IDR", "ID") ?></td>
                                    <td hidden><?= $u['deskripsi'] ?></td>
                                    <td hidden><?= $u['id_les'] ?></td>
                                    <td hidden><?= $u['harga'] ?></td>
                                    <td hidden><?= $u['biaya_daftar'] ?></td>
                                    <td>
                                        <center>
                                            <button class="btn btn-info btn-sm btn_info" onclick="info(parentElement.parentElement.parentElement)">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button class="btn btn-secondary btn-sm btn_edit" onclick="edit(parentElement.parentElement.parentElement)">
                                                <i class="far fa-edit"></i>
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
                        <button class="btn btn-danger" id="btn_hapus"><i class="fas fa-trash-alt"></i> Hapus Data</button>
                        <button class="btn btn-primary" id="btn_simpan" type="submit" name="simpan"><i class="fas fa-save"></i> Simpan Data</button>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="col-11">
                    <div class="form-group row ju">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kategori" name="kategori" required disabled>
                                <option selected disabled value="">-- Pilih Salah Satu --</option>
                                <option value="praktek">Praktek</option>
                                <option value="teori">Teori</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mapel" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" id="mapel" placeholder="Masukkan Mata Pelajaran" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga" id='harga' placeholder="Masukkan Harga" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Biaya Daftar</label>
                        <div class="col-sm-10">
                            <input type="number" name="biaya_daftar" id='biaya_daftar' placeholder="Biaya Pendaftaran" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" name="deskripsi" id='deskripsi' placeholder="Masukkan deskripsi" class="form-control" disabled>
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
    const btn_tambah = $('#btn_tambah');
    const btn_hapus = $('#btn_hapus');
    const detail_kategori = $('#kategori');
    const detail_mapel = $('#mapel');
    const detail_harga = $('#harga');
    const detail_biaya = $('#biaya_daftar');
    const detail_desk = $('#deskripsi');
    const rest_method = $("#rest_method")
    const form_submit = $('#form_submit');


    detail.hide()


    btn_kembali.click(() => {
        detail.fadeOut(300, () => {
            halaman.fadeIn(300)
        })
        reset_form();
    })

    //untuk button info
    function tambah(baris) {
        btn_simpan.show()
        btn_hapus.hide()
        halaman.fadeToggle(300, () => {
            detail.fadeToggle(300)
        })
        rest_method.val('POST')

        toggle_form(false)
    }

    //untuk button info
    function info(baris) {
        btn_simpan.hide()
        btn_hapus.show()
        halaman.fadeToggle(300, () => {
            detail.fadeToggle(300)
        })
        rest_method.val('DELETE')

        fill_form(baris.children)
        form_submit.prop('action', `/data/les/${baris.children[6].textContent}`)
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
        form_submit.prop('action', `/data/les/${baris.children[6].textContent}`)
        toggle_form(false)
    }

    function toggle_form(isHide) {
        detail_kategori.prop('disabled', isHide);
        detail_mapel.prop('disabled', isHide);
        detail_harga.prop('disabled', isHide);
        detail_biaya.prop('disabled', isHide);
        detail_desk.prop('disabled', isHide);
    }

    function fill_form(data) {
        detail_kategori.val(data[1].textContent.toLowerCase());
        detail_mapel.val(data[2].textContent);
        detail_harga.val(data[7].textContent);
        detail_biaya.val(data[8].textContent);
        detail_desk.val(data[5].textContent);
    }

    function reset_form() {
        detail_kategori.val('');
        detail_mapel.val('');
        detail_harga.val('');
        detail_biaya.val('');
        detail_desk.val('');
        form_submit.prop('action', '/data/les/')
    }
</script>