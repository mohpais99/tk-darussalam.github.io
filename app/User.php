<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function guru()
    {
        return $this->hasOne(Guru::class);
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }

    public function getAdmin()
    {
        if ($this->role === 'superadmin') {
            return $this->id;
        }
    }

    public function defaultFoto()
    {
        if (!$this->foto) {
            if ($this->role === 'superadmin' || $this->role === 'guru') {
                return $this->guru->defaultFoto();
            }
            return $this->siswa->defaultFoto();
        }
    }

    public function getName()
    {
        if ($this->role === 'superadmin' || $this->role === 'guru') {
            return $this->guru->name;
        }
        return $this->siswa->nama_lengkap;
    }

    public function getJabatan()
    {
        if ($this->role === 'superadmin' || $this->role === 'guru') {
            return $this->guru->jabatan;
        }
        return 'siswa';
    }

    public function getKelamin()
    {
        if ($this->role === 'superadmin' || $this->role === 'guru') {
            return $this->guru->getKelamin();
        }
        return $this->siswa->getKelamin();;
    }

    public function no()
    {
        if ($this->role === 'superadmin' || $this->role === 'guru') {
            return $this->guru->no_telp;
        }
        return $this->siswa->no_telp;
    }

    public function getAlamat()
    {
        if ($this->role === 'superadmin' || $this->role === 'guru') {
            return $this->guru->alamat;
        }
        return $this->siswa->alamat;
    }
}
