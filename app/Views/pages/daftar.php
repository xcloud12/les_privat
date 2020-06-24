<form action="/submit" method="POST">
    <div class="form-group row">
        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="Passowrd" name="password" placeholder="Masukkan Kata Sandi" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder=" Masukkan Tempat Lahir">
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="2020-06-06" min="1970-01-01">
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" checked>
                <label class="custom-control-label" for="laki_laki">Laki Laki</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
                <label class="custom-control-label" for="perempuan">Perempuan</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="level" class="col-sm-2 col-form-label">Daftar Sebagai : </label>
        <div class="col-sm-10">
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="level" id="Tentor" value="tentor">
                <label class="custom-control-label" for="Tentor">Tentor / Pengajar</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="level" id="peserta" value="peserta">
                <label class="custom-control-label" for="peserta">Peserta</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
    </div>
</form>