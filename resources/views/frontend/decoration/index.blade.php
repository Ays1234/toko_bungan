@extends('layouts.layout')

@section('title', 'Decoration')

@section('content')

<style>

    .carousel{
        margin-top: -50px;
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .w-100{
            height: auto;
        }
        footer{
            margin-top:-240px;
        }
        .carousel{
            margin-top: 0px;
        }
        body{
            overflow-y: hidden;
        }
    }
    @media only screen and (max-width: 767px) {
        .w-100{
            height: auto;
        }
        footer{
            margin-top:-330px;
        }
        .carousel{
            margin-top: 0px;
        }
        html, body{
            overflow: hidden !important;
        }

    }
</style>
    <div class="container">
        <div class="carousel slide pb-5" data-bs-ride="carousel" id="carouselExampleIndicators">
            {{-- <div class="carousel-indicators">
                <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button>
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
            </div> --}}
            <div class="carousel-inner">
                @foreach ($decorations as $decoration)
                <div class="carousel-item active">
                    <img alt="..." class="d-block w-100" src="{{ asset('storage/'.$decoration->image_decoration) }}">
                </div>   
                @endforeach
                {{-- <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-2.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-3.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-4.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-5.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-6.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-7.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-8.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-9.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-10.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-11.jpg') }}">
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/img/decoration/DECORATION-12.jpg') }}">
                </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
@endsection

@push('scripts')
<script>

</script>
@endpush
