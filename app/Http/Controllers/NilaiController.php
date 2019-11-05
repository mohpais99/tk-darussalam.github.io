<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Siswa;
use App\Pelajaran;
use App\Guru;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $mapel = Pelajaran::get();
        // echo $mapel; die();
        $siswa = Siswa::find($id);
        $loop = Nilai::where('siswa_id', '=', $siswa->id)->get();

        return view('Panel.action.inputNilai', compact('siswa', 'mapel', 'loop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {   
        if (count($request->mapel_id) > 0) {
            foreach ($request->mapel_id as $item => $value) {
                $file = $request->gambar[$item];
                $fileName = time().$item.'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('images/nilai/');
                $file->move($destinationPath, $fileName);
                $arr = array(
                    'mapel_id' => $request->mapel_id[$item], 
                    'siswa_id' => $request->siswa_id[$item],
                    'gambar' => $fileName,
                    'deskripsi' => $request->deskripsi[$item], 
                );
            Nilai::insert($arr);
            }
        }

        return redirect('/panel');
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
        $nilai = Nilai::find($id);
        $siswa = Siswa::where('id',$nilai->siswa_id)->first();

        return view('Panel.action.editNilai', compact('nilai','siswa'));
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
        $nilai = Nilai::find($id);
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images/nilai/');
            $file->move($destinationPath, $fileName);
            $nilai->gambar = $fileName;
        }
        $nilai->deskripsi = $request->deskripsi;
        $nilai->save();

        return redirect('panel')->with('success','Data Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
