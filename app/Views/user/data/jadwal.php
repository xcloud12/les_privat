<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content Jadwal-->
        <div class="container-fluid" id="halaman_jadwal">
            <!-- Page Heading -->
            <button class="btn btn-secondary mb-3" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Jadwal</h1>
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
                                <th>Nama Peserta</th>
                                <th>Tanggal Pertemuan</th>
                                <th>Kehadiran</th>
                                <th hidden>Rating</th>
                                <th hidden>Ulasan</th>
                                <th hidden>Id Jadwal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>xxxxxx</td>
                                <td>xxxxxxx</td>
                                <td>xxxxxx</td>
                                <td>xx - xx - xxxx</td>
                                <td>xx</td>
                                <td hidden>Rating</td>
                                <td hidden>Ulasasn</td>
                                <td hidden>id_jadwal</td>
                                <td>
                                    <center>
                                        <button type="button" class="btn btn-info btn-sm btn_info" onclick="info(parentElement.parentElement.parentElement)">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                        <button class="btn btn-secondary btn-sm btn_edit" onclick="edit(parentElement.parentElement.parentElement)">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </center>
                                </td>
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