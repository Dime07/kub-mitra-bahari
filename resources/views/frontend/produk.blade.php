@extends('frontend.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
@endsection

@section('content')
    {{-- hero section --}}
    <section class="hero-section d-flex" style="background: url({{asset('assets/hero-img.jpg')}})">
        <div class="row my-auto mx-auto">
            <div class="text-center px-0">
                <p class="title mx-auto">
                    Produk KUB Mitra Bahari
                </p>
            </div>
        </div>
    </section>

    <section class="product-section">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="label mb-2">
                        Produk
                    </p>
                    <p class="title">
                        Product yang kami sediakan
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($produk as $item)
                <div class="col-lg-4 col-12">
                    <div class="product-card d-flex flex-column  mb-4">
                        <div class="image-product mb-4" style="background: url({{asset('produk/'.$item->gambar)}})">
                        </div>
                        <p class="subtitle">
                            {{$item->judul}}
                        </p>
                        <p class="description">
                            Rp. {{ number_format($item->harga, 2, ',', '.') }}
                        </p>
                        <a href="{{$item->link}}">
                            <button class="btn-primary-kub" style="width: 100%">
                                Beli Sekarang
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection