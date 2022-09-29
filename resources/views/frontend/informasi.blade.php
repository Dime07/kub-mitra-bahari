@extends('frontend.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/informasi.css') }}">
@endsection

@section('content')
    {{-- hero section --}}
    <section class="hero-section d-flex" style="background: url({{asset('assets/hero-img.jpg')}})">
        <div class="row my-auto mx-auto">
            <div class="text-center px-0">
                <p class="title mx-auto">
                    Informasi
                </p>
            </div>
        </div>
    </section>

     {{-- poster section --}}
    <section class="poster-section">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="label mb-2">
                        Informasi
                    </p>
                    <p class="title">
                        Poster terbaru
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="py-4 text-center">
                    <img src="{{ asset('assets/poster-nanas.png') }}" width="80%" alt="poster nanas" class="mx-auto">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="py-4 text-center">
                    <img src="{{ asset('assets/wisata-edumangrove.png') }}" width="80%" alt="poster wisata edumangrove" class="mx-auto">
                </div>
            </div>
        </div>
    </section>

    {{-- informasi section --}}
    <section class="informasi-section">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="label mb-2">
                        Informasi
                    </p>
                    <p class="title">
                        Informasi terbaru
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($feed as $item)
                <div class="col-lg-6 col-12">
                    <div class="card-information mb-4">
                        <div class="image-holder" style="background: url('{{ asset('feed/'.$item->gambar) }}') ">
                        </div>
                        <p class="title-information mt-4">
                            {{$item->judul}}
                        </p>
                        <p class="desc-information">
                            {{$item->deskripsi}}
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
            @endforeach
            {{-- <div class="col-lg-6 col-12">
                <div class="card-information mb-4">
                    <div class="image-holder" style="background: url('{{ asset('assets/last-post.jpg') }}') ">
                    </div>
                    <p class="title-information mt-4">
                        Kegiatan Gerakan Bersih pantai dan laut
                    </p>
                    <p class="desc-information">
                        Telah dilaksanakan kegiatan bersih pantai dan laut untuk mempersiapkan tambak lorok dalam acara lomba dayung pada tanggal 13 agustus 2022
                    </p>
                    <div class="btn-social-wrap position-relative">
                        <button class="btn-primary-kub text-white" style="width: fit-content">
                            Sosial Media Kami
                        </button>
                        <div class="btn-social">
                            <a href="#">
                                <img src="{{ asset('assets/whatsapp-icon.svg') }}" class="me-2" alt="facebook icon">
                            </a>
                            <a href="https://www.instagram.com/kub_mitrabahari/">
                                <img src="{{ asset('assets/instagram-icon.svg') }}" class="ms-2" alt="facebook icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
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