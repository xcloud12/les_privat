<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class=" container-fluid" id="halaman_awal">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Diri Saya</h1>
                <div class="d-sm-flex justify-content-end">
                    <button class="btn btn-secondary mt-1 mr-2" id="btn_ubah_profil"><i class="fas fa-edit"></i> Ubah Data Diri</button>
                    <button class="btn btn-secondary mt-1" id="btn_ubah_pass"><i class="fas fa-edit"></i> Ubah Kata Sandi</button>
                </div>
            </div>
            <!-- Content Row -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutter justify-content-between">
                                <div class="col-4">
                                    <center>
                                        <img id="foto" class="rounded" style="max-width: 200px; max-height: 250px; " src="/img/images.png" alt="Profile Picture">
                                    </center>
                                </div>
                                <div class="col-8">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label font-weight-bolder">Nama</label>
                                        <label for="nama" class="col-sm-8 col-form-label">: Isian nama peserta</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label font-weight-bolder">Email</label>
                                        <label for="email" class="col-sm-8 col-form-label">: isian email</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_lahir" class="col-sm-4 col-form-label font-weight-bolder">Tempat lahir</label>
                                        <label for="tempat_lahir" class="col-sm-8 col-form-label">: isian Tempat lahir</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_lahir" class="col-sm-4 col-form-label font-weight-bolder">Tanggal lahir</label>
                                        <label for="tanggal_lahir" class="col-sm-8 col-form-label">: isian Tanggal lahir</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-sm-4 col-form-label font-weight-bolder">Jenis Kelamin</label>
                                        <label for="jenis_kelamin" class="col-sm-8 col-form-label">: isian Jenis Kelamin</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-4 col-form-label font-weight-bolder">Alamat</label>
                                        <label for="alamat" class="col-sm-8 col-form-label">: isian Alamat</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_telp" class="col-sm-4 col-form-label font-weight-bolder">No Telp</label>
                                        <label for="no_telp" class="col-sm-8 col-form-label">: isian No Telp</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid" id="edit">
            <!-- Page Heading -->
            <form action="#" id="form_submit">
                <!-- <input type="hidden" name="_method" id='rest_method' value="PUT" /> -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 ubah_data_diri">Ubah Data Diri</h1>
                    <h1 class="h3 mb-0 text-gray-800 ubah_pass">Ubah Kata Sandi</h1>
                    <div class="d-sm-flex justify-content-end">
                        <button class="btn btn-secondary mr-2" id="btn_simpan" type="submit" name="simpan"><i class="fas fa-save"></i> Simpan Data</button>
                        <button class="btn btn-secondary" id="btn_batal" type="button" name="batal"><i class="fas fa-times"></i> Batal</button>
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
                        <div class="form-group row nama">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id='nama' placeholder="Masukkan Nama" class="form-control" required disabled>
                            </div>
                        </div>
                        <div class="form-group row pass_lama" hidden>
                            <label for="password" class="col-sm-2 col-form-label">Password Lama</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" id='password_lama' placeholder="Masukkan password lama" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row pass_baru" hidden>
                            <label for="password" class="col-sm-2 col-form-label">Password baru</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" id='password_baru' placeholder="Masukkan password baru" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group row ">
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
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" onfocus="(this.type='date')" min="1930-01-01" required disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required disabled>
                                    <option disabled selected>-- Pilih Salah Satu --</option>
                                    <option value="L">Laki Laki</option>
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
            </form>
        </div>
    </div>
</div>

<script>
    //pages
    const halaman_awal = $('#halaman_awal');
    const halaman_edit = $('#edit');

    //judul
    const judul_ubah_data_diri = $('.ubah_data_diri');
    const judul_ubah_pass = $('.ubah_pass');

    //tombol
    const btn_ubah_profil = $('#btn_ubah_profil');
    const btn_ubah_pass = $('#btn_ubah_pass');
    const btn_simpan = $('#btn_simpan');
    const btn_batal = $('#btn_batal');

    //form
    const form_nama = $('#nama');
    const form_email = $('#email');
    const form_password_lama = $('#password_lama');
    const form_password_baru = $('#password_baru');
    const form_tempat_lahir = $('#tempat_lahir');
    const form_tanggal_lahir = $('#tanggal_lahir');
    const form_jenis_kelamin = $('#jenis_kelamin');
    const form_alamat = $('#alamat');
    const form_no_telp = $('#no_telp');
    const form_foto = $('#foto');

    //form control dan form group
    const form_pass_lama = $('.pass_lama');
    const form_pass_baru = $('.pass_baru');
    const form_group = $('.form-group');
    const form_control = $('.form-control');
    const form_group_nama = $('.nama');

    // const rest_method = $("#rest_method")
    // const form_submit = $('#form_submit');

    halaman_edit.hide()

    btn_ubah_profil.click(() => {
        form_control.prop('disabled', false);
        judul_ubah_data_diri.show()
        judul_ubah_pass.hide()
        halaman_awal.fadeOut(300, () => {
            form_group.prop('hidden', false)
            form_nama.prop('disabled', false)
            form_email.prop('disabled', true)
            form_pass_lama.prop('hidden', true)
            form_pass_baru.prop('hidden', true)
            halaman_edit.fadeIn(300)
        })
    })

    btn_ubah_pass.click(() => {
        judul_ubah_data_diri.hide()
        judul_ubah_pass.show()
        halaman_awal.fadeOut(300, () => {
            form_control.prop('disabled', false);
            form_group.prop('hidden', true)
            form_group_nama.prop('hidden', false)
            form_nama.prop('disabled', true)
            form_pass_lama.prop('hidden', false)
            form_pass_baru.prop('hidden', false)
            halaman_edit.fadeIn(300)
        })
    })

    btn_batal.click(() => {
        halaman_edit.fadeOut(300, () => {
            form_group.prop('hidden', false)
            halaman_awal.fadeIn(300)
        })
    })


    // function fill_form(data) {
    //     detail_nama.val(data[1].textContent);
    //     detail_username.val(data[2].textContent);
    //     detail_email.val(data[3].textContent);
    //     detail_jenis_kelamin.val(data[4].textContent);
    //     detail_tempat_lahir.val(data[5].textContent);
    //     detail_tanggal_lahir.val(data[6].textContent);
    //     detail_alamat.val(data[7].textContent);
    //     detail_no_telp.val(data[8].textContent);
    //     detail_foto.val(data[9].textContent);
    // }
</script>