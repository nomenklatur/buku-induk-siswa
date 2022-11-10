<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorization;
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
Route::get('/', [Authorization::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard/admin_dashboard');
});
