<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\File; 

class ProdukController extends Controller
{
    //
    public function index(){
        $produk = Produk::get();

        return view('backend.produk.index', compact('produk'));
    }

    public function create(){
        
        return view('backend.produk.create');
    }

    public function store(Request $request){

        $request->validate([
            'judul' => 'required',
            'harga' => 'required',
            'link' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $file_gambar = $request->file('gambar');
        $nama_file_gambar = time()."_".preg_replace('/\s+/', '',$file_gambar->getClientOriginalName());
        $tujuan_upload_formal = 'produk';
        $file_gambar->move($tujuan_upload_formal,$nama_file_gambar);
    
        Produk::create([
            'judul' => $request->judul,
            'harga' => $request->harga,
            'link' => $request->link,
            'gambar' => $nama_file_gambar,
        ]);
     
        return redirect()->route('produk')->with('success','Data berhasil di input');
    }

    public function delete(Request $request){
        $data = Produk::find($request->id)->first();
        File::delete(public_path('produk/'.$data->gambar));

        Produk::find($request->id)->delete();
        return redirect()->route('produk')->with('success','Data berhasil di hapus');
    }
}
