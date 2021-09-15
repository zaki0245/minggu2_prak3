<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\company;

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

Route::get('home', [company::class,'home']);

Route::prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika', [company::class,'mi']);
    Route::get('/teknik-informatika',  [company::class,'ti']);
});

Route::get('news/{news}', [company::class,'news']);

Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran', [company::class,'perkantoran']);
    Route::get('/laboratorium', [company::class,'laboratorium']);
    Route::get('/kelas', [company::class,'kelas']);
    Route::get('/lainnya', [company::class,'lain']);
});

Route::get('about', [company::class,'about']);

Route::get('comment/{nama}/{pesan}', [company::class,'comment']);
