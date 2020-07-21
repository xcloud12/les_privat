<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="mapel_tentor">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Daftar Mata Pelajaran</h1>
                <button class="btn bg-gradient-primary btn-sm text-white" id="btn_tambah_jadwal"><i class="fas fa-plus fa-sm text-white"></i> Tambah Jadwal Baru</button>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="#" id="btn_mapel_ajaran" class="text-decoration-none">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-secondary text-uppercase mb-2">Matematika (Teori)</div>
                                        <div class=" mb-0 font-weight-normal text-gray-800"><span class="badge badge-pill badge-primary pt-1 pb-1">Day</span></div>
                                        <div class="font-weight-light text-secondary mt-2">Rp. 200.000,-</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle fa-2x text-primary"></i>
                                        <i class="fas fa-history fa-2x text-primary" hidden></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="container-fluid" id="form_pemilihan">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <button class="btn btn-secondary" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            </div>
            <div>
                <h1 class="h3 mb-0 text-gray-800">Daftar Mata Pelajaran</h1>
            </div>

            <!-- Content Row -->
            <div class="col-9">
                <form action="">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label font-weight-normal">Kategori Mata Pelajaran </label>
                        <div class="col-sm-8">
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="Praktek">Praktek</option>
                                <option value="Teori">Teori</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-xl-4 col-md-6 mb-4">
                                <a href="#" id="pilih_mapel" class="text-decoration-none text-gray-800">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="font-weight-bold text-uppercase text-black">Judul Mata Pelajaran</div>
                                                    <div class=" mt-1 text-gray-800 small">Isi deskribsi</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid" id="form_pengajuan">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="justify-content-start">
                    <button class="btn btn-secondary mb-2" id="btn_kembali_pengajuan"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
                    <button class="btn btn-secondary mb-2" id="btn_kembali_edit_mapel"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
                    <h1 class="h3 mb-0 text-gray-800" id="judul_pengajuan">Form Pengajuan</h1>
                    <h1 class="h3 mb-0 text-gray-800" id="judul_mapel">Data Mengajar</h1>
                    <h1 class="h3 mb-0 text-gray-800" id="judul_edit_mapel">Ubah Data Mengajar</h1>
                </div>
                <div class=" justify-content-end">
                    <button class="btn btn-secondary" id="btn_ubah"><i class="far fa-edit fa-sm text-white"></i> Ubah Data </button>
                    <button class="btn btn-secondary" id="btn_simpan_perubahan"><i class="fas fa-plus fa-sm text-white"></i> Simpan Perubahan </button>
                    <button class="btn btn-secondary" id="btn_ajukan"><i class="fas fa-plus fa-sm text-white"></i> Ajukan Pengajaran </button>
                    <button class="btn btn-secondary" id="btn_batal"><i class="fas fa-times fa-sm text-white"></i> Batal</button>
                </div>
            </div>
            <!-- Content Row -->
            <div class="col-11">
                <form action="">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Mata Pelajaran</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='nama_mapel' placeholder="Nama Mata Pelajaran" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari Kerja</label>
                        <div class="col-sm-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Senin" value="Senin" disabled>
                                <label class="form-check-label" for="Senin"> Senin</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Selasa" value="Selasa" disabled>
                                <label class="form-check-label" for="Selasa">Selasa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Rabu" value="Rabu" disabled>
                                <label class="form-check-label" for="Rabu">Rabu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Kamis" value="Kamis" disabled>
                                <label class="form-check-label" for="Kamis">Kamis</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Jumat" value="Jumat" disabled>
                                <label class="form-check-label" for="Jumat"> Jum'at</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Sabtu" value="Sabtu" disabled>
                                <label class="form-check-label" for="Sabtu">Sabtu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Minggu" value="Minggu" disabled>
                                <label class="form-check-label" for="Minggu">Minggu</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jam_kerja" class="col-sm-3 col-form-label">Jam Kerja</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="jam" name="jam" required disabled>
                                <option disabled selected>-- Pilih Salah Satu --</option>
                                <option value="08.00 - 10.00">08.00 - 10.00</option>
                                <option value="09.00 - 11.00">09.00 - 11.00</option>
                                <option value="10.00 - 12.00">10.00 - 12.00</option>
                                <option value="11.00 - 13.00">11.00 - 13.00</option>
                                <option value="12.00 - 14.00">12.00 - 14.00</option>
                                <option value="13.00 - 15.00">13.00 - 15.00</option>
                                <option value="14.00 - 16.00">14.00 - 16.00</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" name="deskripsi" id='deskripsi' placeholder="Masukkan Keterangan" class="form-control" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const mapel_tentor = $('#mapel_tentor');
    const form_pemilihah = $('#form_pemilihan');
    const form_pengajuan = $('#form_pengajuan');
    const btn_tambah_jadwal = $('#btn_tambah_jadwal');
    const btn_kembali = $('#btn_kembali');
    const btn_kembali_pengajuan = $('#btn_kembali_pengajuan');
    const btn_kembali_edit_mapel = $('#btn_kembali_edit_mapel');
    const btn_batal = $('#btn_batal');
    const btn_ubah = $('#btn_ubah');
    const btn_simpan_perubahan = $('#btn_simpan_perubahan');
    const btn_ajukan = $('#btn_ajukan');
    const btn_mapel_ajaran = $('#btn_mapel_ajaran');
    const pilih_mapel = $('#pilih_mapel');

    //judul form
    const judul_form_pengajuan = $('#judul_pengajuan');
    const judul_form_edit_mapel = $('#judul_edit_mapel');
    const judul_form_mapel = $('#judul_mapel');

    //atribut form
    const form_nama_mapel = $('#nama_mapel');
    const form_hari = $('input.form-check-input');
    const form_jam = $('#jam');
    const form_keterangan = $('#deskripsi');

    form_pemilihah.hide()
    form_pengajuan.hide()
    //halaman mapel
    btn_tambah_jadwal.click(() => {
        form_pengajuan.hide()
        mapel_tentor.fadeOut(300, () => {
            form_pemilihah.fadeIn(300)
        })
    })
    btn_mapel_ajaran.click(() => {
        btn_ajukan.hide()
        btn_kembali_pengajuan.hide()
        btn_kembali_edit_mapel.show()
        btn_batal.hide()
        btn_simpan_perubahan.hide()
        btn_ubah.show()
        form_pemilihah.hide()
        mapel_tentor.fadeOut(300, () => {
            form_pengajuan.fadeIn(300)
        })

        judul_form_edit_mapel.hide()
        judul_form_pengajuan.hide()
        judul_form_mapel.show()
    })
    btn_kembali_pengajuan.click(() => {
        btn_kembali_pengajuan.hide()
        btn_kembali_edit_mapel.show()
        btn_simpan_perubahan.hide()
        btn_ubah.show()
        form_pemilihah.hide()
        mapel_tentor.hide()
        toggle_form(true)

        judul_form_edit_mapel.hide()
        judul_form_pengajuan.hide()
        judul_form_mapel.show()
    })
    btn_kembali_edit_mapel.click(() => {
        form_pemilihah.hide()
        form_pengajuan.fadeOut(300, () => {
            mapel_tentor.fadeIn(300)
        })
    })

    //untuk mengedit data
    btn_ubah.click(() => {
        btn_ajukan.hide()
        btn_simpan_perubahan.show()
        btn_kembali_pengajuan.show()
        btn_kembali_edit_mapel.hide()
        btn_ubah.hide()
        btn_batal.hide()
        form_pemilihah.hide()
        toggle_form(false)
        form_nama_mapel.prop('disabled', true);

        judul_form_edit_mapel.show()
        judul_form_pengajuan.hide()
        judul_form_mapel.hide()
    })
    //form pemilihan
    btn_kembali.click(() => {
        btn_simpan_perubahan.hide()
        btn_kembali_pengajuan.hide()
        form_pengajuan.hide()
        form_pemilihah.fadeOut(300, () => {
            mapel_tentor.fadeIn(300)
        })
    })
    //form pengajuan
    pilih_mapel.click(() => {
        btn_ajukan.show()
        btn_simpan_perubahan.hide()
        btn_ubah.hide()
        btn_kembali_pengajuan.hide()
        btn_kembali_edit_mapel.hide()
        btn_batal.show()
        mapel_tentor.hide()
        form_pemilihah.fadeOut(300, () => {
            form_pengajuan.fadeIn(300)
        })
        toggle_form(false)
        form_nama_mapel.prop('disabled', true);

        judul_form_edit_mapel.hide()
        judul_form_pengajuan.show()
        judul_form_mapel.hide()
    })
    btn_batal.click(() => {
        mapel_tentor.hide()
        form_pengajuan.fadeOut(300, () => {
            form_pemilihah.fadeIn(300)
        })
    })

    function toggle_form(isHide) {
        form_nama_mapel.prop('disabled', isHide);
        form_hari.prop('disabled', isHide);
        form_jam.prop('disabled', isHide);
        form_keterangan.prop('disabled', isHide);
    }

    //limit checkbox hari
    // form_hari.change(function() {
    //     var max = 3;
    //     if ($("input.form-check-input:checked").length == max) {
    //         $("input.form-check-input").attr('disabled', 'disabled');
    //         $("input.form-check-input:checked").removeAttr('disabled');
    //     } else {
    //         $("input.form-check-input").removeAttr('disabled');
    //     }
    // })
</script>