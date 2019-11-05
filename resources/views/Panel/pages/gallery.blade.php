@extends('Panel.app')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <div class="align-left">
                    <h2>
                        GALLERY
                        <small>All pictures taken from <a href="/" target="_blank">TK Jaya</a></small>
                    </h2>
                </div>
                <div class="align-right">
                    <a href="/gallery-tk-jaya/create" class="btn btn-success"><i class="material-icons">add</i></a>
                </div>
            </div>
            <div class="body">
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    @foreach ($gallery as $item)
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <a href="images/gallery/{{$item->foto}}" data-sub-html="Demo Description">
                                <img class="img-responsive thumbnail" src="/images/gallery/{{$item->foto}}" style="width:332px; height:200px;">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection