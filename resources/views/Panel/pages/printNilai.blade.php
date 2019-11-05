<html>
<head>
	<title>Laporan Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	
    <div class="container-fluid">
        <hr></hr>
        <h1><center><font size="5" face="arial">TK DARUSSALAM</font></center></h1>
        <center><b>Jl. Bintara 8 no. 2 Bekasi Barat - 17134<b></center><br>
        <hr></hr>
        @foreach ($nilai as $item)
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img class="media-object" src="{{public_path('images/nilai/'.$item->gambar)}}" width="50" height="50">
                    </div>
                    <div class="col-md-9" style="padding: 5px 0 0 100px;">
                        <h4 class="media-heading"> Perkembangan {{$item->getPelajaran()}}</h4> {{$item->deskripsi}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>
