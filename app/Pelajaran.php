<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    protected $table = 'pelajarans';
    protected $guarded= [];

    public function nilai()
    {
        return $this->hasOne(Nilai::class, 'id');
    }
}
