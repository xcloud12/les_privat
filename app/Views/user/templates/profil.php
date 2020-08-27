<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="detail">
            <!-- Page Heading -->
            <form action="<?= $form_aksi ?>" method="post" id="form_submit" enctype="multipart/form-data">
                <input type="hidden" name="_method" id='rest_method' value="PUT" />
                <div class="d-sm-flex flex-row justify-content-end align-items-center mb-4">
                    <button class="btn btn-danger mr-2" id="btn_ubah_sandi" data-toggle="modal" data-target="#ubahsandiModal" type="button" name="ubah_password"><i class="fas fa-key"></i> Ubah Kata Sandi</button>
                    <button class="btn btn-primary" id="btn_simpan" type="submit" name="simpan"><i class="fas fa-save"></i> Simpan Data</button>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg-3 pb-3">
                        <center>
                            <img id="foto" class="rounded" style="max-width: 200px; max-height: 250px; background-color: ; " src="<?php
                                                                                                                                    if ($foto === "/img/img_profil/") {
                                                                                                                                        echo $foto . 'npp.png';
                                                                                                                                    } else {
                                                                                                                                        echo $foto;
                                                                                                                                    }   ?>" alt="Profile Picture">
                            <input hidden type="file" id="foto_dialog" name="foto" accept="image/jpeg" onchange="set_img(this)">
                        </center>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id='nama' placeholder="Masukkan Nama" class="form-control" required value="<?= $nama ?>">
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
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" min="1970-01-01" data-date-format="dd/mm/yyyy" required value="<?= $tgl_lahir ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option <?php if ($jk == null) {
                                                echo 'selected';
                                            } ?> value="" disabled>-- Pilih Salah Satu --</option>
                                    <option <?php if ($jk == 'L') {
                                                echo 'selected';
                                            } ?> value="L">Laki Laki</option>
                                    <option <?php if ($jk == 'P') {
                                                echo 'selected';
                                            } ?> value="P">Perempuan</option>
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
                                <input type="number" name="no_telp" id='no_telp' placeholder="Masukkan No Telp" class="form-control" required value="<?= $telp ?>" onKeyPress="if(this.value.length==12) return false;">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal ubah password -->
<div class="modal fade" id="ubahsandiModal" tabindex="-1" role="dialog" aria-labelledby="ubahsandiModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <form action="/ubah_sandi" method="post">
            <input type="hidden" name="_method" id='rest_method' value="PUT" />
            <input type="hidden" name="_id" id='_id' value="<?= $id_user ?>" />
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bolder" id="exampleModalLabel">Ubah Kata Sandi</h5>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <table class="table table-borderless w-100 table-responsive-sm">
                            <tbody>
                                <tr>
                                    <th style="width: 32%; text-align: left;" class="align-top">Kata Sandi Lama</th>
                                    <td class=" align-top" style="width: 78%; text-align: left;">
                                        <input type="password" name="password_lama" id='password_lama' placeholder="Masukkan kata sandi lama" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 32%; text-align: left;" class="align-top">Kata Sandi Baru</th>
                                    <td class=" align-top" style="width: 78%; text-align: left;">
                                        <input type="password" name="password_baru" id='password_baru' placeholder="Masukkan kata sandi baru" class="form-control">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    const foto_img = $("#foto");
    const foto_dialog = $("#foto_dialog")

    foto_img.click(() => {
        foto_dialog.click();
    })

    function set_img(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader()

            reader.onload = (x) => {
                foto_img.attr('src', x.target.result)
            }

            reader.readAsDataURL(input.files[0])
        }
    }
</script>