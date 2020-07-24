<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman_data_les">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-2 text-gray-800">Data Les Saya</h1>
                <button class="btn bg-primary btn-sm text-white pr-2 pl-2" id="btn_tambah_les"><i class="fas fa-plus fa-sm text-white"></i> Ikut Les Baru</button>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="#" id="btn_detail_les" class="text-decoration-none">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-secondary mb-2">Nama Mata Pelajaran (Teori)</div>
                                        <div class="font-weight-normal text-secondary mb-0 mt-2 ">Nama tentor</div>
                                        <div class="font-weight-light text-secondary mt-0"> Deskripsi</div>
                                        <div class="font-weight-bold text-secondary mt-1"> status</div>
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
                <h1 class="h3 mb-2 text-gray-800 mt-3">Pendaftaran Les Baru</h1>
            </div>

            <!-- Content Row -->
            <div class="col-9 mt-4">
                <form action="">
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control bg-white small" placeholder="Masukkan Nama Mata Pelajaran">
                            <div class="input-group-append">
                                <button class="btn btn-primary">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-xl-5 col-md-6 mb-4 mt-3">
                                <a href="#" id="pilih_mapel" class="text-decoration-none text-gray-800">
                                    <div class="card shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-4">
                                                    <div class="font-weight-bold text-uppercase text-dark">Nama Mapel (kategori)</div>
                                                    <div class=" mt-2 text-gray-800">Nama Tentor</div>
                                                    <div class=" mb-0 font-weight-normal text-gray-800"><span class="badge badge-pill badge-primary">Day</span></div>
                                                    <div class=" mt-1 text-gray-800 font-weight-lighter">Deskripsi</div>
                                                </div>
                                                <div class="col-auto justify-content-center">
                                                    <div class=" mt-2 text-gray-800">Harga Les</div>
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
        <div class="container-fluid" id="form_pemesanan">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="justify-content-start">
                    <button class="btn btn-secondary mb-2" id="btn_kembali_pemesanan"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
                    <button class="btn btn-secondary mb-2" id="btn_kembali_edit_mapel"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
                    <h1 class="h3 mb-2 text-gray-800 mt-3" id="judul_pengajuan">Form Pemesanan</h1>
                    <h1 class="h3 mb-2 text-gray-800 mt-3" id="judul_mapel">Data Les Saya</h1>
                    <h1 class="h3 mb-2 text-gray-800 mt-3" id="judul_edit_mapel">Ubah Data Les</h1>
                </div>
                <div class=" justify-content-end">
                    <button class="btn btn-secondary" id="btn_ubah"><i class="far fa-edit fa-sm text-white"></i> Ubah Data </button>
                    <button class="btn btn-secondary" id="btn_simpan_perubahan"><i class="fas fa-plus fa-sm text-white"></i> Simpan Perubahan </button>
                    <button class="btn btn-secondary" id="btn_pesan"><i class="fas fa-plus fa-sm text-white"></i> Pesan Les </button>
                    <button class="btn btn-secondary" id="btn_batal"><i class="fas fa-times fa-sm text-white"></i> Batal</button>
                </div>
            </div>
            <!-- Content Row -->
            <div class="col-11">
                <form action="">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Tentor</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='nama_tentor' placeholder="Nama tentor" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Mata Pelajaran</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='nama_mapel' placeholder="Nama Mata Pelajaran" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Hari Mengajar</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='hari_mengajar' placeholder="Hari Mengajar Tentor" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Tanggal Pemesanan</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='tanggal_pemesanan' placeholder="Masukkan Tanggal Pemesanan" onfocus="(this.type='date')" class=" form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Banyak Pertemuan</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='banyak_pertemuan' placeholder="Banyak Pertemuan" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='deskripsi_peserta' placeholder="Keterangan peserta" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row pt-5">
                        <label for="nama" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input type="number" name="nama" id='harga_les' placeholder="Harga" class="form-control" required disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const halaman_data_les = $('#halaman_data_les');
    const form_pemilihah = $('#form_pemilihan');
    const form_pemesanan = $('#form_pemesanan');
    const btn_tambah_les = $('#btn_tambah_les');
    const btn_kembali = $('#btn_kembali');
    const btn_kembali_pemesanan = $('#btn_kembali_pemesanan');
    const btn_kembali_edit_mapel = $('#btn_kembali_edit_mapel');
    const btn_batal = $('#btn_batal');
    const btn_ubah = $('#btn_ubah');
    const btn_simpan_perubahan = $('#btn_simpan_perubahan');
    const btn_pesan = $('#btn_pesan');
    const btn_detail_les = $('#btn_detail_les');
    const pilih_mapel = $('#pilih_mapel');

    //judul form
    const judul_form_pemesanan = $('#judul_pengajuan');
    const judul_form_edit_mapel = $('#judul_edit_mapel');
    const judul_form_mapel = $('#judul_mapel');

    //atribut form
    const form_nama_tentor = $('#nama_tentor');
    const form_nama_mapel = $('#nama_mapel');
    const form_hari_mengajar = $('#hari_mengajar');
    const form_tanggal_pemesanan = $('#tanggal_pemesanan');
    const form_banyak_pertemuan = $('#banyak_pertemuan');
    const form_keterangan = $('#deskripsi_peserta');
    const form_harga = $('#harga_les');

    form_pemilihah.hide()
    form_pemesanan.hide()
    //halaman mapel
    btn_tambah_les.click(() => {
        form_pemesanan.hide()
        halaman_data_les.fadeOut(300, () => {
            form_pemilihah.fadeIn(300)
        })
    })
    btn_detail_les.click(() => {
        btn_pesan.hide()
        btn_kembali_pemesanan.hide()
        btn_kembali_edit_mapel.show()
        btn_batal.hide()
        btn_simpan_perubahan.hide()
        btn_ubah.show()
        form_pemilihah.hide()
        halaman_data_les.fadeOut(300, () => {
            form_pemesanan.fadeIn(300)
        })
        toggle_form(true)
        judul_form_edit_mapel.hide()
        judul_form_pemesanan.hide()
        judul_form_mapel.show()
    })
    btn_kembali_pemesanan.click(() => {
        btn_kembali_pemesanan.hide()
        btn_kembali_edit_mapel.show()
        btn_simpan_perubahan.hide()
        btn_ubah.show()
        form_pemilihah.hide()
        halaman_data_les.hide()
        toggle_form(true)

        judul_form_edit_mapel.hide()
        judul_form_pemesanan.hide()
        judul_form_mapel.show()
    })
    btn_kembali_edit_mapel.click(() => {
        form_pemilihah.hide()
        form_pemesanan.fadeOut(300, () => {
            halaman_data_les.fadeIn(300)
        })
    })

    //untuk mengedit data
    btn_ubah.click(() => {
        btn_pesan.hide()
        btn_simpan_perubahan.show()
        btn_kembali_pemesanan.show()
        btn_kembali_edit_mapel.hide()
        btn_ubah.hide()
        btn_batal.hide()
        form_pemilihah.hide()
        toggle_form(false)
        form_nama_mapel.prop('disabled', true);

        judul_form_edit_mapel.show()
        judul_form_pemesanan.hide()
        judul_form_mapel.hide()
    })
    //form pemilihan
    btn_kembali.click(() => {
        btn_simpan_perubahan.hide()
        btn_kembali_pemesanan.hide()
        form_pemesanan.hide()
        form_pemilihah.fadeOut(300, () => {
            halaman_data_les.fadeIn(300)
        })
    })
    //form pemesanan
    pilih_mapel.click(() => {
        btn_pesan.show()
        btn_simpan_perubahan.hide()
        btn_ubah.hide()
        btn_kembali_pemesanan.hide()
        btn_kembali_edit_mapel.hide()
        btn_batal.show()
        halaman_data_les.hide()
        form_pemilihah.fadeOut(300, () => {
            form_pemesanan.fadeIn(300)
        })
        toggle_form(true)
        form_tanggal_pemesanan.prop('disabled', false);
        form_banyak_pertemuan.prop('disabled', false);
        form_keterangan.prop('disabled', false);

        judul_form_edit_mapel.hide()
        judul_form_pemesanan.show()
        judul_form_mapel.hide()
    })
    btn_batal.click(() => {
        halaman_data_les.hide()
        form_pemesanan.fadeOut(300, () => {
            form_pemilihah.fadeIn(300)
        })
    })

    function toggle_form(isHide) {
        form_nama_mapel.prop('disabled', isHide);
        form_nama_tentor.prop('disabled', isHide);
        form_hari_mengajar.prop('disabled', isHide);
        form_tanggal_pemesanan.prop('disabled', isHide);
        form_banyak_pertemuan.prop('disabled', isHide);
        form_keterangan.prop('disabled', isHide);
        form_harga.prop('disabled', isHide);
    }

    // form_nama_tentor.chang#nama_tentor    var max = 3;
    //limit checkbox hari
    //     if ($("input.form_hari_mengajar-check-hari_mengajar:checked").length == max) {
    //     if ($("input.form_tanggal_pemesanan-check-tanggal_pemesanan:checked").length == max) {
    //         $("input.form-check-input").attr('disabled_peserta', 'disabled');
    //         $("input.form-check-input:checked").removeAttr('disabled');
    //     } else {
    //         $("input.form-check-input").removeAttr('disabled');
    //     }
    // })
</script>