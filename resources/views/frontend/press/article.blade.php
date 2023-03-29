@extends('layouts.layout')

@section('title', 'Press')

@section('content')

<style>
    .title{
        font-size: 48px;
        padding: 50px 0;
    }
    .paragraf p{
        font-size: 17px;
        padding: 10px 0;
        line-height: 2;
    }
    .py-35,{
        padding: 35px 0;
    }
    .paragraf img{
        padding: 20px 0 35px 0;
    }
    .description h2{
        font-size: 24px;
    }
    .description li{
        font-size: 13px;
    }
    .b-font::first-letter{
        padding-right: 15px;
        margin: -60px 0;
        font-size: 110px;
        float: left;
    }
    @media only screen and (max-width: 767px) {
        .paragraf h2{
            font-size: 26px;
        }
    }
</style>


<section class="section-padding">
    <img src="{{ asset('assets/img/press/PRESS_5_Dekorasi Pernikahan Dengan Menggunakan Bunga Eustoma Russellianum Terbanyak/PRESS_5_Dekorasi-Pernikahan-Dengan-Menggunakan-Bunga-Eustoma-Russellianum-Terbanyak_BANNER.jpg') }}" alt="" class="img-fluid" width="100%">
    <div class="container px-5 mb-5">
        <div class="paragraf">
            <h2 class="text-center fw-bold title">Dekorasi Pernikahan Dengan Menggunakan
                Bunga Eustoma Russellianum Terbanyak</h2>
            <p class="b-font">Vincent Luhur Flowers &amp; Design merancang dekorasi pernikahan dengan menggunakan hanya 1 jenis bunga Import dari Vietnam, yaitu Eustoma russellianum atau dikenal dengan bunga Lisianthus. Bunga berwarna putih dengan jumlah yang mencapai 20.000 kuntum menghiasi ruangan berukuran panjang 1.800 meter dan lebar 24.500 meter tanpa campuran bunga jenis lain atau warna lainnya.</p>
        </div>
    </div>
</section>

@endsection

@push('scripts')

@endpush
