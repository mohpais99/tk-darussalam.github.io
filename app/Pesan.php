<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesans';
    protected $fillable = ['nama', 'email', 'no_telp', 'umur', 'pesan'];
}
