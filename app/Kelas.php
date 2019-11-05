<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Guru;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas','wali_kelas'];

    public function Guru()
    {
        return $this->hasOne(Guru::class);
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }

    public function disabled()
    {
        if ($this->wali_kelas <> null) {
            return 'disabled';
        }
    }

    public function count()
    {
        if ($this->wali_c) {
            # code...
        }
    }

}
