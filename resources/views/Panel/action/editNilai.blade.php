@extends('Panel.app')

@section('content')
    <div class="row clearfix">
        @include('Panel.inc.side')
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <form class="form-horizontal" action="/data-nilai/{{$nilai->id}}/update" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <label for="NameSurname" class="form-label">Perkembangan {{$nilai->getPelajaran()}}</label>
                        <div class="form-group">                  
                            <img src="/images/nilai/{{$nilai->gambar}}" width="100" height="100">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-line">
                                    <input type="file" name="gambar">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">                  
                            <div class="col-sm-12 col-md-12">
                                <div class="form-line">
                                    <textarea id="konten" name="deskripsi" cols="105" rows="3" required>{!! stripslashes($nilai->deskripsi) !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-15">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger waves-effect" data-dismiss="modal">CANCEL</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>

        var konten = document.getElementById("konten");
            CKEDITOR.replace(konten,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    </script>
@endsection