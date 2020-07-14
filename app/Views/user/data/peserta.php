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
                                            <button type="button" class="btn btn-info btn-sm btn_info">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button class="btn btn-secondary btn-sm btn_edit">
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

                    <button class="btn btn-primary" id="btn_simpan"><i class="fas fa-plus"></i> Simpan Data</button>
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
    const halaman = document.getElementById('halaman');
    const detail = document.getElementById('detail');
    const btn_info = document.getElementsByClassName('btn_info');
    const btn_edit = document.getElementsByClassName('btn_edit');
    const btn_kembali = document.getElementById('btn_kembali');
    const btn_simpan = document.getElementById('btn_simpan');
    const btn_hapus = document.getElementById('btn_hapus');
    const btn_reset_password = document.getElementById('btn_reset_password');
    const detail_nama = document.getElementById('nama');
    const detail_username = document.getElementById('username');
    const detail_email = document.getElementById('email');
    const detail_tempat_lahir = document.getElementById('tempat_lahir');
    const detail_tanggal_lahir = document.getElementById('tanggal_lahir');
    const detail_jenis_kelamin = document.getElementById('jenis_kelamin');
    const detail_alamat = document.getElementById('alamat');
    const detail_no_telp = document.getElementById('no_telp');
    const detail_foto = document.getElementById('foto');

    detail.style.display = 'none'


    btn_kembali.addEventListener('click', () => {
        halaman.style.display = 'block'
        detail.style.display = 'none'
    })

    //untuk button info
    Array.from(btn_info).forEach((elm) => {
        elm.addEventListener('click', () => {
            halaman.style.display = 'none'
            btn_simpan.style.display = 'none'
            btn_hapus.style.display = 'block'
            btn_reset_password.style.display = 'none'
            detail.style.display = 'block'

            fill_form(elm.parentNode.parentNode.parentNode.children)
            // detail_nama.value = elm.parentNode.parentNode.parentNode
            // console.log(elm.parentNode.parentNode.parentNode);
            toggle_form(true)
        })
    })

    // untuk button edit
    Array.from(btn_edit).forEach((elm) => {
        elm.addEventListener('click', () => {
            btn_hapus.style.display = 'none'
            btn_simpan.style.display = 'block'
            btn_reset_password.style.display = 'block'
            halaman.style.display = 'none'
            detail.style.display = 'block'

            fill_form(elm.parentNode.parentNode.parentNode.children)
            toggle_form(false)
        })
    })

    function toggle_form(isHide) {
        detail_nama.disabled = isHide;
        detail_username.disabled = isHide;
        detail_email.disabled = isHide;
        detail_tempat_lahir.disabled = isHide;
        detail_tanggal_lahir.disabled = isHide;
        detail_jenis_kelamin.disabled = isHide;
        detail_alamat.disabled = isHide;
        detail_no_telp.disabled = isHide;
    }

    function fill_form(data) {
        detail_nama.value = data[1].textContent;
        detail_username.value = data[2].textContent;
        detail_email.value = data[3].textContent;
        detail_jenis_kelamin.value = data[4].textContent;
        detail_tempat_lahir.value = data[5].textContent;
        detail_tanggal_lahir.value = data[6].textContent;
        detail_alamat.value = data[7].textContent;
        detail_no_telp.value = data[9].textContent;
        detail_foto.value = data[10].textContent;
    }
</script>