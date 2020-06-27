<div class="row">
    <div class="col-sm-8 pt-3">
        <h2 class="pb-3 text-dark">Selamat Datang di LPPK Universitas Nurul Jadid</h2>
        <h3 class="mt-3">Visi</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis minima ipsam excepturi illo non cumque maiores cum facilis. Nemo repudiandae ut at quis magni consectetur doloremque, nihil maxime perspiciatis sequi?</p>

        <h3 class="mt-2">Misi</h3>
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia tempore quisquam, aliquam iste quas dolor quo eius officiis? Impedit vel rem ab accusamus. Animi voluptatum placeat aspernatur ad, fugiat hic.</p>
    </div>
    <div class="col-sm-4 pt-5">
        <form action="/" method="POST" class="user">
            <?php if (isset($failed)) : ?>
            <div class="alert alert-danger" role="alert">
                Username/Password salah
            </div>
            <?php endif; ?>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" aria-describedby="username" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
            </div>
            <div class="form-group d-flex flex-row align-items-center justify-content-between">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-user w-50">Login</button>
            </div>
        </form>
        <hr class="pb-3 pt-1 ">
        <div class="text-center">
            <a class="small" href="#">Lupa Password ?</a>
        </div>
        <div class="text-center">
            <a class="small " href="/daftar">Buat Akun Baru !</a>
        </div>
    </div>
</div>
<div class="row justify-content-center mt-5 pt-5">
    <div class="col-5"><i class="fas fa-user"></i>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, iure tempora earum cupiditate vel aspernatur quo debitis minus ipsum repellendus sequi pariatur, provident perspiciatis sed dolorem! Exercitationem reprehenderit eos nesciunt!
        <hr class="pt-2 pb-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nisi praesentium quidem, laborum sequi ipsum et quos incidunt modi odit qui vero commodi molestias dolores culpa non mollitia inventore debitis.
    </div>
</div>