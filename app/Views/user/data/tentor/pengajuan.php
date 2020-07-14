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
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-secondary text-uppercase mb-2">Matematika (Teori)</div>
                                    <div class=" mb-0 font-weight-bold text-gray-800"><span class="badge badge-pill badge-primary pt-1 pb-1">Day</span></div>
                                </div>
                                <div class="col-auto">
                                    <div class="font-weight-bold text-secondary">Rp. 200.000,-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid" id="form_pengajuan">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <button class="btn btn-secondary" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            </div>
            <div>
                <h1 class="h3 mb-0 text-gray-800">Daftar Pengajaran Saja</h1>
                <p class="text-gray-800 mt-3 mb-2">Pilih kategori terlebih dahulu untuk menampilkan daftar mata pelajaran yang ingin di ajarkan</p>
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
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const mapel_tentor = document.getElementById('mapel_tentor');
    const form_pengajuan = document.getElementById('form_pengajuan');
    const btn_tambah_jadwal = document.getElementById('btn_tambah_jadwal');
    const btn_kembali = document.getElementById('btn_kembali');

    form_pengajuan.style.display = 'none'

    btn_tambah_jadwal.addEventListener('click', () => {
        mapel_tentor.style.display = 'none'
        form_pengajuan.style.display = 'block'
    })

    btn_kembali.addEventListener('click', () => {
        mapel_tentor.style.display = 'block'
        form_pengajuan.style.display = 'none'
    })
</script>