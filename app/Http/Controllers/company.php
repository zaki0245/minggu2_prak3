<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class company extends Controller
{
    public function home(){
        return view('home');
    }

    public function news($news){
        return view('news',['new'=>$news]);
    }

    public function about(){
        return view('obout-us');
    }

    public function comment($nama,$pesan){
        return view('comment',['namas'=>$nama,'pesans'=>$pesan]);
    }

    public function mi(){
        return view('mi');
    }
    public function ti(){
        return view('ti');
    }

    public function perkantoran(){
        return view('perkantoran');
    }

    public function laboratorium(){
        return view('laboratorium');
    }

    public function kelas(){
        return view('kelas');
    }

    public function lain(){
        return view('lainnya');
    }
}
