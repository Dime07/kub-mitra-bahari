@extends('frontend.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/jasa.css') }}">
@endsection

@section('content')
    {{-- hero section --}}
    <section class="hero-section d-flex" style="background: url({{asset('assets/hero-img.jpg')}})">
        <div class="row my-auto mx-auto">
            <div class="text-center px-0">
                <p class="title mx-auto">
                    Jasa KUB Mitra Bahari
                </p>
            </div>
        </div>
    </section>

    <section class="jasa-section">
        <div class="content">
            @foreach ($jasa as $item)
                @if ($loop->odd)
                    <div class="row mb-5">
                        <div class="col-lg-6 col-12">
                            <div class="d-flex justify-content-lg-end justify-content-center">
                                <div class="image-wrap" style="background:  url({{asset('jasa/'.$item->gambar)}})">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 d-flex">
                            <div class="d-flex flex-column justify-content-start ps-lg-5 ps-0 mt-lg-auto mb-lg-auto mb-0 mt-4">
                                <p class="title mb-3">
                                    {{$item->judul}}
                                </p>
                                <p class="description mb-5">
                                    {{$item->deskripsi}}
                                </p>
                                <div class="btn-social-wrap position-relative">
                                    <button class="btn-primary-kub text-white" style="width: fit-content">
                                        Hubungi
                                    </button>
                                    <div class="btn-social">
                                        <a href="https://api.whatsapp.com/send/?phone={{$item->no_whatsapp}}">
                                            <img src="{{ asset('assets/whatsapp-icon.svg') }}" alt="whatsapp icon">
                                        </a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                @elseif ($loop->even)
                    <div class="row mb-5">
                        <div class="col-lg-6 col-12 d-flex justify-content-end me-5">
                            <div class="d-flex flex-column justify-content-end ps-lg-5 ps-0 mt-lg-auto mb-lg-auto mb-0 mt-4">
                                <p class="title mb-3 text-end">
                                    {{$item->judul}}
                                </p>
                                <p class="description text-end mb-5">
                                    {{$item->deskripsi}}
                                </p>
                                <div class="btn-social-wrap position-relative text-end ms-auto">
                                    <button class="btn-primary-kub text-white" style="width: fit-content">
                                        Hubungi
                                    </button>
                                    <div class="btn-social">
                                        <a href="https://api.whatsapp.com/send/?phone={{$item->no_whatsapp}}">
                                            <img src="{{ asset('assets/whatsapp-icon.svg') }}" alt="whatsapp icon">
                                        </a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="d-flex justify-content-lg-start justify-content-center">
                                <div class="image-wrap" style="background:  url({{asset('jasa/'.$item->gambar)}})">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
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