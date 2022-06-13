<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cek-object', [MahasiswaController::class,'cekObject']);
Route::get('/insert', [MahasiswaController::class,'insert']);
Route::get('/update', [MahasiswaController::class,'update']);
Route::get('/all', [MahasiswaController::class,'all']);
Route::get('/home', [MahasiswaController::class,'index']);
