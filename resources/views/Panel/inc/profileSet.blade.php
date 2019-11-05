<form class="form-horizontal" action="/profile/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    @if (Auth()->user()->role === 'superadmin' || Auth()->user()->role === 'guru')
        <div class="form-group">
            <label for="NameSurname" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <div class="form-line">
                    <input type="text" class="form-control" name="name" value="{{$user->getName()}}" required>
                </div>
            </div>
        </div>
        @else
        <div class="form-group">
            <label for="NameSurname" class="col-sm-2 control-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <div class="form-line">
                    <input type="text" class="form-control" name="nama_lengkap" value="{{$user->siswa->nama_lengkap}}" required>
                </div> 
            </div>
        </div>
        <div class="form-group">
            <label for="NameSurname" class="col-sm-2 control-label">Nama Panggilan</label>
            <div class="col-sm-10">
                <div class="form-line">
                    <input type="text" class="form-control" name="nama_panggilan" value="{{$user->siswa->nama_panggilan}}" required>
                </div> 
            </div>
        </div>
        @endif
        <div class="form-group">
                <label for="NameSurname" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" value="{{$user->username}}" required>
                    </div>
                </div>
            </div>
        <div class="form-group">
            <label for="Email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <div class="form-line">
                    <input type="email" class="form-control" name="email" value="{{$user->email}}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputSkills" class="col-sm-2 control-label">No Telp</label>
            <div class="col-sm-10">
                <div class="form-line">
                    <input type="text" class="form-control" name="no_telp" value="{{$user->no()}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputSkills" class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-line">
                    <select class="form-control show-tick" name="jenis_kelamin">
                        <option value="L" <?php if($user->getKelamin() === 'Laki-Laki') { ?>selected <?php } ?>>Laki-Laki</option>
                        <option value="P" <?php if($user->getKelamin() === 'Perempuan') { ?>selected <?php } ?>>Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="foto" class="col-sm-2 control-label">Foto</label>
            <div class="col-sm-10">
                <div class="form-line">
                    <input type="file" class="form-control" name="foto" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputExperience" class="col-sm-2 control-label">Experience</label>

            <div class="col-sm-10">
                <div class="form-line">
                    <textarea class="form-control" name="alamat" rows="3" placeholder="{{$user->getAlamat()}}">{{$user->getAlamat()}}</textarea>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">SUBMIT</button>
            </div>
        </div>
    </form>