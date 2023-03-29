@extends('layouts.layout')

@section('title', 'Press')

@section('content')

<style>
    .press a{
        text-decoration: none;
        color: black;
    }
    #press{
        color: #898989;
    }
    #press:hover{
        color: #c49a6c;
    }
    #title:hover{
        color: #5b5b5b;
    }
    .press p{
        font-size: 14px;
    }
    .line-height{
        line-height: 2;
    }
    .article{
        margin-bottom: 85px;
    }
    #title h4{
        line-height: 1.5;
    }

    
</style>


<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 article">
                <img src="{{ asset('assets/img/press/PRESS_5_Dekorasi Pernikahan Dengan Menggunakan Bunga Eustoma Russellianum Terbanyak/PRESS_5_Dekorasi Pernikahan Dengan Menggunakan Bunga Eustoma Russellianum Terbanyak_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <div class="press">
                    <a href="{{route('press.category')}}" id="press">
                        <p class=" my-4">Press</p>
                    </a>
                    <a href="{{route('press.article')}}" id="title">
                        <h4 class=" fw-bold my-4">Dekorasi Pernikahan Dengan Menggunakan Bunga Eustoma Russellianum Terbanyak</h4>
                    </a>
                    <p class="line-height">Vincent Luhur Flowers &amp; Design merancang dekorasi pernikahan dengan menggunakan hanya 1 jenis bunga Import dari Vietnam, yaitu Eustoma russellianum…</p>
                </div>
            </div>
            <div class="col-sm-6 article">
                <img src="{{ asset('assets/img/press/PRESS_4_Fungsi Optimal Desain Terbuka/PRESS_4_Fungsi Optimal Desain Terbuka_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <div class="press">
                    <a href="{{route('press.category')}}" id="press">
                        <p class=" my-4">Press</p>
                    </a>
                    <a href="{{route('press.article2')}}" id="title">
                        <h4 class=" fw-bold my-4">Fungsi Optimal Desain Terbuka</h4>
                    </a>
                    <p class="line-height">YANG ADA BANYAK tanamannya. Begitulah cara yang paling mudah mendeskripsikan seperti apa rupa bangunan Akses Domisili.</p>
                </div>
            </div>
            <div class="col-sm-6 article">
                <img src="{{ asset('assets/img/press/PRESS_2_Kecil-kecil Cabai Rawit/PRESS_2_Kecil-kecil Cabai Rawit_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <div class="press">
                    <a href="{{route('press.category')}}" id="press">
                        <p class=" my-4">Press</p>
                    </a>
                    <a href="{{route('press.article3')}}" id="title">
                        <h4 class=" fw-bold my-4">
                            Kecil – kecil Cabai Rawit
                        </h4>
                    </a>
                    <p class="line-height">Di saat anak-anak seumuran mereka asyik berjalan-jalan ke mal dan tempat bermain Askary Nurrachmat Malik, Kevin Handoko, Vincent Caesar J.L, dan Audrey Aureli malah mengunjungi nursery.</p>

                </div>
            </div>
            <div class="col-sm-6 article">
                <img src="{{ asset('assets/img/press/PRESS_3_Dendrobium Langka Berpenampilan Cantik/PRESS_3_Dendrobium Langka Berpenampilan Cantik_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <div class="press">
                    <a href="{{route('press.category')}}" id="press">
                        <p class=" my-4">Press</p>
                    </a>
                    <a href="{{route('press.article4')}}" id="title">
                        <h4 class=" fw-bold my-4">Dendrobium Langka Berpenampilan Cantik</h4>
                    </a>
                    <p class="line-height">Vincent Caesar Jansius Luhur bak mendapat durian runtuh ketika tanpa sengaja memperoleh anggrek Dendrobium stratiotes forma alba. Anggrek langka itu…</p>
                </div>
            </div>
            <div class="col-sm-6 article">
                <img src="{{ asset('assets/img/press/PRESS_1_Kontes Anggrek Citra Garden Orchid Fair Terbesar di Banjarmasin/PRESS_1_Kontes Anggrek Citra Garden Orchid Fair Terbesar di Banjarmasin_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <div class="press">
                    <a href="{{route('press.category')}}" id="press">
                        <p class=" my-4">Press</p>
                    </a>
                    <a href="{{route('press.article5')}}" id="title">
                        <h4 class=" fw-bold my-4">Kontes Anggrek Citra Garden Orchid Fair Terbesar di Banjarmasin</h4>
                    </a>
                    <p class="line-height">Banjarmasin bukan barometer anggrek nasional. Selama ini sumber anggrek bagus berasal dari Jakarta, Bandung, dan Surabaya. Namun, dalam lomba anggrek…</p>
                </div>
            </div>
            <div class="col-sm-6 article">
                <img src="{{ asset('assets/img/press/PRESS_6_Seni Instalasi Bunga Yang Membawa Pesan Dalam Diam/PRESS_6_Seni Instalasi Bunga Yang Membawa Pesan Dalam Diam_THUMBNAIL.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <div class="press">
                    <a href="{{route('press.category')}}" id="press">
                        <p class=" my-4">Press</p>
                    </a>
                    <a href="{{route('press.article6')}}" id="title">
                        <h4 class=" fw-bold my-4">Seni Instalasi Bunga Yang Membawa Pesan Dalam Diam</h4>
                    </a>
                    <p class="line-height">Anggrek bulan putih itu tersusun melingkar dan melayang memenuhi langit-langit sebuah ruangan hotel. Bentuk itu hendak menggambarkan imajinasi Vincent Caesar…</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

@endpush
