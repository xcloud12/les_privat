<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="detail">
            <!-- Page Heading -->
            <form action="<?= $form_aksi ?>" method="post" id="form_submit">
                <input type="hidden" name="_method" id='rest_method' value="PUT" />
                <div class="d-sm-flex flex-row justify-content-end align-items-center mb-4">
                    <button class="btn btn-danger mr-2" id="btn_reset_password"><i class="fas fa-key"></i> Reset Password</button>
                    <button class="btn btn-primary" id="btn_simpan" type="submit" name="simpan"><i class="fas fa-save"></i> Simpan Data</button>
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
                                <input type="text" name="nama" id='nama' placeholder="Masukkan Nama" class="form-control" required value="<?= $nama ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" id='username' placeholder="Masukkan Username" class="form-control" required value="<?= $username ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" id='email' placeholder="email@email.com" class="form-control" required value="<?= $email ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" id='tempat_lahir' placeholder="Masukkan Tempat Lahir" class="form-control" required value="<?= $tempat_lahir ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" min="1970-01-01" required value="<?= $tgl_lahir ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required >
                                    <option <?php if ($jk=='L'){echo 'selected';} ?> value="L">Laki Laki</option>
                                    <option <?php if ($jk=='P'){echo 'selected';} ?> value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" id="alamat" style="width: 100%;  height: 5rem; resize: none;" placeholder="isi data" class="form-control" required><?= $alamat ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_telp" id='no_telp' placeholder="Masukkan No Telp" class="form-control" required value="<?= $telp ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>