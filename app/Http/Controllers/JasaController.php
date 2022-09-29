<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jasa;
use Illuminate\Support\Facades\File; 

class JasaController extends Controller
{
    //
    public function index(){
        $jasa = Jasa::get();

        return view('backend.jasa.index', compact('jasa'));
    }

    public function create(){
        return view('backend.jasa.create');
    }

    public function store(Request $request){

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'no_whatsapp' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $file_gambar = $request->file('gambar');
        $nama_file_gambar = time()."_".preg_replace('/\s+/', '',$file_gambar->getClientOriginalName());
        $tujuan_upload_formal = 'jasa';
        $file_gambar->move($tujuan_upload_formal,$nama_file_gambar);

        $formated_phone = substr($request->no_whatsapp, 1);
        $formated_phone = '62'.$formated_phone;
    
        Jasa::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'no_whatsapp' => $formated_phone,
            'gambar' => $nama_file_gambar,
        ]);
     
        return redirect()->route('jasa')->with('success','Data berhasil di input');
    }

    public function delete(Request $request){
        $data = Jasa::find($request->id)->first();
        File::delete(public_path('jasa/'.$data->gambar));

        Jasa::find($request->id)->delete();
        return redirect()->route('jasa')->with('success','Data berhasil di hapus');
    }
}
