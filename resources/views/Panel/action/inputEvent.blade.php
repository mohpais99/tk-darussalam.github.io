@extends('Panel.app')

@section('content')
    <div class="block-header">
        <ol class="breadcrumb">
            <li>
                <a href="/panel">
                    <i class="material-icons">home</i> Home
                </a>
            </li>
            <li>
                <a href="/event-tk-jaya">
                    <i class="material-icons">perm_media</i> Data Event
                </a>
            </li>
            <li class="active">
                <i class="material-icons">add</i> Input Data Event
            </li>
        </ol>
    </div>
    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2 style="font-size: 24px">Input Gellery TK Jaya</h2>
                </div>
                <div class="body">
                    <form action="/event-tk-jaya/store" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group form-float">
                            <label for="" class="control-label">Nama Event</label>
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_event" placeholder="Input nama event...">
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="" class="control-label">Foto Event</label>
                            <div class="form-line">
                                <input type="date" class="form-control" name="tanggal_event">
                                <div class="help-info">MM-DD-YY format</div>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label for="" class="control-label">Tanggal event</label>
                            <div class="form-line">
                                <input type="file" class="form-control" name="foto">
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