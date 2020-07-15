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
                            <tr>
                                <th>#</th>
                                <th>Kategori</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Harga</th>
                                <th hidden></th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($les as $u) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $u['kategori'] ?></td>
                                    <td><?= $u['nama'] ?></td>
                                    <td><?= $u['harga'] ?></td>
                                    <td hidden><?= $u['deskripsi'] ?></td>
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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <button class="btn btn-secondary" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
                <div class="d-sm-flex justify-content-end">
                    <button class="btn btn-danger" id="btn_hapus"><i class="fas fa-trash-alt"></i> Hapus Data</button>
                    <button class="btn btn-primary" id="btn_simpan"><i class="fas fa-plus"></i> Simpan Data</button>
                </div>
            </div>

            <!-- Content Row -->

            <div class="col-9">
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="kategori" name="kategori" required disabled>
                            <option value="praktek">Praktek</option>
                            <option value="teori">Teori</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mapel" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                    <div class="col-sm-10">
                        <input type="text" name="mapel" id="mapel" placeholder="Masukkan Mata Pelajaran" class="form-control" required disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" id='harga' placeholder="Masukkan Harga" class="form-control" required disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskribsi" class="col-sm-2 col-form-label">Deskribsi</label>
                    <div class="col-sm-10">
                        <input type="text" name="deskribsi" id='deskribsi' placeholder="Masukkan Deskribsi" class="form-control" required disabled>
                    </div>
                </div>
            </div>
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
    const detail_desk = $('#deskribsi');

    detail.hide()


    btn_kembali.click(() => {
        halaman.show()
        detail.hide()
    })

    //untuk button info
    function tambah(baris) {
        halaman.hide()
        btn_simpan.show()
        btn_hapus.hide()
        detail.show()

        toggle_form(false)
        reset_form()
    }

    //untuk button info
    function info(baris) {
        halaman.hide()
        btn_simpan.hide()
        btn_hapus.show()
        detail.show()

        fill_form(baris.children)
        toggle_form(true)
    }

    //untuk button info
    function edit(baris) {
        halaman.hide()
        btn_simpan.hide()
        btn_hapus.show()
        detail.show()

        fill_form(baris.children)
        toggle_form(false)
    }

    function toggle_form(isHide) {
        detail_kategori.prop('disabled', isHide);
        detail_mapel.prop('disabled', isHide);
        detail_harga.prop('disabled', isHide);
        detail_desk.prop('disabled', isHide);
    }

    function fill_form(data) {
        detail_kategori.val(data[1].textContent);
        detail_mapel.val(data[2].textContent);
        detail_harga.val(data[3].textContent);
        detail_desk.val(data[4].textContent);
    }

    function reset_form() {
        detail_kategori.val('praktek');
        detail_mapel.val('');
        detail_harga.val('');
        detail_desk.val('');
    }
</script>