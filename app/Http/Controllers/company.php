<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class company extends Controller
{
    public function home(){
        return 'Selamat Datang';
    }

    public function news($news){
        return 'Berita '.$news;
    }

    public function about(){
        return 'About us';
    }

    public function comment($nama,$pesan){
        return $nama.' memberi komentar : '.$pesan;
    }

    public function mi(){
        return 'Halaman program studi manajemen informatika';
    }
    public function ti(){
        return 'Halaman program studi teknik informatika';
    }

    public function perkantoran(){
        return 'ini perkantoran';
    }

    public function laboratorium(){
        return 'ini laboratorium';
    }

    public function kelas(){
        return 'ini kelas';
    }

    public function lain(){
        return 'ini sarana lain nya';
    }
}
