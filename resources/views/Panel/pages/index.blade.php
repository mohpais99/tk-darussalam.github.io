@extends('Panel.app')

@section('content')
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="info-box bg-blue hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person</i>
                </div>
                <div class="content">
                    <div class="text">GURU</div>
                    <div class="number count-to" data-from="0" data-to="{{$guru}}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person</i>
                </div>
                <div class="content">
                    <div class="text">SISWA</div>
                    <div class="number count-to" data-from="0" data-to="{{$siswa}}" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->
    @foreach ($newsGet as $item)
        
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-green">
                    @if (Auth()->user()->role === 'superadmin')
                    <button id="catchId" dataId="{{$item->id}}" class="btn btn-danger right">X</button>
                    @endif
                    <h2><i class="material-icons">info</i> {{$item->judul_berita}}</h2>
                    <div class="right">
                        <span id="countdown" class="timer"></span>
                    </div>
                </div>
                <div class="body">
                    {{$item->isi_berita}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
@stop
@section('js')
<script>
    $('#catchId[dataId]').click(function() {
        var id = $(this).attr('dataId');
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this news with id = "+id+"??",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/pemberitahuan/"+id+"/delete"
        } else {
            swal("Deleted data canceled!!");
        }
        });
    })
    
</script>
@endsection