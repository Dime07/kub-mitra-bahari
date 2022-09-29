@extends('backend.layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.jasa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 mb-2">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul">
                </div>
                <div class="col-sm-6 mb-2 d-flex flex-column">
                    <label for="deksirpsi">deksirpsi</label>
                    <textarea name="deskripsi" id="deksirpsi" cols="30" rows="10" class="form-control form-control-user"></textarea>
                    {{-- <input type="text" class="form-control form-control-user" id="deksirpsi" name="deskripsi" placeholder="Masukkan Deskripsi"> --}}
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="no_whatsapp">No Whatsapp</label>
                    <input type="number" class="form-control form-control-user" id="no_whatsapp" name="no_whatsapp" placeholder="Masukkan No Whatsapp">
                </div>
                <div class="col-sm-6 mb-2 d-flex flex-column">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="gambar">
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success mt-2">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection