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
                    <i class="material-icons">message</i> Pesan Masuk
                </a>
            </li>
        </ol>
    </div>
    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="font-size: 24px">Pesan Masuk</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Telpon</th>
                                    <th>Umur Anak</th>
                                    <th>Pesan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($pesan as $item)                                    
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->no_telp}}</td>
                                        <td>{{$item->umur}} Tahun</td>
                                        <td>{{$item->pesan}}</td>
                                        <td>
                                            <a id="catchId" class="btn bg-red btn-circle waves-effect waves-circle waves-float" dataId="{{$item->id}}" >
                                                <i class="material-icons">delete_forever</i>
                                            </a>
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
        text: "Once deleted, you will not be able to recover this message with ID "+id+"??",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/pesan/"+id+"/delete"
        } else {
            swal("Deleted data canceled!!");
        }
        });
    })
    
</script>
@endsection