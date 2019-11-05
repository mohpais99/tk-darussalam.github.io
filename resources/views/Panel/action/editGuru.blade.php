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
                    <h2 style="font-size: 24px">Edit Data Guru</h2>
                </div>
                <div class="body">
                    <form action="/data-guru/{{$guru->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="form-group form-float" style="border-bottom: 1px solid">
                            <b>Name:</b>
                            <input type="text" class="form-control" value="{{$guru->name}}" name="name">
                        </div>
                        <div class="form-group form-float" style="border-bottom: 1px solid">
                            <b>NIP:</b>
                            <input type="text" class="form-control" value="{{$guru->NUPTK}}" maxlength="16" minlength="16" name="NUPTK">
                        </div>
                        <div class="form-group">
                            <b>Status:</b>
                            <select class="form-control show-tick" name="status" required>
                                    @if ($guru->status === 'Aktif') {
                                        <option value="{{$guru->status}}">{{$guru->status}}</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    @else
                                        <option value="{{$guru->status}}">{{$guru->status}}</option>
                                        <option value="Aktif">Aktif</option>
                                    @endif
                            </select>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
    </div>
@endsection