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

    public function comment($comment){
        return $comment.' memberi komentar';
    }
}
