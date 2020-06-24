<form>
    <div class="form-group row">
        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama">
        </div>
    </div>
    <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tempat_lahir">
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="tanggal_lahir">
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-10">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki_laki">
                <label class="form-check-label" for="laki_laki">Laki Laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="perempuan">
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat">
        </div>
    </div>
    <div class="form-group row">
        <label for="rt" class="col-sm-2 col-form-label">RT / RW </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="rt">
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="rw">
        </div>
    </div>
    <div class="form-group row">
        <label for="kel/desa" class="col-sm-2 col-form-label">Kel/Desa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="desa">
        </div>
    </div>
    <div class="form-group row">
        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kecamatan">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2">Checkbox</div>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>