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
}
