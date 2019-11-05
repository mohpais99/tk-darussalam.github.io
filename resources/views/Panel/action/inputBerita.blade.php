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
                    <i class="material-icons">perm_media</i> Data Guru
                </a>
            </li>
            <li class="active">
                <i class="material-icons">content_copy</i> Data News
            </li>
        </ol>
    </div>
    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="font-size: 24px">Input News</h2>
                </div>
                <div class="body">
                    <form action="/pemberitahuan/store" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{Auth()->User()->id}}">
                        <div class="form-group form-float">
                            <label for="" class="control-label">Judul Berita</label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_berita">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="" class="control-label">Isi Berita</label>
                            <div class="form-line">
                                <textarea class="form-control" name="isi_berita">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group form-float align-right">
                            <button class="btn btn-primary waves-effect" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
    </div>
@endsection