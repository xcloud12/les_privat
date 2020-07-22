<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman_awal">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Daftar Ulasan</h1>
                <button class="btn bg-primary text-white" id="btn_statistik"><i class="fas fa-chart-line text-white-50"></i> Statistik</button>
            </div>

            <!-- Content Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-secondary text-uppercase mb-2">Nama Peserta</div>
                                    <div class="font-weight-normal text-secondary">Nama Mata Pelajaran </div>
                                    <div class="font-weight-normal text-secondary mb-2 d-inline">Rating</div>
                                    <div class="font-font-weight-light small font-italic text-gray-400 d-inline">Tanggal</div>
                                    <div class="font-weight-light text-secondary mt-2">Ulasan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid" id="halaman_statistik">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <button class="btn btn-secondary" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            </div>
            <div>
                <h1 class="h3 mb-4 text-gray-800">Data Statistik Tentor</h1>
            </div>

            <!-- Content Row -->
            <div class="row justify-content-center">

                <div class="col-xl-9 col-lg-7">
                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //pages
    const halaman_ulasan = $('#halaman_awal');
    const halaman_statistik = $('#halaman_statistik');

    //tombol
    const btn_statistik = $('#btn_statistik');
    const btn_kembali = $('#btn_kembali');

    halaman_statistik.hide()

    //halaman ulasan
    btn_statistik.click(() => {
        halaman_ulasan.fadeOut(300, () => {
            halaman_statistik.fadeIn(300)
        })
    })

    //halaman statistik
    btn_kembali.click(() => {
        halaman_statistik.fadeOut(300, () => {
            halaman_ulasan.fadeIn(300)
        })
    })
</script>

<!-- Page chart plugins -->
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/js/demo/chart-area-demo.js"></script>