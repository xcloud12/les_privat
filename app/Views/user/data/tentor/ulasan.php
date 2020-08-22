<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman_awal">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Daftar Ulasan</h1>
            </div>

            <!-- Content Row -->
            <?php foreach ($ulasan->kinerja as $k) : ?>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-md-6 mb-4">
                        <div class="card shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-secondary text-uppercase mb-2"><?= $k->peserta ?></div>
                                        <div class="font-weight-normal text-secondary"><?= $k->les ?></div>
                                        <div class="font-weight-normal text-secondary mb-2 d-inline small">
                                            <?php
                                            $rating = json_decode($k->rating, true);
                                            for ($i = 1; $i <= 5; $i++) :
                                                $star = "";
                                                if ($rating['rata-rata'] >= $i) {
                                                    $star = "text-primary";
                                                } ?>
                                                <i class="fas fa-star <?= $star ?>"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="font-font-weight-light text-xs font-italic text-gray-500 d-inline"><?= strftime('%d %B %Y', strtotime($k->tgl)) ?></div>
                                        <!-- <div class="font-weight-light text-secondary mt-2">Ulasan</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- Page chart plugins -->
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/js/demo/chart-area-demo.js"></script>