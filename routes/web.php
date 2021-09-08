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
     Route::get('/manajemen-informatika', function(){
        return 'Halaman program studi manajemen informatika';
    });
    Route::get('/teknik-informatika', function(){
        return 'Halaman program studi teknik informatika';
    });
});

Route::get('news/{news}', [company::class,'news']);

Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran', function(){
       return 'Ini perkantoran';
    });
    Route::get('/laboratorium', function(){
       return 'Ini laboratorium';
    });
    Route::get('/kelas', function(){
        return 'Ini kelas';
    });
    Route::get('/lainnya', function(){
        return 'Sarana lainnya';
    });
});

Route::get('about', [company::class,'about']);

Route::get('comment/{comment}', [company::class,'comment']);
