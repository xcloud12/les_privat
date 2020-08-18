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
                <?php foreach ($jadwal as $j) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <a href="#" class="text-decoration-none " onclick="listJadwal(<?= "'$j->username', '$j->les'" ?>)">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bolder text-dark text-uppercase mb-3"><?= $j->les ?></div>
                                            <div class="font-weight-normal text-secondary mt-2"><?= $j->tentor ?></div>
                                            <div class="font-weight-light text-secondary mt-0"><?= $j->deskripsi ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
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
                    <table class="table table-bordered bgr table-hover" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Mata Pelajaran</th>
                                <th>Tentor</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                            </tr>
                        </thead>
                        <tbody id="table_jadwal">
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
    const halaman_pilih_jadwal  = $('#halaman_pilih_jadwal');
    const halaman_detail_jadwal = $('#halaman_detail_jadwal');
    const jadwal_list           = $("#table_jadwal");
    //tombol
    const btn_kembali = $('#btn_kembali');
    halaman_detail_jadwal.hide()

    btn_kembali.click(() => {
        halaman_detail_jadwal.fadeOut(300, () => {
            halaman_pilih_jadwal.fadeIn(300)
        })
    })

    function listJadwal(username, les) {
        jadwal_list.html("")
        halaman_pilih_jadwal.fadeOut(300, () => {
            $.post("/jadwal", {
                    username: username,
                    mapel   : les
                },
                function(data, status) {
                    if (status == 'success') {
                        jadwal = JSON.parse(data)
                        num    = 1
                        jadwal.forEach((e) => {
                            jadwal_list.append(`
<tr>
    <td>${num}</td>                
    <td>${e.les}</td>                
    <td>${e.tentor}</td>                
    <td>${e.tgl}</td>                
    <td>${e.jam}</td>                
</tr>`)
                            num++
                        });
                    }
                })
            halaman_detail_jadwal.fadeIn(300)
        })
    }
</script>