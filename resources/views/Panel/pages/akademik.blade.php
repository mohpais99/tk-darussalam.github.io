@extends('Panel.app')

@section('content')
<!-- List Example -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Nilai Akademik
                </h2>
            </div>
            <div class="body">
                @foreach ($nilai as $item)
                    <div class="media">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <img class="media-object" src="/images/nilai/{{$item->gambar}}" width="64" height="64">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Perkembangan {{$item->getPelajaran()}}</h4> {!! stripslashes($item->deskripsi) !!}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="footer align-center" style="padding-bottom: 10px;">
                <a href="/print-nilai/{{$siswa->id}}" class="btn btn-primary">Print Nilai</a>
            </div>
        </div>
    </div>
</div>
<!-- #END# List Example -->
@endsection