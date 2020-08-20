<!doctype html>
<html>

<head>
    <title>Selamat Datang Di LPPK</title>
    <link rel="icon" href="img/logo.png" sizes="32x32" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" /> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        #sticky-footer {
            flex-shrink: none;
            background-color: #33AEFF;
        }

        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        .jumbo {
            background-image: url("/img/jumbo.png");
            background-repeat: repeat;
        }

        /* .btn-primary,
        .btn-primary:active,
        .btn-primary:visited {
            background-color: #4389fa !important;
        }

        .btn-primary:hover {
            background-color: #3f7de0 !important;
        } */
    </style>
</head>

<body class="">
    <div class="jumbotron jumbotron-fluid pt-5 shadow-lg jumbo">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-8 pt-3">
                    <h2 class="pb-3 display-4">Selamat Datang di Fakultas Tekhnik Universitas Nurul Jadid</h2>
                    <div class="mt-2 font-weight-light font-italic pb-5">Sebuah Lembaga Pengembangan Profesionalitas dan Kewirausahaan yang di kembangkan oleh Universitas Nurul Jadid untuk mengembangkan minat dan kemampuan tiap individu </div>
                    <!-- <ul style="list-style-type: circle;" class="pb-4"> -->
                    <h5 class="pt-2 font-italic font-weight-light"> Mengembangkan Minat Belajar</h5>
                    <h5 class="pt-2 font-italic font-weight-light"> Menyediakan Tenaga Mengajar Yang Profesional</h5>
                    <h5 class="pt-2 font-italic font-weight-light"> Layanan Terbaik Untuk Peserta Didik</h5>
                    <!-- </ul> -->
                </div>
                <div class="col-sm-4 pt-5">
                    <form action="/" method="POST" class="user">
                        <?php if (isset($failed)) : ?>
                            <div class="alert alert-danger" role="alert"> Username/password salah! </div>
                        <?php endif; ?>
                        <div class="input-group mb-3 ">
                            <input type="text" class="form-control tf rounded-left bg-white border-right-0" placeholder="Masukkan Username" aria-label="Username" aria-describedby="basic-addon1" name="username" autofocus=true>
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-right bg-white border-left-0"><i class="fas fa-at"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control tf rounded-left bg-white border-right-0" id="exampleInputPassword" placeholder="Masukkan Password" name="password">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-right bg-white border-left-0"><i class="fas fa-lock"></i></span>
                            </div>
                        </div>
                        <div class="form-group d-flex flex-row align-items-center justify-content-center">
                            <!-- <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div> -->
                            <button type="submit" class="btn btn-primary pr-5 pl-5">Login</button>
                        </div>

                        <hr>
                        <div class="text-center">
                            <a class="small text-white text-decoration-none" href="/lupa_password">
                                Lupa Password ?
                            </a>
                        </div>
                        <div class="text-center text-white">
                            <a class="small text-decoration-none text-white " href="/daftar">
                                Buat Akun Baru !
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-white">
        <div class="row">
            <div class="col-sm-10">
                <h4 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Peserta</h4>
                <ol class="decimal pb-3">
                    <li class="font-weight-bold" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Cara Membuat Akun ?</li>
                    <p class="font-weight-normal" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Langkah langkah melakukan pembuatan akun peserta adalah :</p>
                    <ol class="decimal mt-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                        <li style="margin-top: -12px">Pada halaman awal pilihlah belum punya akun</li>
                        <li>Isi data diri yang dibutuhkan</li>
                        <li>Tekan tombol buat akun peserta</li>
                        <li style="margin-bottom: 10px;">Akun siap untuk digunakan</li>
                    </ol>
                    <li class="font-weight-bold" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Apakah Pelayanan Bagus ?</li>
                    <p class="font-weight-normal" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Pelayanan kami usahakan terbaik untuk pelanggan dan mementingkan kenyamanan pelanggan.</p>
                    <li class="font-weight-bold" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Apakah Tenaga Pengajar Berkualitas ?</li>
                    <p class="font-weight-normal" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Untuk tenaga pengajar atau tentor kami sediakan sudah memiliki sertifikat dan dapat di jamin kualitasnya.</p>
                </ol>
                <h4 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Tentor</h4>
                <ol class="decimal">
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Cara Mendaftar Akun</li>
                    <p class="font-weight-normal" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Langkah langkah melakukan pembuatan akun tentor adalah :</p>
                    <ol class="decimal mt-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                        <li style="margin-top: -12px">Pada halaman awal pilihlah belum punya akun</li>
                        <li>Di bawah tombol daftar sebagai murid terdapat pilihan unttuk mendaftar sebagai tentor</li>
                        <li>Isi data diri yang dibutuhkan</li>
                        <li>Tekan tombol buat akun tentor</li>
                        <li style="margin-bottom: 10px;">Akun siap untuk digunakan</li>
                    </ol>
                    <li data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Syarat Menjadi Tentor</li>
                    <p class="font-weight-normal" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Berikut adalah syarat menjadi tentor :</p>
                    <ol class="decimal mt-0" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                        <li style="margin-top: -12px">Harus sabar dalam mengajar peserta</li>
                        <li>Lulus ujian dalam materi pelajaran yang ingin di ajar</li>
                        <li>Tekun dan ulet dalam mengajar</li>
                        <li style="margin-bottom: 10px;">Harus niat</li>
                    </ol>
                    <!-- <li>Cara Melakukan Pengajuan Mengajar</li>
                    <p class="font-weight-normal">Berikut adalah syarat menjadi tentor :</p>
                    <ol class="decimal mt-0">
                        <li style="margin-top: -12px">Harus sabar dalam mengajar peserta</li>
                        <li>Lulus ujian dalam materi pelajaran yang ingin di ajar</li>
                        <li>Tekun dan ulet dalam mengajar</li>
                        <li style="margin-bottom: 10px;">Harus niat</li> -->
                </ol>
                </ol>
            </div>
        </div>

    </div>
    <div class="container text-white">
        <div class="row justify-content-center mt-0 pt-5">
            <div class="col-lg-7 col-sm-7 ">
                <h5 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Kata Kata Penyemangat :</h5>
                <h6 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <p class="font-weight-bold mb-1">KH. Zaini Mun'im:</p>
                    <p class="font-weight-light font-italic pb-3">"Orang yang hidup di Indonesia kemudian tidak melakukan perjuangan, dia telah berbuat maksiat. Orang yang hanya memikirkan masalah pendidikannya sendiri, maka orang itu telah berbuat maksiat. Kita semua harus memikirkan perjuangan rakyat banyak."</p>
                    <hr class="pt-2">
                </h6>
                <h6 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <p class="font-weight-bold mb-1">Muhammad Taufiq Hidayatullah</p>
                    <p class="font-weight-light font-italic pb-3">"Kelemahan terbesarmu adalah ketika kamu menyerah dan kehebatan terbesarmu adalah ketika kamu mencoba sekali lagi."</p>
                    <hr class="pt-2">
                </h6>
                <h6 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <p class="font-weight-bold mb-1">KH. Abdul Hamid Wahid, M. Ag. (Rektor UNUJA):</p>
                    <p class="font-weight-light font-italic pb-3">"Mari kita bersama-sama menjadi insan-insan yg unggul, inovatif dan berkeadaban. Kita hadir bukan hanya sekedar pelengkap, tetapi kita mampu memberikan warna, mampu memberikan kontribusi, dengan hadir sepenuhnya dan seutuhnya."</p>
                </h6>
            </div>
        </div>
    </div>
    <br>

    <div class="row ml-3 mr-3 justify-content-around">
        <div class="col-sm-5 col-md-3 text-center align-self-center" data-aos="zoom-in-up" data-aos-duration="1000">
            <a href="https://www.google.com/maps/place/Universitas+Nurul+Jadid/@-7.709959,113.498029,15z/data=!4m5!3m4!1s0x0:0xf34d3ceb3f9ddf2c!8m2!3d-7.709959!4d113.498029" target="blank" class="text-decoration-none">
                <span style="font-size: 40px; color: aliceblue;"><i class="fas fa-map-marker-alt"></i></span>
                <p class="text-white ">
                    Jl. Pondok Pesantren Nurul Jadid, Karanganyar <br> Paiton, Probolinggo, Jawa Timur <br> (0335) 771732

                </p>
            </a>
        </div>
        <div class="col-sm-3 " data-aos="zoom-in-up" data-aos-duration="1000">
            <center>
                <img src="/img/logo.png" style="width: 100px; height: 100px; opacity: 0.8;">
            </center>
            <div class="text-white h6 font-weight-normal pt-2">
                LPPK adalah suatu lembaga dibawah naungan Universitas Nurul Jadidi dan digunakan untuk menyalurkan kreatifitas untuk memompang minat dan bakat dari mahasiswa, dan diharapkan dapat bermanfaat bagi Universitas Nurul Jadid dan sekitarnya.
            </div>
            <div class="text-white justify-content-around pt-1 pb-5">
                <a href="https://web.facebook.com/universitasnuruljadid" target="blank" class="text-decoration-none text-white pl-1"><i class="fab fa-facebook-square" style="font-size: 17px;"></i></a>
                <a href="https://www.youtube.com/channel/UCq-VDezP1Vj4pEOYiPn3Qxw" target="blank" class="text-decoration-none text-white pl-1"><i class="fab fa-youtube" style="font-size: 17px;"></i></a>
                <a href="https://www.instagram.com/unujaofficial/?hl=id" target="blank" class="text-decoration-none text-white pl-1"><i class="fab fa-instagram" style="font-size: 17px;"></i></a>
                <a href="http://" target="blank" class="text-decoration-none text-white pl-1"><i class="fas fa-link " style="font-size: 17px;"></i></a>
            </div>
        </div>
        <!-- <div class="col-12 col-sm-6 col-md-3 text-center" data-aos="zoom-in-up" data-aos-duration="1000">
            <a href="https://www.youtube.com/channel/UCq-VDezP1Vj4pEOYiPn3Qxw" target="blank" class="text-decoration-none">
                <span style="font-size: 40px; color: aliceblue;"><i class="fab fa-youtube"></i></span>
                <p class="text-white ">
                    Universitas Nurul Jadid
                </p>
            </a></div>
        <div class="col-12 col-sm-6 col-md-3 text-center" data-aos="zoom-in-up" data-aos-duration="1000">
            <a href="https://web.facebook.com/universitasnuruljadid" target="blank" class="text-decoration-none">
                <span style="font-size: 40px; color: aliceblue;"><i class="fab fa-facebook-square"></i></span>
                <p class="text-white "> Universitas Nurul Jadid</p>
            </a></div>
        <div class="col-12 col-sm-6 col-md-3 text-center" data-aos="zoom-in-up" data-aos-duration="1000">
            <a href="https://www.instagram.com/unujaofficial/?hl=id" target="blank" class="text-decoration-none">
                <span style="font-size: 40px; color: aliceblue;"><i class="fab fa-instagram"></i></span>
                <p class="text-white ">
                    Universitas Nurul Jadid
                </p>
            </a></div> -->
    </div>
    <footer id="sticky-footer" class="py-2 text-white shadow">
        <div class="container text-center">
            <small>Copyright &copy; LPPK Universitas Nurul Jadid 2020 </small>
        </div>
    </footer>



    <!-- Tutorial Bootstrap -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- COPAS TEMPLATE -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>