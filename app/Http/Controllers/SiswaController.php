<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tabungan;
use App\Guru;
use App\Kelas;
use App\Nilai;
use App\Siswa;
use App\Pelajaran;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $class = Kelas::find($id);
        // $for = Siswa::all();
        $for = Siswa::where('kelas_id',$class->id)->orderBy('id','DESC')->get();
        $getID = Auth()->user()->id;
        $guru = Guru::where('user_id',$getID)->first();
        return view('Panel.pages.data.dataSiswa', compact('guru','class','for'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Kelas::all();
        $count_U = User::all()->count();
        return view('Panel.action.addSiswa', compact('count_U','class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val =request()->validate([
            'NIS' => 'numeric'
        ]);

        $data_U = new User;
        $data_U->role = 'siswa';
        $data_U->username = $request->username;
        $data_U->email = $request->username.'@student.ac.id';
        $data_U->password = bcrypt('123456');
        $data_U->remember_token = str_random(50);
        $data_U->save();
        
        $request->request->add(['user_id' => $data_U->id]);  
            $cr_G = new Siswa;
            $cr_G->user_id = $request->user_id;
            $cr_G->kelas_id = $request->kelas_id;
            $cr_G->NIS = $request->NIS;
            $cr_G->nama_lengkap = $request->nama_lengkap;
            $cr_G->nama_panggilan = $request->nama_panggilan;
            $cr_G->kelas_id = $request->kelas_id;
            $cr_G->tempat_lahir = $request->tempat_lahir;
            $cr_G->tanggal_lahir = $request->tanggal_lahir;
            $cr_G->wali_murid = $request->wali_murid;
            $cr_G->no_telp = $request->no_telp;
            $cr_G->alamat = $request->alamat;
            $cr_G->semester = $request->semester;
            $cr_G->jenis_kelamin = $request->jenis_kelamin;
            $cr_G->save();

        return redirect('/panel')->with('alert','Data ada berhasil di input!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getID = Auth()->user()->id;
        $siswa = Siswa::find($id);
        $get = Guru::where('user_id','=',$getID)->first();
        $con = Tabungan::where('siswa_id','=',$siswa->id)->count();
        $tab = Tabungan::where('siswa_id','=',$siswa->id)->get();

        // $class = Kelas::where()
        $nilai = Nilai::where('siswa_id', '=', $siswa->id)->get();        
        $check = Nilai::where('siswa_id', '=', $siswa->id)->count();

        return view('Panel.action.editSiswa', compact('siswa', 'check', 'con', 'tab','nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $user = User::where('id','=',$siswa->user_id);

        $siswa->delete();
        $user->delete();

        return redirect('/panel')->with('success', 'Data Deleted!!');
    }
}
