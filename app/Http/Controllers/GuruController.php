<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Guru;
use App\Kelas;
use App\WaliKelas;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $for = Guru::orderBy('id','DESC')->get();
        return view('Panel.pages.data.dataGuru', compact('for'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $arr = [];
        $check = Guru::get();
        $count_U = User::all()->count();
        $class = Kelas::all();
        $count_C = Kelas::where('wali_kelas', '<>', null)->count();
        // echo $count_C; die();
        return view('Panel.action.addGuru', compact('count_U', 'class', 'count_C'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_U = new User;
        $data_U->role = 'guru';
        $data_U->username = $request->username;
        $data_U->email = $request->username.'@staff.ac.id';
        $data_U->password = bcrypt('admin');
        $data_U->remember_token = str_random(50);
        $data_U->save();
        
        $request->request->add(['user_id' => $data_U->id]);
            $getID = $request->kelas_id;
            $getClass = Kelas::where('id', '=', $getID)->first();
            $cr_G = new Guru;
            $cr_G->user_id = $request->user_id;
            $cr_G->kelas_id = $request->kelas_id;
            $cr_G->NUPTK = $request->NUPTK;
            $cr_G->name = $request->name;
            $cr_G->no_telp = $request->no_telp;
            $cr_G->email = $request->username.'@staff.ac.id';
            $cr_G->jenis_kelamin = $request->jenis_kelamin;
            $cr_G->alamat = $request->alamat;
            if (!$request->kelas_id) {
                $cr_G->jabatan = 'Staff';
                $cr_G->save();
            } else {
                $cr_G->jabatan = 'Wali Kelas '.$getClass->nama_kelas;
            }
            $cr_G->save();
        
        if (!empty($request->kelas_id)) { 
        $request->request->add(['wali_kelas' => $request->name]);
            $getID = $request->kelas_id;
            $getClass = Kelas::where('id', '=', $getID)->first();
            $getClass->wali_kelas = $request->wali_kelas;
            $getClass->save();
        }
        

        return redirect('/data-guru')->with('success','Ur data has included!!');
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
        $guru = Guru::find($id);
        return view('Panel.action.editGuru', compact('guru'));
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
        $guru = Guru::find($id);
        $guru->update($request->all());
        return redirect('/data-guru')->with('success','Data ada berhasil di input!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        $user = User::where('id','=',$guru->user_id);
        $user->delete();

        $class = Kelas::where('wali_kelas', '=', $guru->name)->first();
        $class->wali_kelas = null;
        $class->update();

        return redirect('/data-guru')->with('success', 'Data Deleted!!');
    }
}
