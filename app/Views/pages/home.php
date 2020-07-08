<!doctype html>
<html>

<head>
    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="css/mine.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-8 pt-3">
                <h2 class="pb-3 judul">Selamat Datang di LPPK Universitas Nurul Jadid</h2>
                <h3 class="mt-3">Visi</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis minima ipsam excepturi illo non cumque maiores cum facilis. Nemo repudiandae ut at quis magni consectetur doloremque, nihil maxime perspiciatis sequi?</p>

                <h3 class="mt-2">Misi</h3>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia tempore quisquam, aliquam iste quas dolor quo eius officiis? Impedit vel rem ab accusamus. Animi voluptatum placeat aspernatur ad, fugiat hic.</p>
            </div>
            <div class="col-sm-4 pt-5">
                <form action="/" method="POST" class="user">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control tf rounded-left bg-white border-right-0" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" autofocus=true>
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-right bg-white border-left-0"><i class="fas fa-at"></i></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control tf rounded-left bg-white border-right-0" id="exampleInputPassword" placeholder="Password" name="password">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-right bg-white border-left-0"><i class="fas fa-lock"></i></span>
                        </div>
                    </div>
                    <div class="form-group d-flex flex-row align-items-center justify-content-between">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-50">Login</button>
                    </div>

                    <hr class="pb-3 pt-4 ">
                    <div class="text-center">
                        <a class="small" href="#">Lupa Password ?</a>
                    </div>
                    <div class="text-center">
                        <a class="small " href="/daftar">Buat Akun Baru !</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-5"><i class="fas fa-user"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, iure tempora earum cupiditate vel aspernatur quo debitis minus ipsum repellendus sequi pariatur, provident perspiciatis sed dolorem! Exercitationem reprehenderit eos nesciunt!
                <hr class="pt-2 pb-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nisi praesentium quidem, laborum sequi ipsum et quos incidunt modi odit qui vero commodi molestias dolores culpa non mollitia inventore debitis.
            </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 text-center">
            <a href="https://twitter.com/@unuja" target="blank">
                <span style="font-size: 48px; color: Dodgerblue;"><i class="fab fa-twitter-square"></i></span>
                <p class="text-body">
                    @Unuja.ac.id
                </p>
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-center">
            <a href="https://www.youtube.com/channel/UCq-VDezP1Vj4pEOYiPn3Qxw" target="blank">
                <span style="font-size: 48px; color: red;"><i class="fab fa-youtube"></i></span>
                <p class="text-body">
                    Universitas Nurul Jadid
                </p>
            </a></div>
        <div class="col-12 col-sm-6 col-md-3 text-center">
            <a href="https://web.facebook.com/universitasnuruljadid" target="blank">
                <span style="font-size: 48px; color: #3b5998;"><i class="fab fa-facebook-square"></i></span>
                <p class="text-body"> Universitas Nurul Jadid</p>
            </a></div>
        <div class="col-12 col-sm-6 col-md-3 text-center">
            <a href="https://www.instagram.com/unujaofficial/?hl=id" target="blank">
                <span style="font-size: 48px; color: #3f729b;"><i class="fab fa-instagram"></i></span>
                <p class="text-body">
                    Universitas Nurul Jadid
                </p>
            </a></div>
    </div>
    <p class="text-center font-weight-bolder mt-5">
        Universitas Nurul Jadid &copy; 2020
    </p>


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
</body>

</html>