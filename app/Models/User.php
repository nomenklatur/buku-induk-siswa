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

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'nisn',
        'nis',
        'foto',
        'email',
        'jenis_kelamin',
        'password',
        'status',
        'year_id',
        'group_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
    protected $with = [
        'ayah',
        'ibu',
        'biodata',
        'wali',
        'kelas',
        'mutasi',
        'tahun_ajar',
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
        return $this->hasOne(Biodata::class);
    }

    public function wali(){
        return $this->hasOne(Guardian::class);
    }

    public function kelas(){
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function tahun_ajar(){
        return $this->belongsTo(Year::class, 'year_id');
    }

    public function mutasi(){
        return $this->hasOne(Mutation::class);
    }

    public function getRouteKeyName(){
        return 'nisn';
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['cari'])? $filters['cari']: false){
             return $query->where('nama_lengkap', 'like', '%'.$filters['cari'].'%');
        }
    }
}
