<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use Illuminate\Support\Facades\File; 

class FeedController extends Controller
{
    //
    public function index(){
        $feed = Feed::get();

        return view('backend.feed.index', compact('feed'));
    }

    public function create(){
        return view('backend.feed.create');
    }

    public function store(Request $request){

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $file_gambar = $request->file('gambar');
        $nama_file_gambar = time()."_".preg_replace('/\s+/', '',$file_gambar->getClientOriginalName());
        $tujuan_upload_formal = 'feed';
        $file_gambar->move($tujuan_upload_formal,$nama_file_gambar);
    
        Feed::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_file_gambar,
        ]);
     
        return redirect()->route('feed')->with('success','Data berhasil di input');
    }

    public function delete(Request $request){
        $data = Jasa::find($request->id)->first();
        File::delete(public_path('feed/'.$data->gambar));

        Jasa::find($request->id)->delete();
        return redirect()->route('feed')->with('success','Data berhasil di hapus');
    }
}
