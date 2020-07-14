<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column pt-4">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid" id="halaman">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Mata Pelajaran</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white"></i> Tambah Data</a>
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
                                <th>Harga</th>
                                <th hidden></th>
                                <th>Aksi</th>
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
                                    <td><?= $u['harga'] ?></td>
                                    <td hidden><?= $u['bonus'] ?></td>
                                    <td>
                                        <center>
                                            <button class="btn btn-info btn-sm btn_info">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button class="btn btn-secondary btn-sm btn_edit">
                                                <i class="far fa-edit"></i>
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
</div>

<script>
    const halaman = document.getElementById('halaman');
    const detail = document.getElementById('detail');
    const btn_info = document.getElementsByClassName('btn_info');
    const btn_edit = document.getElementsByClassName('btn_edit');
    const btn_kembali = document.getElementById('btn_kembali');
    const btn_simpan = document.getElementById('btn_simpan');
    const btn_hapus = document.getElementById('btn_hapus');
    const detail_kategori = document.getElementById('kategori');
    const detail_mapel = document.getElementById('mapel');
    const detail_harga = document.getElementById('harga');
    const detail_bonus = document.getElementById('bonus');

    detail.style.display = 'none'


    btn_kembali.addEventListener('click', () => {
        halaman.style.display = 'block'
        detail.style.display = 'none'
    })

    //untuk button info
    Array.from(btn_info).forEach((elm) => {
        elm.addEventListener('click', () => {
            halaman.style.display = 'none'
            btn_simpan.style.display = 'none'
            btn_hapus.style.display = 'block'
            detail.style.display = 'block'

            fill_form(elm.parentNode.parentNode.parentNode.children)
            toggle_form(true)
        })
    })

    // untuk button edit
    Array.from(btn_edit).forEach((elm) => {
        elm.addEventListener('click', () => {
            btn_hapus.style.display = 'none'
            btn_simpan.style.display = 'block'
            halaman.style.display = 'none'
            detail.style.display = 'block'

            fill_form(elm.parentNode.parentNode.parentNode.children)
            toggle_form(false)
        })
    })

    function toggle_form(isHide) {
        detail_kategori.disabled = isHide;
        detail_mapel.disabled = isHide;
        detail_harga.disabled = isHide;
        detail_bonus.disabled = isHide;

    }

    function fill_form(data) {
        detail_kategori.value = data[1].textContent;
        detail_mapel.value = data[2].textContent;
        detail_harga.value = data[3].textContent;
        detail_bonus.value = data[4].textContent;
    }
</script>