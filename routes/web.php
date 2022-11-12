<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorization;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ControllerBiodata;
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
Route::post('/', [Authorization::class, 'auth']);
Route::post('/keluar', [Authorization::class, 'logout']);

// Students Exclusive Routes
Route::get('/dashboard', [SiswaController::class, 'index'])->middleware('auth');

Route::resource('biodata', ControllerBiodata::class)->middleware('auth'); //Routes to manage Students Biodata

