@extends('frontend.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
    {{-- hero section --}}
    <section class="hero-section d-flex" style="background: url({{asset('assets/hero-img.jpg')}})">
        <div class="row my-auto">
            <div class="text-center px-0">
                <p class="label">
                    Tambak Lorok, Semarang, Jawa Tengah
                </p>
            </div>
            <div class="text-center px-0">
                <p class="title mx-auto">
                    Melihat Keindahan dan kekayaan laut daerah tambak lorok
                </p>
            </div>
        </div>
    </section>

    <section class="last-post-section">
        <div class="content">
            @if ($feed === null)
                <p>
                    Tidak ada data
                </p>
            @else
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="d-flex justify-content-lg-end justify-content-center">
                            <div class="image-wrap" style="background:  url({{asset('feed/'.$feed->gambar)}})">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 d-flex">
                        <div class="d-flex flex-column my-auto justify-content-start ps-lg-5 ps-0 mt-lg-auto mb-lg-auto mb-0 mt-4">
                            <p class="label mb-2">
                                Untuk Kamu
                            </p>
                            <p class="title mb-3">
                                {{$feed->judul}}
                            </p>
                            <p class="description mb-5">
                                {{$feed->deskripsi}}
                            </p>
                            <div class="btn-social-wrap position-relative">
                                <button class="btn-primary-kub text-white" style="width: fit-content">
                                    Sosial Media Kami
                                </button>
                                <div class="btn-social">
                                    <a href="https://api.whatsapp.com/send/?phone=6287723017324">
                                        <img src="{{ asset('assets/whatsapp-icon.svg') }}" class="me-2" alt="facebook icon">
                                    </a>
                                    <a href="https://www.instagram.com/kub_mitrabahari/" target="_blank">
                                        <img src="{{ asset('assets/instagram-icon.svg') }}" class="ms-2" alt="facebook icon">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
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
                        Produk yang kami sediakan
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($produk as $item)
                <div class="col-lg-4 col-12">
                    <div class="product-card d-flex flex-column mb-lg-0 mb-4">
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

@section('scripts')
    <script>
        $( document ).ready(function() {
            $( ".btn-social-wrap" ).mouseenter(function() {
                $(this).children(".btn-social").addClass('show')
            });
            $( ".btn-social-wrap" ).mouseleave(function() {
                $(this).children(".btn-social").removeClass('show')
            });
        });
    </script>
@endsection