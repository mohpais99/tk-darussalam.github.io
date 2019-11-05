<html>
<head>
	<title>Laporan Tabungan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 12pt;
		}
	</style>
	<center>
		<h5>Tabungan Siswa</h4>
	</center>

    <table class="table table-hover ">
        <thead>
            <tr>
                <th></th>
                <th>Tanggal Transaksi</th>
                <th>Uang Masuk</th>
                <th>Uang Keluar</th>
                <th>Total Tabungan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($tabungan as $item)
            <tr>
                <td>{{$no}}</td>
                <td>{{$item->Date()}}</td>
                <td>Rp {{number_format($item->uang_masuk)}}</td>
                <td>Rp {{number_format($item->uang_keluar)}}</td>
                <td>Rp {{number_format($item->total)}}</td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach                      
        </tbody>

    </table>

</body>
</html>