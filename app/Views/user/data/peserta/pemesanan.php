<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <link rel="stylesheet" href="/css/pemesanan.css">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman_data_les">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-2 text-gray-800">Data Les Saya</h1>
                <button class="btn bg-primary text-white pr-2 pl-2" id="btn_tambah_les"><i class="fas fa-plus fa-sm text-white"></i> Ikut Les Baru</button>
            </div>

            <!-- Content Row -->
            <div class="row">
                <?php foreach ($pemesanan as $p) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a href="#" class="text-decoration-none btn_detail_les" data-pesan="<?= htmlspecialchars(json_encode($p)) ?>" onclick="showDetail(this.dataset.pesan)">
                            <div class="my-card shadow d-flex">
                                <img src="<?= "/img/img_profil/" . $p->tentor_foto ?>" alt="tentor" class="img-fluid rounded float-left pesan-img">
                                <div class="card-body">
                                    <div class="row align-items-center pesan-text-main">
                                        <div class="col">
                                            <div class="font-weight-bold text-uppercase text-secondary mb-2"><?= $p->les ?></div>
                                            <div class="font-weight-normal text-secondary mb-0 mt-2 "><?= ucfirst($p->hari) . " ($p->jam_kerja)" ?></div>
                                            <div class="font-weight-light text-secondary mt-0">Keterangan : <?= $p->deskripsi_pesan ?></div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center pesan-text-info">
                                        <div class="col">
                                            <div class="font-weight-bold text-uppercase text-secondary mb-2"><?= $p->tentor ?></div>
                                            <div class="font-weight-normal text-secondary mb-0 mt-2 "><?= $p->deskripsi_tentor ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
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
            <div class="col-sm mt-4">
                <div class="form-group row justify-content-center">
                    <div class="col-sm-8 input-group">
                        <input type="text" class="form-control bg-white small" id="pencarian" placeholder="Cari Mata Pelajaran">
                        <div class="input-group-append">
                            <button class="btn btn-primary">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <!-- Content Row -->
                    <div class="row justify-content-center" id="listLes">
                        <?php foreach ($daftar_les as $p) : ?>
                            <div class="col-xl-5 col-md-6 mb-4" data-pesan="<?= htmlspecialchars(json_encode($p)) ?>" onclick="showPengajuan(this.dataset.pesan)">
                                <a href="#" class="text-decoration-none text-gray-800 ">
                                    <div class="my-card shadow d-flex ">
                                        <img src="<?= "/img/img_profil/" . $p->tentor_foto ?>" alt="tentor" class="img-fluid rounded float-left pesan-img">
                                        <div class="card-body">
                                            <div class="row align-items-center pesan-text-main">
                                                <div class="col mr-4">
                                                    <div class="font-weight-bold text-uppercase text-dark"><?= "$p->les" ?></div>
                                                    <div class="mt-1 text-gray-800 font-weight-lighter"><?= "$p->tentor" ?></div>
                                                    <div class="mt-1 text-gray-800 font-weight-lighter"><?= number_to_currency($p->harga, "IDR", "ID") ?></div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center pesan-text-info">
                                                <div class="col mr-4">
                                                    <div class="text-dark">
                                                        <?php foreach (explode(',', $p->hari) as $hari) : ?>
                                                            <span class="badge badge-pill badge-primary pt-1 pb-1"><?= ucfirst($hari) ?></span>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="mt-1 text-gray-800 font-weight-lighter"><?= "$p->jam_kerja" ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="form_pemesanan">
            <form action="" method="post" id="form_submit">
                <input type="hidden" name="_method" id='rest_method' value="PUT" />
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="justify-content-start">
                        <a href="#" class="btn btn-secondary mb-2" id="btn_kembali_pemesanan"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</a>
                        <a href="#" class="btn btn-secondary mb-2" id="btn_kembali_edit_mapel"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</a>
                        <h1 class="h3 mb-2 text-gray-800 mt-3" id="judul_pengajuan">Mendaftar Les Baru</h1>
                        <h1 class="h3 mb-2 text-gray-800 mt-3" id="judul_mapel">Data Les Saya</h1>
                    </div>
                    <div class=" justify-content-end">
                        <button class="btn btn-secondary" id="btn_pesan"><i class="fas fa-plus fa-sm text-white"></i> Pesan Les </button>
                        <a href="#" class="btn btn-secondary" id="btn_batal"><i class="fas fa-times fa-sm text-white"></i> Batal</a>
                    </div>
                </div>
                <!-- Content Row -->
                <div class="col-11">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Mata Pelajaran</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='nama_mapel' placeholder="Nama Mata Pelajaran" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Tentor</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" id='nama_tentor' placeholder="Nama tentor" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Hari Belajar</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="hari_mengajar" name="hari_mengajar" required disabled>
                                <option selected disabled>-- Pilih Salah Satu --</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Minggu</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Banyak Pertemuan</label>
                        <div class="col-sm-9">
                            <input type="number" name="banyak_pertemuan" id='banyak_pertemuan' placeholder="Banyak Pertemuan" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="text" name="deskripsi" id='deskripsi_peserta' placeholder="Keterangan peserta" class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </form>
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
    const btn_detail_les = $('.btn_detail_les');
    const list = $("#listLes")
    const pencarian = $("#pencarian")

    //judul form
    const judul_form_pemesanan = $('#judul_pengajuan');
    const judul_form_mapel = $('#judul_mapel');

    //atribut form
    const form_nama_tentor = $('#nama_tentor');
    const form_nama_mapel = $('#nama_mapel');
    const form_hari_mengajar = $('#hari_mengajar');
    const form_banyak_pertemuan = $('#banyak_pertemuan');
    const form_keterangan = $('#deskripsi_peserta');

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
    function showPengajuan(data_pemesanan) {
        data = JSON.parse(data_pemesanan);
        form_nama_mapel.val(data.les)
        form_nama_tentor.val(data.tentor)

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
        $("#form_submit").attr('action', `/kelas/${data.id_pengajuan}`)
        $("#rest_method").val('POST')
        const hari = $("#hari_mengajar option").toArray()
        hari.forEach((h) => {
            $(h).attr('hidden', true)
        })
        data.hari.split(',').forEach((p) => {
            hari.forEach((h) => {
                if (h.value == p) {
                    console.log(h.value);
                    $(h).removeAttr('hidden')
                }
            })
        })

        toggle_form(true)
        form_hari_mengajar.prop('disabled', false);
        form_banyak_pertemuan.prop('disabled', false);
        form_keterangan.prop('disabled', false);

        judul_form_pemesanan.show()
        judul_form_mapel.hide()
    }

    function showDetail(pesan) {
        const data = JSON.parse(pesan)
        toggle_form(true)
        form_nama_mapel.val(data.les)
        form_nama_tentor.val(data.tentor)
        form_hari_mengajar.val(data.hari)
        form_banyak_pertemuan.val(data.banyak_pertemuan)
        form_keterangan.val(data.deskripsi_pesan)
    }

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
        form_banyak_pertemuan.prop('disabled', isHide);
        form_keterangan.prop('disabled', isHide);
    }

    pencarian.keyup((key) => {
        if (key.key == 'Enter') {
            getLes(pencarian.val())
        }
    })

    function getLes(pencarian) {
        $.get("/api/get_les_by_name/" + pencarian, (data, status) => {
            if (status == "success") {
                const les = JSON.parse(data);
                console.log(data);
                list.html("");

                les.forEach((l) => {
                    list.append(`
<div class="col-xl-5 col-md-6 mb-4 mt-3" onclick="showPengajuan()">
    <a href="#" class="text-decoration-none text-gray-800 pilih_mapel">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-4">
                        <div class="font-weight-bold text-uppercase text-dark">${l.nama} (${l.kategori})</div>
                        <div class=" mt-1 text-gray-800 font-weight-lighter">${l.deskripsi}</div>
                    </div>
                    <div class="col-auto justify-content-center">
                        <div class=" mt-2 text-gray-800">${l.harga}</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>`);
                });
                return JSON.parse(data)
            }
        });
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