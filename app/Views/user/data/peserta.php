<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Peserta</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th hidden></th>
                                <th hidden></th>
                                <th hidden></th>
                                <th hidden></th>
                                <th hidden></th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($user as $u) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $u['nama'] ?></td>
                                    <td><?= $u['username'] ?></td>
                                    <td><?= $u['email'] ?></td>
                                    <td><?= $u['jk'] ?></td>
                                    <td hidden><?= $u['tempat_lahir'] ?></td>
                                    <td hidden><?= $u['tgl_lahir'] ?></td>
                                    <td hidden><?= $u['alamat'] ?></td>
                                    <td hidden><?= $u['telp'] ?></td>
                                    <td hidden><?= $u['foto'] ?></td>
                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-info btn-sm btn_info" onclick="info(parentElement.parentElement.parentElement)">
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
                    <button class="btn btn-danger mr-2" id="btn_reset_password"><i class="fas fa-key"></i> Reset Password</button>

                    <button class="btn btn-primary" id="btn_simpan"><i class="fas fa-save"></i> Simpan Data</button>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-3">
                    <center>
                        <img id="foto" class="rounded" style="max-width: 200px; max-height: 250px; " src="/img/images.png" alt="Profile Picture">
                    </center>
                </div>
                <div class="col-9">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" id='nama' placeholder="Masukkan Nama" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" id='username' placeholder="Masukkan Username" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" id='email' placeholder="email@email.com" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" id='tempat_lahir' placeholder="Masukkan Tempat Lahir" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="" min="1970-01-01" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required disabled>
                                <option selected value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" id="alamat" style="width: 100%;  height: 5rem; resize: none;" placeholder="isi data" class="form-control" required disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_telp" id='no_telp' placeholder="Masukkan No Telp" class="form-control" required disabled>
                        </div>
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
    const btn_hapus = $('#btn_hapus');
    const btn_reset_password = $('#btn_reset_password');
    const detail_nama = $('#nama');
    const detail_username = $('#username');
    const detail_email = $('#email');
    const detail_tempat_lahir = $('#tempat_lahir');
    const detail_tanggal_lahir = $('#tanggal_lahir');
    const detail_jenis_kelamin = $('#jenis_kelamin');
    const detail_alamat = $('#alamat');
    const detail_no_telp = $('#no_telp');
    const detail_foto = $('#foto');

    detail.hide()


    btn_kembali.click(() => {
        halaman.show()
        detail.hide()
    })

    //untuk button info
    function info(baris) {
        halaman.hide()
        btn_simpan.hide()
        btn_hapus.show()
        btn_reset_password.hide()
        detail.show()

        fill_form(baris.children)
        toggle_form(true)
    }

    // untuk button edit
    function edit(baris) {
        btn_hapus.hide()
        btn_simpan.show()
        btn_reset_password.show()
        halaman.hide()
        detail.show()

        fill_form(baris.children)
        toggle_form(false)
    }

    function toggle_form(isHide) {
        detail_nama.prop('disabled', isHide);
        detail_username.prop('disabled', isHide);
        detail_email.prop('disabled', isHide);
        detail_tempat_lahir.prop('disabled', isHide);
        detail_tanggal_lahir.prop('disabled', isHide);
        detail_jenis_kelamin.prop('disabled', isHide);
        detail_alamat.prop('disabled', isHide);
        detail_no_telp.prop('disabled', isHide);
    }

    function fill_form(data) {
        detail_nama.val(data[1].textContent);
        detail_username.val(data[2].textContent);
        detail_email.val(data[3].textContent);
        detail_jenis_kelamin.val(data[4].textContent);
        detail_tempat_lahir.val(data[5].textContent);
        detail_tanggal_lahir.val(data[6].textContent);
        detail_alamat.val(data[7].textContent);
        detail_no_telp.val(data[9].textContent);
        detail_foto.val(data[10].textContent);
    }
</script>