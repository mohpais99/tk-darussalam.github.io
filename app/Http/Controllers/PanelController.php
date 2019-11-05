<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Siswa;
use Auth;
use App\Guru;
use App\Event;
use App\Kelas;
use App\Pesan;
use App\User;
use App\Nilai;
use App\Gallery;
use App\Tabungan;
use App\Pemberitahuan;

class PanelController extends Controller
{
    public function index()
    {
        $guru = Guru::count();
        $siswa = Siswa::count();
        $start = \Carbon\Carbon::now();
        // $news = Pemberitahuan::where('user_id')->first();
        // $end = date('M d, Y', strtotime($news->end_berita));

        $newsGet = Pemberitahuan::all();
        return view('Panel.pages.index', compact('start','newsGet','guru','siswa'));
    }

    public function showGallery()
    {
        $gallery = Gallery::all();
        return view('Panel.pages.gallery')->with('gallery', $gallery);
    }

    public function akademik()
    {
        $id = Auth()->user()->id;
        $siswa = Siswa::where('user_id','=',$id)->first();
        $nilai = Nilai::where('siswa_id', '=', $siswa->id)->get();

        return view('Panel.pages.akademik', compact('siswa','nilai'));
    }

    public function tabungan()
    {
        $id = auth()->user()->id;
        $siswa = Siswa::where('user_id','=',$id)->first();
        $tab = Tabungan::where('siswa_id','=',$siswa->id)->get();

        return view('Panel.pages.tabungan', compact('tab'));
    }
    public function tabunganCreate(Request $request,$id)
    {
        $get = Tabungan::latest('created_at')->where('siswa_id','=',$id)->first();
        $con = Tabungan::latest('created_at')->where('siswa_id','=',$id)->count();
        $total = $request->uang_masuk+$request->uang_keluar;

        if ($request->uang_masuk > 0) {
            if ($con > 0) {
                $tabungan = new Tabungan;
                $tabungan->siswa_id = $request->siswa_id;
                $tabungan->uang_masuk = $request->uang_masuk;
                $tabungan->uang_keluar = $request->uang_keluar;
                $tabungan->total = $get->total+$total;
                $tabungan->save();
            } else {
            $tabungan = new Tabungan;
            $tabungan->siswa_id = $request->siswa_id;
            $tabungan->uang_masuk = $request->uang_masuk;
            $tabungan->uang_keluar = $request->uang_keluar;
            $tabungan->total = $total;
            $tabungan->save();
            }
        } elseif ($request->uang_keluar > 0) {
        $tarik = $get->total-$request->uang_keluar;
        $tabungan = new Tabungan;
        $tabungan->siswa_id = $request->siswa_id;
        $tabungan->uang_masuk = $request->uang_masuk;
        $tabungan->uang_keluar = $request->uang_keluar;
        $tabungan->total = $tarik;
        $tabungan->save();
        }
        // return view('Panel.pages.data.dataSiswa');
        return redirect()->back()->with("success","Input Tabungan Successfully !");
    }

    public function profile()
    {
        $user = auth()->user();

        return view('Panel.pages.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->foto); die();
        $user = Auth()->user();
        if ($user->role === 'guru' or $user->role === 'superadmin') {
            $guru = Guru::where('user_id','=',$id)->first();
            $guru->name = $request->name;
            $guru->no_telp = $request->no_telp;
            $guru->jenis_kelamin = $request->jenis_kelamin;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $fileName = time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('images/user');
                $file->move($destinationPath, $fileName);
                $guru->foto = $fileName;
            }
            $guru->alamat = $request->alamat;
            $guru->save();
            $userGet = User::where('id','=',$guru->user_id)->first();            
            $userGet->update(['email' => $request->email, 'username' => $request->username]);
            // $userGet->email = $request->email;
            // $userGet->username = $request->username;
            // $userGet->password = bcrypt($request->password);
            // $userGet->save();
        } else {
        $siswa = Siswa::where('user_id','=',$id)->first();
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->nama_panggilan = $request->nama_panggilan;
        $siswa->no_telp = $request->no_telp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images/user');
            $file->move($destinationPath, $fileName);
            $siswa->foto = $fileName;
        }
        $siswa->alamat = $request->alamat;
        $siswa->save();
        $userGetOther = User::where('id','=',$siswa->user_id)->first();
        $userGetOther->update(['email' => $request->email, 'username' => $request->username]);
        // $userGetOther->email = $request->email;
        //     $userGetOther->username = $request->username;
        //     $userGetOther->password = bcrypt($request->password);
        //     $userGetOther->save();
        }
        return redirect('/profile')->with('success','Data anda berhasil di update!!');
    }

    public function changePassword(Request $request, $id)
    {
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            }
             
            if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            }
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new_password'));
            $user->save();
             
            return redirect()->back()->with("success","Password changed successfully !");
             
    }
    //     $userGet = User::where('id','=',$id)->first();
    //     $userGet->password = bcrypt($request->password);
    //     $userGet->save();

    //     return redirect('/profile')->with('success','Password anda berhasil di ubah!!');
    // }

    public function addGallery()
    {
        return view('Panel.action.inputGallery');
    }

    public function gallery(Request $request)
    {
        $gallery = new Gallery;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images/gallery/');
            $file->move($destinationPath, $fileName);
            $gallery->foto = $fileName;
        }
        $gallery->save();

        return redirect()->back()->with('success','Data telah ditambahkan!!!');
    }

    public function news()
    {
        return view('Panel.action.inputBerita');
    }

    public function newsCreate(Request $request)
    {   
        $end = \Carbon\Carbon::now()->addDays(3);

        $news = new Pemberitahuan;
        $news->user_id = $request->user_id;
        $news->judul_berita = $request->judul_berita;
        $news->isi_berita = $request->isi_berita;
        $news->end_berita = $end;
        $news->save();

        return redirect('/panel')->with('success', 'new stored!!!');
    }

    public function newsDelete($id)
    {
        $news = Pemberitahuan::find($id);

        $news->delete();

        return redirect('/panel');
    }

    public function allTabungan()
    {
        $tab = Tabungan::orderBy('created_at','DESC')->get();

        return view('Panel.pages.all_tabungan', compact('tab'));
    }

    public function event()
    {
        $event = Event::all();
        return view('Panel.pages.event')->with('event', $event);
    }

    public function createEvent()
    {
        return view('Panel.action.inputEvent');
    }

    public function inputEvent(Request $request)
    {
        $event = new Event;
        $event->nama_event = $request->nama_event;
        $event->tanggal_event = $request->tanggal_event;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images/event/');
            $file->move($destinationPath, $fileName);
            $event->foto = $fileName;
        }
        $event->save();

        return redirect()->back()->with('success','Event has been included !!');
    }

    public function pesan()
    {
        $pesan = Pesan::all();

        return view('Panel.pages.pesan')->with('pesan', $pesan);
    }

    public function pesanDelete($id)
    {
        $pesan = Pesan::find($id);
        $pesan->delete();

        return redirect()->back()->with('success', 'Data Berhasil di Hapus!');
    }
}
