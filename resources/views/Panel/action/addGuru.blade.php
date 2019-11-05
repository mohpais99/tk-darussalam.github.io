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
                    <form action="/data-guru/create/store" method="POST">
                        {{csrf_field()}}
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" required>
                                <label class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control"  name="username" value="guru{{date('d').$count_U}}" readonly>
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control"  name="NUPTK" maxlength="16" minlength="16" required>
                                <label class="form-label">NUPTK</label>
                            </div>
                            <div>
                                {{$errors->first('NUPTK')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control show-tick" name="jenis_kelamin" required>
                                <option value="L" >Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="no_telp" maxlength="12" minlength="9" required>
                                <label class="form-label">No Telpon</label>
                            </div>
                        </div>
                        @if ($count_C === 0)
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control show-tick" name="kelas_id" required>
                                <option disabled>Pilih kelas</option>
                                    @foreach ($class as $item)
                                        <option value="{{$item->id}}" {{$item->disabled()}}>Wali {{$item->nama_kelas}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
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
@endsection