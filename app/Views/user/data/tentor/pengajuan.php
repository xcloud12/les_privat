<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="mapel_tentor">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Formulir Pengajuan Untuk Mengajar</h1>
                <button class="btn btn-btn-primary" id="btn_tambah_jadwal"><i class="fas fa-plus fa-sm text-white"></i> Tambah Jadwal Baru</button>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Ketgori</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Hari Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($les as $u) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $u['kategori'] ?></td>
                                    <td><?= $u['nama_mapel'] ?></td>
                                    <td><?= $u['hari'] ?></td>
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
        <div class="container-fluid" id="form_pengajuan">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <button class="btn btn-secondary" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            </div>

            <!-- Content Row -->

            <div class="col-9">
                <form action="">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Kategori Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kategori" name="kategori" required disabled>
                                <option value="Praktek">Praktek</option>
                                <option value="Teori">Teori</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="n_mapel" name="n_mapel" required disabled>
                                <option value="Praktek">Isi data database dengan kategori</option>
                                <option value="Teori">Teori</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Hari Mengajar</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="hari_m" name="hari_m" required disabled>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Hari Mengajar</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="senin" value="Senin">
                                <label class="form-check-label" for="senin">Senin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="jumat" value="Jumat">
                                <label class="form-check-label" for="Jumat">Jum'at</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Selasa" value="Selasa">
                                <label class="form-check-label" for="Selasa">Selasa</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="sabtu" value="Sabtu">
                                <label class="form-check-label" for="Sabtu">Sabtu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Rabu" value="Rabu">
                                <label class="form-check-label" for="Rabu">Rabu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Minggu" value="Minggu">
                                <label class="form-check-label" for="Minggu">Minggu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Kamis" value="Kamis">
                                <label class="form-check-label" for="Kamis">Kamis</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Kode</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" id='username' placeholder="Generate Kode" class="form-control" required disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary w-50">Ajukan Jadwal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const mapel_tentor = document.getElementById('mapel_tentor');
    const form_pengajuan = document.getElementById('form_pengajuan');
    const btn_tambah_jadwal = document.getElementsByClassName('btn_tambah_jadwal');
    const btn_kembali = document.getElementById('btn_kembali');

    form_pengajuan.style.display = 'none'

    btn_tambah_jadwal.addEventListener('click', () => {
        halaman.style.display = 'none'
        form_pengajuan.style.display = 'block'
    })

    btn_kembali.addEventListener('click', () => {
        halaman.style.display = 'block'
        detail.style.display = 'none'
    })
</script>