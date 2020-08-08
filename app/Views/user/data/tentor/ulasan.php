<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman_awal">
            <!-- Page Heading -->
            <button class="btn btn-secondary mb-4 pl-3 pr-3" id="btn_kembali"><i class="fas fa-arrow-left fa-sm text-white"></i> Kembali</button>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Daftar Ulasan</h1>
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
                                    <div class="font-weight-normal text-secondary mb-2 d-inline small">
                                        <i class="fas fa-star" style="color: deepskyblue;"></i><i class="fas fa-star" style="color: deepskyblue;"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <div class="font-font-weight-light text-xs font-italic text-gray-500 d-inline"> 20 September 2020</div>
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
                <h1 class="h3 mb-4 text-gray-800">Data Statistik Tentor</h1>
                <button class="btn bg-primary text-white pr-2 pl-2" id="btn_ulasan"><i class="fas fa-comment-alt text-white pr-1"></i> Ulasan Saya</button>
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
    const btn_ulasan = $('#btn_ulasan');
    const btn_kembali = $('#btn_kembali');

    halaman_ulasan.hide()

    //halaman ulasan
    btn_ulasan.click(() => {
        halaman_statistik.fadeOut(300, () => {
            halaman_ulasan.fadeIn(300)
        })
    })

    //halaman statistik
    btn_kembali.click(() => {
        halaman_ulasan.fadeOut(300, () => {
            halaman_statistik.fadeIn(300)
        })
    })
</script>

<!-- Page chart plugins -->
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/js/demo/chart-area-demo.js"></script>