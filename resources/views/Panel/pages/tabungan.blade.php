@extends('Panel.app')

@section('content')
<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Tabungan
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                                $no=1
                            @endphp
                            @foreach ($tab as $item)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$item->Date()}}</td>
                                    <td>Rp {{number_format($item->uang_masuk)}}</td>
                                    <td>Rp {{number_format($item->uang_keluar)}}</td>
                                    <td>Rp {{number_format($item->total)}}</td>
                                </tr>
                            @php
                                $no++
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection