@extends('Panel.app')

@section('content')
    <div class="block-header">
        <ol class="breadcrumb">
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons">home</i> Home
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="material-icons">assignment</i> Data Guru
                </a>
            </li>
            <li class="active">
                <i class="material-icons">add</i> Data Guru
            </li>
        </ol>
    </div>
    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="font-size: 24px">Tambah Data Guru</h2>
                </div>
                <div class="body">
                    <form action="/data-siswa/create/store" method="POST">
                        {{csrf_field()}}
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_lengkap" required>
                                <label class="form-label">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_panggilan" required>
                                <label class="form-label">Nama Panggilan</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="tempat_lahir" required>
                                <label class="form-label">Tempat Lahir</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="date" class="form-control" name="tanggal_lahir" required>
                            </div>
                            <div class="help-info">Date Info example: Mount/Day/Year</div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control"  name="username" value="siswa{{date('d').$count_U}}" readonly>
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control"  name="NIS" minlength="6" maxlength="6" required>
                                <label class="form-label">NIS</label>
                            </div>
                            <div class="help-info">Please fill out 6 characters</div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="jenis_kelamin" >
                                <option value="L" >Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="no_telp" maxlength="12" minlength="10" required>
                                <label class="form-label">No Telpon</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="wali_murid" required>
                                <label class="form-label">Wali Murid</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control show-tick" name="kelas_id" required>
                                    <option disabled>Pilih kelas</option>
                                    @foreach ($class as $item)
                                        <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="semester" >
                                <option value="1" >Semester 1</option>
                                <option value="2">Semester 2</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                <label class="form-label">Alamat</label>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
    </div>

    
    <script>
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>

@endsection