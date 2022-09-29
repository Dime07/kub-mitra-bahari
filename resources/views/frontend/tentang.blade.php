@extends('frontend.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/tentang.css') }}">
@endsection

@section('content')
    {{-- hero section --}}
    <section class="hero-section d-flex" style="background: url({{asset('assets/hero-img.jpg')}})">
        <div class="row my-auto mx-auto">
            <div class="text-center px-0">
                <p class="title mx-auto">
                    Tentang
                </p>
            </div>
        </div>
    </section>

    <section class="tentang-section">
        <div class="row mb-4">
            <div class="col-12">
                <div class="text-center">
                    <p class="title">
                        KUB Mitra Bahari
                    </p>
                </div>
            </div>
        </div>

        <div class="head-image my-4 mx-auto" style="background: url({{asset('assets/tentang-2.jpeg')}})">
        </div>

        <p class="desc">
            KUB Mitra Bahari adalah Kelompok Usaha Bersama yang beranggotakan para nelayan. KUB Mitra Bahari memiliki fokus pada budidaya kerang hijau yang berlokasi di Tambak Lorok Tanjung Mas Semarang. Selain menjadi pembudidaya kerang hijau, KUB Mitra Bahari ini juga membuka jasa sample untuk mahasiswa dan juga pemancingan di tambak
            <br>
            <br>
            KUB Mitra Bahari sendiri didirikan pada tahun 2014 dengan beranggotakan 20 orang. Dengan tujuan adalah bisa menerima program baik di pemerintah maupun swasta khususnya dari kementrian kelautan dan perikanan
        </p>

        <div class="row mt-4">
            <div class="col-6">
                <div class="sub-image" style="background: url({{asset('assets/tentang-1.jpeg')}})">
                </div>
            </div>
            <div class="col-6">
                <div class="sub-image" style="background: url({{asset('assets/tentang-2.jpeg')}})">
                </div>
            </div>
        </div>
    </section>
@endsection