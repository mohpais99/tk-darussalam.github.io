<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $guarded = [];

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'mapel_id');
    }

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'siswa_id');
    }

    public function getPelajaran()
    {
        if ($this->mapel_id) {
            return $this->pelajaran->nama_pelajaran;
        }
    }

}
