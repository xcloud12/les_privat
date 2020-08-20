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
                                            <div class="font-weight-light text-secondary mt-0" hidden>Keterangan : <?= $p->deskripsi_pesan ?></div>
                                            <div class="font-weight-normal text-secondary mb-0 mt-0">
                                                <?php if ($p->pembayaran === '1') : ?>
                                                    <label name="status" class="badge badge-success text-white text-xs">Sudah Melakukan Pembayaran</label>
                                                <?php elseif ($p->pembayaran === '0') : ?>
                                                    <label name="status" class="badge badge-danger text-white text-xs">Belum Melakukan Pembayaran</label>
                                                <?php endif; ?>
                                            </div>
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
                    <div class="row" id="listLes">
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
                                <option selected disabled value="">-- Pilih Salah Satu --</option>
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row harga_les">
                        <label for="nama" class="col-sm-3 col-form-label">Biaya Pendaftaran</label>
                        <div class="col-sm-9">
                            <input type="number" id='biaya_daftar' placeholder="Biaya Pendaftaran" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row harga_les">
                        <label for="nama" class="col-sm-3 col-form-label">Harga Pertemuan</label>
                        <div class="col-sm-9">
                            <input type="number" name="harga_les" id='harga_les' placeholder="Harga Pertemuan" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Banyak Pertemuan</label>
                        <div class="col-sm-9">
                            <input type="number" name="banyak_pertemuan" id='banyak_pertemuan' placeholder="Banyak Pertemuan" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Total Biaya</label>
                        <div class="col-sm-9">
                            <input type="number" id='biaya_total' placeholder="Biaya Total" class="form-control" required disabled>
                            <input type="hidden" name="biaya_total" id='biaya_total_submit' placeholder="Biaya Total" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row pt-5 status_pembayaran">
                        <label for="nama" class="col-sm-3 col-form-label">Status Pembayaran</label>
                        <div class="col-sm-9">
                            <input type="number" name="status_pembayaran" id='status_pembayaran' placeholder="Belum DIbayar" class="form-control" required disabled>
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
        <!-- Begin Page Content Jadwal-->
        <div class="container-fluid" id="halaman_detail_jadwal">
            <!-- Page Heading -->
            <button class="btn btn-secondary mb-3" id="btn_kembali_jadwal"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Jadwal (nama tentor)</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-hover" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nama Tentor</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Tanggal Pertemuan</th>
                                <th>Jam Pertemuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>xxxxxx</td>
                                <td>xxxxxxx</td>
                                <td>xx - xx - xxxx</td>
                                <td>xx.xx - xx.xx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const halaman_data_les = $('#halaman_data_les');
    const form_pemilihah = $('#form_pemilihan');
    const form_pemesanan = $('#form_pemesanan');
    const form_detail_jadwal = $('#halaman_detail_jadwal');

    const btn_tambah_les = $('#btn_tambah_les');
    const btn_kembali = $('#btn_kembali');
    const btn_kembali_pemesanan = $('#btn_kembali_pemesanan');
    const btn_kembali_edit_mapel = $('#btn_kembali_edit_mapel');
    const btn_kembali_jadwal = $('#btn_kembali_jadwal');
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
    const form_harga = $('#harga_les');
    const form_biaya = $('#biaya_daftar');
    const form_biaya_total = $('#biaya_total');
    const form_status_pembayaran = $('#status_pembayaran');
    const form_biaya_total_submit = $('#biaya_total_submit');

    //attribut div hidden
    const form_div_status_pembayaran = $('.status_pembayaran');
    const form_div_harga_les = $('.harga_les');



    form_pemilihah.hide()
    form_detail_jadwal.hide()
    form_pemesanan.hide()
    //halaman mapel
    btn_tambah_les.click(() => {
        form_pemesanan.hide()
        form_detail_jadwal.hide()
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
        form_detail_jadwal.hide()
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
        form_detail_jadwal.hide()
        toggle_form(true)
        resetform()

        judul_form_pemesanan.hide()
        judul_form_mapel.show()
    })
    btn_kembali_edit_mapel.click(() => {
        form_pemilihah.hide()
        form_detail_jadwal.hide()
        form_pemesanan.fadeOut(300, () => {
            halaman_data_les.fadeIn(300)
            resetform()
        })
    })

    form_banyak_pertemuan.keyup(function() {
        let biaya = parseInt(form_biaya.val());
        let harga = parseInt(form_harga.val());
        let temu = parseInt(form_banyak_pertemuan.val());

        form_biaya_total.val(biaya + (harga * temu))
        form_biaya_total_submit.val(biaya + (harga * temu))
    })

    //untuk mengedit data
    btn_ubah.click(() => {
        btn_pesan.hide()
        btn_simpan_perubahan.show()
        btn_kembali_pemesanan.show()
        btn_ubah.hide()
        btn_batal.hide()
        form_pemilihah.hide()
        form_detail_jadwal.hide()
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
        form_detail_jadwal.hide()
        form_pemilihah.fadeOut(300, () => {
            halaman_data_les.fadeIn(300)
            resetform()
        })
    })
    //form pemesanan
    function showPengajuan(data_pemesanan) {
        data = JSON.parse(data_pemesanan);
        form_nama_mapel.val(data.les)
        form_nama_tentor.val(data.tentor)
        form_harga.val(data.harga);
        form_biaya.val(data.biaya_daftar);

        btn_pesan.show()
        btn_simpan_perubahan.hide()
        btn_ubah.hide()
        btn_kembali_pemesanan.hide()
        btn_kembali_edit_mapel.hide()
        btn_batal.show()
        halaman_data_les.hide()
        form_detail_jadwal.hide()
        form_pemilihah.fadeOut(300, () => {
            form_pemesanan.fadeIn(300)
            resetform()
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

        form_div_status_pembayaran.hide()
        form_div_harga_les.show()
    }

    function showDetail(pesan) {
        const data = JSON.parse(pesan)
        toggle_form(true)
        form_nama_mapel.val(data.les)
        form_nama_tentor.val(data.tentor)
        form_hari_mengajar.val(data.hari)
        form_banyak_pertemuan.val(data.banyak_pertemuan)
        form_biaya_total.val(data.total_bayar)
        form_status_pembayaran.val(data.pembayaran)
        form_keterangan.val(data.deskripsi_pesan)

        form_div_harga_les.hide()
        form_div_status_pembayaran.hide()
    }

    btn_batal.click(() => {
        halaman_data_les.hide()
        form_detail_jadwal.hide()
        form_pemesanan.fadeOut(300, () => {
            form_pemilihah.fadeIn(300)
            resetform()
        })
    })

    function toggle_form(isHide) {
        form_nama_mapel.prop('disabled', isHide);
        form_nama_tentor.prop('disabled', isHide);
        form_hari_mengajar.prop('disabled', isHide);
        form_banyak_pertemuan.prop('disabled', isHide);
        form_keterangan.prop('disabled', isHide);
    }

    function resetform() {
        form_hari_mengajar.val('')
        form_banyak_pertemuan.val('')
        form_keterangan.val('')
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
</script>