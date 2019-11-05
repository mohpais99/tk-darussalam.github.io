<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function Date()
    {
        $date = $this->created_at;
        return $date->format('d-M-Y');
    }
    
    public function getNama()
    {
        if ($this->siswa_id) {
            return $this->siswa->nama_lengkap;
        }
    }
}
