@extends('Panel.app')

@section('content')
    <div class="row clearfix">
        @include('Panel.inc.side')
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                    Profil Siswa
                                </a>
                            </li>
                            @if (Auth()->user()->role === 'superadmin')
                            <li role="presentation">
                                <a href="#tabungan" aria-controls="tabungan" role="tab" data-toggle="tab">
                                    Tabungan Siswa
                                </a>
                            </li>
                            @endif
                            <li role="presentation"><a href="#nilai" aria-controls="settings" role="tab" data-toggle="tab">Nilai Siswa</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="profile">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" value="{{$siswa->nama_lengkap}}" required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Nama Panggilan</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" value="{{$siswa->nama_panggilan}}" required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="email" class="form-control" name="username" value="{{$siswa->user->username}}" required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="email" class="form-control" name="email" value="{{$siswa->user->email}}" required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">No Telp</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="no_telp" value="{{$siswa->no_telp}}" required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputExperience" class="col-sm-2 control-label">Alamat</label>

                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <textarea class="form-control" name="InputExperience" rows="3"  readonly>{{$siswa->alamat}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 align-right">
                                            @if ($check === 0)
                                                <a href="/data-nilai/{{$siswa->id}}" class="btn btn-primary waves-effect">Input Nilai</a>
                                            @endif
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="tabungan">
                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Uang Masuk</th>
                                                <th>Uang Keluar</th>
                                                <th>Total Tabungan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($tab as $item)
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$item->Date()}}</td>
                                                <td>Rp {{number_format($item->uang_masuk)}}</td>
                                                <td>Rp {{number_format($item->uang_keluar)}}</td>
                                                <td>Rp {{number_format($item->total)}}</td>
                                            </tr>
                                            @php
                                                $no++;
                                            @endphp
                                            @endforeach                      
                                        </tbody>
                                    </table>
                                </div>
                                @if ($con > 0)
                                <a href="/print-tabungan/{{$siswa->id}}" class="btn btn-primary">Print Tabungan</a>
                                @endif
                                <div class="align-right">
                                    <button type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#smallModal"><i class="material-icons">add</i></button>
                                    @if ($con > 0)
                                    <button type="button" class="btn bg-yellow btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#smallModal2"><i class="material-icons">edit</i></button>
                                    @endif
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="nilai">
                                <div class="table-responsive">
                                    @foreach ($nilai as $item)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="/images/nilai/{{$item->gambar}}" width="64" height="64">
                                            </a>
                                        </div>
                                        <div class="media-body" style="padding: 10px 0 0">
                                            <h4 class="media-heading">Perkembangan {{$item->getPelajaran()}}</h4> {!! stripslashes($item->deskripsi) !!}
                                        </div>
                                        <div class="media-right" style="padding: 10px 4px 0 0">
                                            <a href="/data-nilai/{{$item->id}}/edit" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle="modal">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    @endforeach
                                </div>
                                @if ($check === 0 && Auth()->user()->role != 'superadmin')
                                    <div class="align-center">
                                        <a href="/data-nilai/{{$siswa->id}}" type="button" class="btn btn-primary btn-lg">Input Nilai</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Panel.action.addTabungan')
    @include('Panel.action.ambilTabungan')
@endsection