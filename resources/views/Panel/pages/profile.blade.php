@extends('Panel.app')

@section('content')
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="{{Auth()->user()->defaultFoto()}}" alt="AdminBSB - Profile Image" style="width: 128px; height: 128px; "/>
                    </div>
                    <div class="content-area">
                        <h3>{{Auth()->user()->getName()}}</h3>
                        @if (Auth()->user()->role === 'superadmin' || Auth()->user()->role === 'guru')
                            <p>{{Auth()->user()->getJabatan()}}</p>
                        @endif
                        @if (Auth()->user()->role === 'guru')
                            <p>{{Auth()->user()->role}} {{Auth()->user()->siswa->kelas->nama_kelas}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#setProfile" data-toggle="tab">
                                    Profil
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#setPassword" data-toggle="tab">
                                    Change Password
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="setProfile">
                                @include('Panel.inc.profileSet')                                        
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="setPassword">
                                @include('Panel.inc.passwordSet')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection