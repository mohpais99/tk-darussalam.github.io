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
                    <i class="material-icons">library_books</i> Library
                </a>
            </li>
            <li class="active">
                <i class="material-icons">assignment</i> Data Siswa
            </li>
        </ol>
    </div>
    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="font-size: 24px">Data Siswa</h2>
                    @if (Auth()->user()->role === 'superadmin')
                        <a href="/datasiswa/create" class="btn btn-success" style="margin-top: 7px">
                            <i class="material-icons">add</i>
                        </a>
                    @endif
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Foto</th>
                                    <th>NIS</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Kelas</th>
                                    <th>Semester</th>
                                    <th>Alamat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($for as $item)                                    
                                <tr>
                                    <td>{{$no}}</td>
                                    <td><img src="{{$item->defaultFoto()}}" alt="User" width="38" height="38"></td>
                                    <td>{{$item->NIS}}</td>
                                    <td>{{$item->nama_lengkap}}</td>
                                    <td>{{$item->nama_panggilan}}</td>
                                    <td>{{$item->tempat_lahir}}, {{$item->getDate()}}</td>
                                    <td>{{$item->kelas->nama_kelas}}</td>
                                    <td>Semester {{$item->semester}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>
                                        @if (Auth()->user()->role === 'superadmin' || $guru->kelas_id === $class->id)
                                            <a href="/data-siswa/{{$item->id}}/edit" class="btn bg-orange btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a id="catchId" class="btn bg-red btn-circle waves-effect waves-circle waves-float" dataId="{{$item->id}}" >
                                                <i class="material-icons">delete_forever</i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                @php
                                    $no++
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
    </div>
@stop

@section('js')
<script>
    $('#catchId[dataId]').click(function() {
        var id = $(this).attr('dataId');
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this teacher with ID "+id+"??",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/data-siswa/"+id+"/destroy"
        } else {
            swal("Deleted data canceled!!");
        }
        });
    })
</script>
@endsection