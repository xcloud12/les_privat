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

    <!-- custom validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>

    <!-- script custom Validation -->
    <script>
        $(document).ready(function() {
            $('#pendaftaran').validate({
                onclick: false, // <-- add this option
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    email: "Please enter a valid email address"
                },
                errorPlacement: function(error, element) {
                    alert(error.text());
                }
            });
        });
    </script>
    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elements = document.getElementsByTagName("INPUT");
            for (var i = 0; i < elements.length; i++) {
                elements[i].oninvalid = function(e) {
                    e.target.setCustomValidity("");
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity("Tidak Boleh Kosong");
                    }
                };
                elements[i].oninput = function(e) {
                    e.target.setCustomValidity("");
                };
            }
        })
    </script> -->

    <!-- <script>
        $("#pendaftaran").validate({
            rules: {
                nama: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                // confirm_password1: {
                //     required: true,
                //     minlength: 5,
                //     equalTo: "#password1"
                // },
                email: {
                    required: true,
                    email: true
                }
                // agree1: "required"
            },
            messages: {
                nama: "Please enter your firstname",
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                // confirm_password1: {
                //     required: "Please provide a password",
                //     minlength: "Your password must be at least 5 characters long",
                //     equalTo: "Please enter the same password as above"
                // },
                email: "Please enter a valid email address",
                // agree1: "Please accept our policy"
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents(".col-sm-5").addClass("has-feedback");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!element.next("span")[0]) {
                    $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
                }
            },
            success: function(label, element) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!$(element).next("span")[0]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
                $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
                $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
            }
        });
        // });
    </script> -->

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