<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Siswa extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id');
    }

    public function tabungan()
    {
        return $this->hasMany(Tabungan::class);
    }

    public function defaultFoto()
    {
        if(!$this->foto){
            if ($this->jenis_kelamin === 'L') {
                return asset('images/boy.png');
            }
            return asset('images/girl.png');
        }
        return asset('images/user/'.$this->foto);
    }

    public function getKelamin()
    {
        if ($this->jenis_kelamin === 'L') {
            return 'Laki-Laki';
        }
        return 'Perempuan';
    }

    public function getDate()
    {
        $get = $this->tanggal_lahir;
        $date = new Carbon($get);
        return $date->format('d-M-Y');
    }
}
