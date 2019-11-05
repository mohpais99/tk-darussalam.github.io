<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Nilai;
use App\Siswa;
use App\Tabungan;


class PrintController extends Controller
{
    public function print($id)
    {
        $siswa = Siswa::find($id);
        $tabungan = Tabungan::where('siswa_id','=',$siswa->id)->get();        
        
        $pdf = PDF::loadview('Panel.pages.print_tabungan', ['tabungan' => $tabungan])->setPaper('a4','portrait');
        return $pdf->stream();
    }

    public function printNilai($id)
    {
        $siswa = Siswa::find($id);
        $nilai = Nilai::where('siswa_id','=',$siswa->id)->get();        
        
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('Panel.pages.printNilai', ['nilai' => $nilai])->setPaper('a4','portrait');
        return $pdf->stream();
        // return view('Panel.pages.printNilai')->with('nilai', $nilai);
    }

    public function printTabungan($id)
    {
        $siswa = Siswa::find($id);
        $tabungan = Tabungan::where('siswa_id','=',$siswa->id)->get();        
        
        $pdf = PDF::loadview('Panel.pages.print_tabungan', ['tabungan' => $tabungan])->setPaper('a4','portrait');
        return $pdf->stream();
    }
}
