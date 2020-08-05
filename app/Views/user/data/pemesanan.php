<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content Jadwal-->
        <div class="container-fluid" id="halaman_pemesanan">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Pemesanan</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered bgr table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th hidden>id_pemesanan</th>
                                <th>Nama Tentor</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Nama Peserta</th>
                                <th>Tanggal Pemesanan</th>
                                <th hidden>status</th>
                                <th hidden>banyak pertemuan</th>
                                <th hidden>deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td hidden>1123231</td>
                                <td>xxxxxx</td>
                                <td>xxxxxxxxxxxx</td>
                                <td>xxxxxx</td>
                                <td>xx - xx - xxxx</td>
                                <td hidden>xxxxxx</td>
                                <td hidden>xx</td>
                                <td hidden>deskripsi</td>
                                <td style="width: 2%;">
                                    <center>
                                        <button type="button" class="btn btn-info btn-sm btn_info" onclick="info(parentElement.parentElement.parentElement)">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="halaman_detail_pemesanan">
            <!-- Page Heading -->
            <button class="btn btn-secondary mb-3" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Data Pemesanan</h1>
                <button class="btn btn-primary mb-3" id="btn_cetak" title="Print Data Pemesanan"><i class="fas fa-print fa-sm text-white"></i> Cetak Pemesanan</button>
            </div>
            <!-- Content Row -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-6 col-form-label font-weight-bold">Nama tentor</label>
                                        <label for="nama" class="col-sm-6 col-form-label">: Isian nama tentor</label>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="email" class="col-sm-6 col-form-label font-weight-bold">Nama mata pelajaran</label>
                                        <label for="email" class="col-sm-6 col-form-label">: isian mapel</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempat_lahir" class="col-sm-6 col-form-label font-weight-bold">Nama peserta</label>
                                        <label for="tempat_lahir" class="col-sm-6 col-form-label">: isian nama peserta</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_lahir" class="col-sm-6 col-form-label font-weight-bold">Tanggal pemesanan</label>
                                        <label for="tanggal_lahir" class="col-sm-6 col-form-label">: isian tanggal pemesanan</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_kelamin" class="col-sm-6 col-form-label font-weight-bold">Banyak Pertemuan</label>
                                        <label for="jenis_kelamin" class="col-sm-6 col-form-label">: isian banyak pertemuan</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-6 col-form-label font-weight-bold">deskripsi</label>
                                        <label for="alamat" class="col-sm-6 col-form-label">: isian deskripsi</label>
                                    </div>
                                    <div class="form-group row mt-5">
                                        <label for="no_telp" class="col-sm-6 col-form-label font-weight-bold">Harga</label>
                                        <label for="no_telp" class="col-sm-6 col-form-label">: isian harga mapel</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    const halaman_pemesanan        = $('#halaman_pemesanan');
    const halaman_detail_pemesanan = $('#halaman_detail_pemesanan');
    //tombol
    const btn_detail_pemesanan = $('.btn-info');
    const btn_kembali          = $('#btn_kembali');
    halaman_detail_pemesanan.hide()

    btn_detail_pemesanan.click(() => {
        halaman_pemesanan.fadeOut(300, () => {
            halaman_detail_pemesanan.fadeIn(300)
        })
    })
    btn_kembali.click(() => {
        halaman_detail_pemesanan.fadeOut(300, () => {
            halaman_pemesanan.fadeIn(300)
        })
    })
</script>