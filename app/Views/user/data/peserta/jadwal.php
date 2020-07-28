<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content Halaman Awal -->
        <div class="container-fluid" id="halaman_pilih_jadwal">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Jadwal Saya</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="#" id="btn_detail_jadwal" class="text-decoration-none">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bolder text-dark text-uppercase mb-3">Fisika</div>
                                        <div class="font-weight-normal text-secondary mt-2">Yota Shinobu</div>
                                        <div class="font-weight-light text-secondary mt-0">Fisika Dasar </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <!-- Begin Page Content Jadwal-->
        <div class="container-fluid" id="halaman_detail_jadwal">
            <!-- Page Heading -->
            <button class="btn btn-secondary mb-3" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Jadwal Saya</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-hover" id="dataTable" width="100%" cellspacing="0">
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


<script src="/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
<link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<script>
    //halaman
    const halaman_pilih_jadwal = $('#halaman_pilih_jadwal');
    const halaman_detail_jadwal = $('#halaman_detail_jadwal');
    //tombol
    const btn_detail_jadwal = $('#btn_detail_jadwal');
    const btn_kembali = $('#btn_kembali');
    halaman_detail_jadwal.hide()

    btn_detail_jadwal.click(() => {
        halaman_pilih_jadwal.fadeOut(300, () => {
            halaman_detail_jadwal.fadeIn(300)
        })
    })
    btn_kembali.click(() => {
        halaman_detail_jadwal.fadeOut(300, () => {
            halaman_pilih_jadwal.fadeIn(300)
        })
    })
</script>