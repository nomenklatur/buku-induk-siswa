<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function siswa(){
        return $this->hasMany(User::class);
    }

    public function getRouteKeyName(){
        return 'uri';
    }
}
