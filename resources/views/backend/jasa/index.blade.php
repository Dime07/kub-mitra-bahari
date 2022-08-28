@extends('backend.layouts.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jasa</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end">
            <a href="{{ route('admin.jasa.create') }}">
                <button class="btn btn-primary">
                    Tambah Jasa
                </button>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>No Whatsapp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jasa as $item)
                            <tr>
                                <td>
                                    <div style="width: 100px ;  height: 100px; background-size: cover !important; background-repeat: no-repeat !important; background-position: center !important; background: url({{asset('jasa/'.$item->gambar)}})">
                                    </div>
                                </td>
                                <td style="width: 20% ; text-overflow: ellipsis">
                                    {{$item->judul}}
                                </td>
                                <td style="width: 30% ; text-overflow: ellipsis">
                                    {{$item->deskripsi}}
                                </td>
                                <td>{{$item->no_whatsapp}}</td>
                                <td>
                                    <a href="{{ route('admin.jasa.delete', ['id'=>$item->id]) }}">
                                        <button class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection