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

        .tentor,
        #tentor,
        #daftar_tentor,
        #btn_peserta {
            display: none;
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
                        <img src="img/murid1.png" id="peserta">
                        <img src="img/tentor.png" id="tentor" style="height: 100%; max-height: 550px; max-width: 320px;" align="right">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 tentor">Buat Akun Tentor </h1>
                                <h1 class="h4 text-gray-900 mb-4 peserta">Buat Akun Peserta </h1>
                            </div>
                            <!-- Dibawah ini form mendaftar -->
                            <form class="user" action="/daftar" method="post" id="pendaftaran">
                                <input type="hidden" value="peserta" name="level">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="nama" placeholder="Masukkan Nama Anda" oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong');" oninput="this.setCustomValidity('')" title="Isi Nama sesuai nama anda" pattern="[A-Za-z]{1,20}" maxlength="35" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username Anda" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password" required>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" id="daftar_tentor">Buat Akun Tentor </button>
                                <button class="btn btn-primary btn-user btn-block" id="daftar_peserta">Buat Akun Peserta </button>
                                <hr>
                            </form>
                            <div class="text-center d-flex justify-content-center">
                                <button class="btn text-primary shadow-none" id="btn_peserta"> <small>Daftar Sebagai Murid ?</small> </button>
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
        const level = $("input[name='level']")
        // untuk murid
        const foto_peserta = $('#peserta');
        const link_peserta = $('#btn_peserta');
        const daftar_peserta = $('#daftar_peserta');
        const judul_peserta = $('.peserta');

        // untuk tentor
        const foto_tentor = $('#tentor');
        const link_tentor = $('#btn_tentor');
        const daftar_tentor = $('#daftar_tentor');
        const judul_tentor = $('.tentor');

        //form input
        const input_nama = $('#nama');
        const input_email = $('#email');
        const input_username = $('#username');
        const input_password = $('#password');

        //pattern error message
        // input_nama.on("invalid", function(event) {
        //     event.target.
        // });

        foto_tentor.hide()
        link_peserta.hide()
        judul_tentor.hide()
        daftar_tentor.hide()

        link_tentor.click(() => {
            level.val('tentor')
            link_tentor.fadeOut(200, () => {
                link_peserta.fadeIn(200)
            })
            judul_peserta.fadeOut(200, () => {
                judul_tentor.fadeIn(200)
            })
            daftar_peserta.fadeOut(200, () => {
                daftar_tentor.fadeIn(200)
            })
            foto_peserta.fadeOut(200, () => {
                foto_tentor.fadeIn(200)
            })
        })

        link_peserta.click(() => {
            level.val('peserta')
            link_peserta.fadeOut(200, () => {
                link_tentor.fadeIn(200)
            })
            judul_tentor.fadeOut(200, () => {
                judul_peserta.fadeIn(200)
            })
            daftar_tentor.fadeOut(200, () => {
                daftar_peserta.fadeIn(200)
            })
            foto_tentor.fadeOut(200, () => {
                foto_peserta.fadeIn(200)
            })
        })
    </script>
</body>

</html>