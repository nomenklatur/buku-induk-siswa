<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dad;
use App\Models\Mom;
use App\Models\Guardian;
use App\Models\Student;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa/home', [
            'title' => 'Beranda',
        ]);
    }

    
}
