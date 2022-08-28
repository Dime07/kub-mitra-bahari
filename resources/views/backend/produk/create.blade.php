@extends('backend.layouts.app')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 mb-2">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Masukkan Judul">
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan Harga">
                </div>
                <div class="col-sm-6 mb-2">
                    <label for="link">Link</label>
                    <input type="text" class="form-control form-control-user" id="link" name="link" placeholder="Masukkan Link">
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