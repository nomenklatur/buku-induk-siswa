<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'nisn',
        'nis',
        'status',
        'jenis_kelamin',
        'tahun_ajar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    public function ayah(){
        return $this->hasOne(Dad::class);
    }

    public function ibu(){
        return $this->hasOne(Mom::class);
    }

    public function biodata(){
        return $this->hasOne(Student::class);
    }

    public function wali(){
        return $this->hasOne(Guardian::class);
    }

    public function kelas(){
        return $this->hasOne(Group::class);
    }

    public function mutasi(){
        return $this->hasOne(Mutation::class);
    }
}
