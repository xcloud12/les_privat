<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lupa Kata Sandi</title>
    <link rel="icon" href="img/logo.png" sizes="32x32" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .h4 {
            font-size: 30px !important;
        }

        img {
            height: auto;
            background-size: auto 100%;
            width: 500px;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container pt-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body pr-2 pt-0 pb-0 pl-2">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                                <img src="img/forgot1.jpg" style="height: 100%; max-height: 550px;" align="middle">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Lupa Kata Sandi Anda ?</h1>
                                        <p class="mb-4 info_email">Maaf atas ketidaknyamanannya, silahkan masukkan email anda untuk kami cek</p>
                                        <p class="mb-4 info_data">(nama_pengguna), Silahkan Lengkapi data diri anda untuk kami cek</p>
                                        <p class="mb-4 info_sandi">Kata Sandi Anda Adalah :</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group email">
                                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email Address..." title="Email anda" required>
                                        </div>
                                        <div class="form-group username">
                                            <input type="text" class="form-control form-control-user" id="username" aria-describedby="usernameHelp" placeholder="Masukkan Username..." title="Username anda" required>
                                        </div>
                                        <div class="form-group tanggal">
                                            <input type="text" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir..." onfocus="(this.type='date')" min="1950-01-01" required>
                                        </div>
                                        <div class="form-group telp">
                                            <input type="number" class="form-control form-control-user" id="telp" aria-describedby="telpHelp" placeholder="Masukkan No Telepon..." title="No telepon yang ada di dalam akun" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" required>
                                        </div>
                                        <div class="form-group password">
                                            <label for="password" class="font-weight-bold text-dark sandi">Ini Password</label>
                                        </div>
                                        <a href="#" class="btn btn-primary btn-user btn-block cek_email">Cek Email</a>
                                        <a href="#" class="btn btn-primary btn-user btn-block cek_data">Cek Data</a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small text-decoration-none link_buat_akun" href="/daftar">Buat Akun Baru ? </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small text-decoration-none link_login" href="/">Sudah Punya Akun ? Masuk Akun!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small text-decoration-none link_login_pas" href="/">Masuk Kedalam Akun Anda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script>
        //tombol
        const link_login = $('.link_login');
        const link_login_pas = $('.link_login_pas');
        const link_buat_akun = $('.link_buat_akun');
        const cek_email = $('.cek_email');
        const cek_data = $('.cek_data');

        // text_info
        const info_email = $('.info_email');
        const info_data = $('.info_data');
        const info_sandi = $('.info_sandi');
        const data_sandi = $('.sandi');

        //form attribut
        const input_email = $('.email');
        const input_username = $('.username');
        const input_tanggal = $('.tanggal');
        const input_telp = $('.telp');

        info_sandi.hide()
        data_sandi.hide()
        info_data.hide()
        cek_data.hide()
        link_login_pas.hide()
        input_username.hide()
        input_tanggal.hide()
        input_telp.hide()

        cek_email.click(() => {
            info_sandi.hide()
            info_email.hide()
            info_data.show()

            input_email.hide()
            input_username.show()
            input_tanggal.show()
            input_telp.show()

            link_login.hide()
            link_buat_akun.hide()
            link_login_pas.hide()

            cek_data.show()
            cek_email.hide()
        })
        cek_data.click(() => {
            info_sandi.show()

            input_email.hide()
            input_username.hide()
            input_tanggal.hide()
            input_telp.hide()

            link_login_pas.show()
            link_login.hide()
            link_buat_akun.hide()

            cek_data.hide()
            cek_email.hide()
        })
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

</body>

</html>