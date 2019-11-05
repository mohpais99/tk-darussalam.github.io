<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Kelas;

class Guru extends Model
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

    public function defaultFoto()
    {
        if(!$this->foto){
            return asset('images/default.png');
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
}
