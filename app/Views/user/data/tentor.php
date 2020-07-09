<!-- Begin Page Content -->
<div class="container-fluid pt-4">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center">
            <h5 class="m-0 font-weight-bold text-primary flex-fill">Daftar Tentor</h5>
            <button class="btn btn-primary btn-sm">Tambah</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered bgr table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($user as $u) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $u['nama'] ?></td>
                                <td><?= $u['username'] ?></td>
                                <td><?= $u['email'] ?></td>
                                <td><?= $u['jenis_kelamin'] ?></td>
                                <td>
                                    <center>
                                        <button class="btn btn-info btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </center>
                                </td>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->