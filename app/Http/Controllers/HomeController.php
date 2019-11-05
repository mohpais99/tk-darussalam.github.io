<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Event;
use App\Pesan;
use App\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $event = Event::all();
        $gallery = Gallery::take(4)->get();
        
        return view('index', compact('event', 'gallery'));
    }

    public function guru()
    {
        $guru = Guru::all();
        return view('guru', compact('guru'));
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('gallery')->with('gallery', $gallery);
    }

    public function profile()
    {
        return view('profile_tk');
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function pesan(Request $request)
    {
        $pesan = new Pesan;
        $pesan->create($request->all());

        return redirect()->back()->with('success', 'Pesan Berhasil Masuk, Silahkan tunggu balasan !!!');
    }
}
