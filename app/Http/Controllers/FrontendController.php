<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Produk;
use App\Models\Feed;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){
        $feed = Feed::latest('created_at')->first();
        $produk = Produk::latest('created_at')->take(3)->get();

        return view ('frontend.beranda', compact('feed', 'produk'));
    }

    public function jasa(){
        $jasa = Jasa::get();
        return view ('frontend.jasa', compact('jasa'));
    }

    public function produk(){
        $produk = Produk::get();
        return view ('frontend.produk', compact('produk'));
    }

    public function tentang(){

        return view ('frontend.tentang');
    }

    public function informasi(){
        $feed = Feed::get();
        return view ('frontend.informasi', compact('feed'));
    }
    
    public function admin(){
        $feed = Feed::get();
        $produk = Produk::get();
        $jasa = Jasa::get();
        return view('backend.dashboard', compact('feed', 'produk', 'jasa'));
    }
}
