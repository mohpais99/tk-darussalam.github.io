<div class="col-xs-12 col-sm-3">
    <div class="card profile-card">
        <div class="profile-header">&nbsp;</div>
        <div class="profile-body">
            <div class="image-area">
                <img src="{{$siswa->defaultFoto()}}" alt="AdminBSB - Profile Image" style="width: 128px; height: 128px; "/>
            </div>
            <div class="content-area">
                <h3>{{$siswa->nama_lengkap}}</h3>
                <p>Kelas {{$siswa->kelas->nama_kelas}}</p>
                <p>{{$siswa->NIS}}</p>
            </div>
        </div>
    </div>

    {{-- <div class="card card-about-me">
        <div class="header align-center">
            <h2>Nilai {{$siswa->name}}</h2>
        </div>
        <div class="body align-center">

            <ul>
                @foreach ($loop as $item)
                    <li>
                        <div class="title">
                            {{$item->mapels->pelajaran}}
                        </div>
                        <div class="content center" style="font-size:48px; color:#03A9F4;">
                            {{$item->nilai}}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div> --}}
</div>