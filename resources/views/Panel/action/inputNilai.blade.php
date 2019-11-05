@extends('Panel.app')

@section('content')
    <div class="row clearfix">
        @include('Panel.inc.side')
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <form class="form-horizontal" action="/data-nilai/{{$siswa->id}}/store" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @foreach ($mapel as $item)
                        <label for="NameSurname" class="form-label">Perkembangan {{$item->nama_pelajaran}}</label>
                        <div class="form-group">                  
                            <div class="col-sm-12 col-md-12">
                                <div class="form-line">
                                    <input type="file" name="gambar[]">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">                  
                            <div class="col-sm-12 col-md-12">
                                <div class="form-line">
                                    <input type="hidden" name="mapel_id[]" value="{{$item->id}}">
                                    <input type="hidden" name="siswa_id[]" value="{{$siswa->id}}">
                                    <textarea id="konten" name="deskripsi[]" cols="105" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="form-group m-t-15">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                <a href="/data-siswa/{{$siswa->id}}/edit" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</a>
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
            CKEDITOR.replaceAll(konten,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
    </script>
@endsection