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

@foreach ($id as $baca)
<section class="section-padding">
    <img src="{{ asset('storage/'.$baca->photo_banner_article) }}" alt="" class="img-fluid" width="100%">
    <div class="container px-5 mb-5">
        <div class="paragraf">
            <h2 class="text-center fw-bold title">{{ $baca->judul }}</h2>
            <p class="b-font">
                <div class="prose lg:prose-xl">{!! $baca->deskripsi !!}</div>
                {{-- {{ ()  }} --}}
            </p>
            {{-- {{ strip_tags($baca->deskripsi) }} --}}
        </div>
    </div>
</section>
    
@endforeach

@endsection

@push('scripts')

@endpush
