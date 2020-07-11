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

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
                        <img src="img/murid1.png" id="murid" data-aos="fade-up" data-aos-duration="2000">
                        <img src="img/tentor.png" id="tentor" data-aos="fade-up" data-aos-duration="2000" style="height: 100%; max-height: 550px; max-width: 320px;" align="right">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru !</h1>
                            </div>
                            <!-- Dibawah ini form untuk tentor -->
                            <form class="user" id="form_tentor">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="tentor_nama" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="tentor_email" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="pas_tentor" placeholder="Masukkan Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="repas_tentor" placeholder="Masukkan Ulang Password">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" id="tentor_buton">Buat Akun Baru</button>
                                <hr>
                            </form>
                            <!-- Dibawah Ini Untuk Murid -->
                            <form class="user" id="form_murid">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Awal">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Belakang">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Buat Akun Baru
                                </a>
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
        const foto_murid = document.getElementById('murid');
        const form_murid = document.getElementById('form_murid');
        const link_murid = document.getElementById('btn_murid');

        // untuk tentor
        const foto_tentor = document.getElementById('tentor');
        const form_tentor = document.getElementById('form_tentor');
        const link_tentor = document.getElementById('btn_tentor');

        foto_tentor.style.display = 'none'
        form_tentor.style.display = 'none'
        link_murid.style.display = 'none'

        link_tentor.addEventListener('click', () => {
            foto_tentor.style.display = 'block'
            form_tentor.style.display = 'block'
            foto_murid.style.display = 'none'
            form_murid.style.display = 'none'
            link_tentor.style.display = 'none'
            link_murid.style.display = 'block'
        })

        link_murid.addEventListener('click', () => {
            foto_tentor.style.display = 'none'
            form_tentor.style.display = 'none'
            foto_murid.style.display = 'block'
            form_murid.style.display = 'block'
            link_tentor.style.display = 'block'
            link_murid.style.display = 'none'
        })
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>