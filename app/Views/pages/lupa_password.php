<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Lupa Kata Sandi</title>
    <link rel="icon" href="img/logo.png" sizes="32x32" type="image/png" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <style>
        img {
            max-width: 50%;
        }

        .fail-text {
            display: none;
        }

        #form2,
        #form3 {
            display: none;
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container pt-5">
        <!-- Outer Row -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <img src="img/forgot1.jpg" />
                    <div class="flex-grow-1">
                        <h4 class="text-gray-900 text-center">Lupa Kata Sandi Anda ?</h4>
                        <div id="form1">
                            <p class="text-center">Silahkan masukkan email akun anda untuk kami cek</p>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="rounded-pill form-control" id="email" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong');" oninput="this.setCustomValidity('')" />
                                <small class="form-text text-danger fail-text" id="email-fail">Akun tidak ditemukan.</small>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="cek_email()" id="btn_email">Cek Email</button>
                        </div>
                        <div id="form2">
                            <p class="text-center">Kami ingin memastikan jika ini memang anda</p>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="rounded-pill form-control" id="username" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="rounded-pill form-control" id="tgl_lahir" />
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="number" class="rounded-pill form-control" id="telp" />
                            </div>
                            <button type="button" class="btn btn-primary" onclick="verifikasi()" id="btn_kirim">Kirim</button>
                            <br>
                            <small class="form-text text-danger fail-text" id="akun-fail">Gagal verifikasi akun.</small>
                        </div>
                        <div id="form3" class="text-center">
                            <p class="mb-0">Password anda berhasil direset.</p>
                            <p>Silahkan gunakan password berikut untuk login</p>
                            <h2 id="new_pass">1c7856178c6820</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/js/lupa_pass.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>
</body>

</html>