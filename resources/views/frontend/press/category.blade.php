@extends('layouts.layout')

@section('title', 'Press')

@section('content')

<style>
    .press a{
        text-decoration: none;
        color: black;
    }
    #title:hover{
        color: #5b5b5b;
    }
    .press p{
        font-size: 14px;
    }
    .content{
        background: #f2f1e5;
    }
    @media only screen and (max-width: 767px) {
        .paragraf h2{
            font-size: 26px;
        }
    }
</style>


<section class="section-padding">
    <div class="container px-5 content mb-5">
        <div class="row">
            <div class="col-sm-12 mt-5">
                <h1 class=" fw-bold py-5 px-4 bg-light">Press</h1>
            </div>
            <div class="col-sm-7 mt-0">
                <img src="{{ asset('assets/img/press/PRESS_5_Dekorasi Pernikahan Dengan Menggunakan Bunga Eustoma Russellianum Terbanyak/PRESS_5_Dekorasi Pernikahan Dengan Menggunakan Bunga Eustoma Russellianum Terbanyak_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
            </div>
            <div class="col-sm-12">
                <div class="press mt-3">
                    <h2 class="fw-bolder">Dekorasi Pernikahan Dengan Menggunakan Bunga Eustoma Russellianum Terbanyak</h2>
                    <p>Press / By <span>adminvl</span></p>
                    <p>Vincent Luhur Flowers & Design merancang dekorasi pernikahan dengan menggunakan hanya 1 jenis bunga Import dari Vietnam, yaitu Eustoma russellianum…</p>
                </div>
            </div>
            <div class="col-sm-7">
                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi Optimal Desain Terbuka_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
            </div>
            <div class="col-sm-12">
                <div class="press mt-3">
                        <h2 class="fw-bolder">Fungsi Optimal Desain Terbuka</h2>
                    <p>Press / By <span>adminvl</span></p>
                    <p>YANG ADA BANYAK tanamannya. Begitulah cara yang paling mudah mendeskripsikan seperti apa rupa bangunan Akses Domisili.</p>
                </div>
            </div>
            <div class="col-sm-7">
                <img src="{{ asset('assets/img/press/PRESS_2_Kecil-kecil Cabai Rawit/PRESS_2_Kecil-kecil Cabai Rawit_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
            </div>
            <div class="col-sm-12">
                <div class="press mt-3">
                        <h2 class="fw-bolder">Kecil – kecil Cabai Rawit</h2>
                    <p>Press / By <span>adminvl</span></p>
                    <p>Di saat anak-anak seumuran mereka asyik berjalan-jalan ke mal dan tempat bermain Askary Nurrachmat Malik, Kevin Handoko, Vincent Caesar J.L, dan Audrey Aureli malah mengunjungi nursery.</p>
                </div>
            </div>
            <div class="col-sm-7">
                <img src="{{ asset('assets/img/press/PRESS_3_Dendrobium Langka Berpenampilan Cantik/PRESS_3_Dendrobium Langka Berpenampilan Cantik_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
            </div>
            <div class="col-sm-12">
                <div class="press mt-3">
                        <h2 class="fw-bolder">Dendrobium Langka Berpenampilan Cantik</h2>
                    <p>Press / By <span>adminvl</span></p>
                    <p>Vincent Caesar Jansius Luhur bak mendapat durian runtuh ketika tanpa sengaja memperoleh anggrek Dendrobium stratiotes forma alba. Anggrek langka itu…</p>
                </div>
            </div>
            <div class="col-sm-7">
                <img src="{{ asset('assets/img/press/PRESS_1_Kontes Anggrek Citra Garden Orchid Fair Terbesar di Banjarmasin/PRESS_1_Kontes Anggrek Citra Garden Orchid Fair Terbesar di Banjarmasin_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
            </div>
            <div class="col-sm-12">
                <div class="press mt-3">
                        <h2 class="fw-bolder">Kontes Anggrek Citra Garden Orchid Fair Terbesar di Banjarmasin</h2>
                    <p>Press / By <span>adminvl</span></p>
                    <p>Banjarmasin bukan barometer anggrek nasional. Selama ini sumber anggrek bagus berasal dari Jakarta, Bandung, dan Surabaya. Namun, dalam lomba anggrek…</p>
                </div>
            </div>
            <div class="col-sm-7">
                <img src="{{ asset('assets/img/press/PRESS_6_Seni Instalasi Bunga Yang Membawa Pesan Dalam Diam/PRESS_6_Seni Instalasi Bunga Yang Membawa Pesan Dalam Diam_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
            </div>
            <div class="col-sm-12">
                <div class="press mt-3">
                        <h2 class="fw-bolder">Seni Instalasi Bunga Yang Membawa Pesan Dalam Diam</h2>
                    <p>Press / By <span>adminvl</span></p>
                    <p>Anggrek bulan putih itu tersusun melingkar dan melayang memenuhi langit-langit sebuah ruangan hotel. Bentuk itu hendak menggambarkan imajinasi Vincent Caesar…</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')

@endpush
