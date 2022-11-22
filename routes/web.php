<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorization;
use App\Http\Controllers\Siswa;
use App\Http\Controllers\Admin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;

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
Route::get('/masuk', [Authorization::class, 'adjust'])->middleware('auth');
Route::post('/keluar', [Authorization::class, 'logout']);

// Students Exclusive Routes
Route::get('/home', [Siswa::class, 'index'])->middleware('auth');
Route::get('/biodata/{biodata}', [Siswa::class, 'bio_form'])->middleware('auth');
Route::put('/biodata/{biodata}', [Siswa::class, 'edit_bio'])->middleware('auth');
Route::get('/data-ayah/{dad}', [Siswa::class, 'dad_form'])->middleware('auth');
Route::put('/data-ayah/{dad}', [Siswa::class, 'edit_dad'])->middleware('auth');
Route::get('/data-ibu/{mom}', [Siswa::class, 'mom_form'])->middleware('auth');
Route::put('/data-ibu/{mom}', [Siswa::class, 'edit_mom'])->middleware('auth');
Route::get('/data-wali/{guardian}', [Siswa::class, 'guardian_form'])->middleware('auth');
Route::put('/data-wali/{guardian}', [Siswa::class, 'edit_guardian'])->middleware('auth');
Route::get('/password/{user}', [Siswa::class, 'password_form'])->middleware('auth');
Route::put('/password/{user}', [Siswa::class, 'change_password'])->middleware('auth');

// Admin Exclusive Routes
Route::get('/dashboard', [Admin::class, 'index'])->middleware('admin');
Route::resource('/admin/siswa', UserController::class)->middleware('admin');
Route::resource('/admin/kelas', KelasController::class)->middleware('admin');