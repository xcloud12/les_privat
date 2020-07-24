<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title id="">Form Pendaftaran</title>
    <link rel="icon" href="img/logo.png" sizes="32x32" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        /* body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        } */

        img {
            height: auto;
            background-size: auto 100%;
            width: 500px;
        }

        .card-body {
            height: 550px !important;
        }

        button:active {
            color: #2259ab !important;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container pt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img src="img/murid1.png" id="murid">
                        <img src="img/tentor.png" id="tentor" style="height: 100%; max-height: 550px; max-width: 320px;" align="right">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 tentor">Buat Akun Tentor !</h1>
                                <h1 class="h4 text-gray-900 mb-4 peserta">Buat Akun Peserta !</h1>
                            </div>
                            <!-- Dibawah ini form untuk tentor -->
                            <form class="user" id="form_tentor">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_tentor" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email_tentor" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="pas_tentor" placeholder="Masukkan Password">
                                </div>
                                <button class="btn btn-primary btn-user btn-block" id="tentor_buton">Buat Akun Baru</button>
                                <hr>
                            </form>
                            <!-- Dibawah Ini Untuk Murid -->
                            <form class="user" id="form_murid">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_murid" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email_tentor" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="pas_tentor" placeholder="Masukkan Password">
                                </div>
                                <button class="btn btn-primary btn-user btn-block" id="tentor_buton">Buat Akun Baru</button>
                                <hr>
                            </form>
                            <div class="text-center d-flex justify-content-center">
                                <button class="btn text-primary shadow-none" id="btn_murid"> <small>Daftar Sebagai Murid ?</small> </button>
                                <button class="btn text-primary shadow-none" id="btn_tentor"> <small>Daftar Sebagai Tentor ?</small></button>
                            </div>
                            <div class="text-center mt-n2">
                                <a class=" text-primary text-decoration-none small" href="/">Sudah Punya Akun ? Masuk ke akun !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        // untuk murid
        const foto_murid = $('#murid');
        const form_murid = $('#form_murid');
        const link_murid = $('#btn_murid');
        const judul_murid = $('.peserta');

        // untuk tentor
        const foto_tentor = $('#tentor');
        const form_tentor = $('#form_tentor');
        const link_tentor = $('#btn_tentor');
        const judul_tentor = $('.tentor');

        foto_tentor.hide()
        form_tentor.hide()
        link_murid.hide()
        judul_tentor.hide()

        link_tentor.click(() => {
            // foto_tentor.show()
            link_tentor.hide()
            foto_murid.fadeOut(200, () => {
                foto_tentor.fadeIn(200)
            })
            link_murid.fadeIn(200)
            form_tentor.show()
            form_murid.hide()
            judul_tentor.fadeIn(300)
            judul_murid.hide()
        })

        link_murid.click(() => {
            form_tentor.hide()
            form_murid.show()
            foto_tentor.fadeOut(200, () => {
                foto_murid.fadeIn(200)
            })
            link_tentor.fadeIn(200)
            link_murid.hide()
            judul_murid.fadeIn(300)
            judul_tentor.hide()

        })
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>