<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorization;
use App\Http\Controllers\Siswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Login Functions
Route::get('/', [Authorization::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [Authorization::class, 'auth'])->middleware('guest');
Route::get('/masuk', [Authorzation::class, 'adjust'])->middleware('auth');
Route::post('/keluar', [Authorization::class, 'logout']);

// Students Exclusive Routes
Route::get('/dashboard', [Siswa::class, 'index'])->middleware('auth');

