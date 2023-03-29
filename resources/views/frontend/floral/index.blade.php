@extends('layouts.layout')

@section('title', 'Floral Styling')

@section('content')

<style>
    .rw{
        justify-content: center;
    }
    @media screen and (min-width: 768px) {
        .img1{
            margin-bottom: -50px;
        }
        .img2{
            margin-top: 150px;
        }
        .img3{
            margin-top: -150px; margin-bottom: 100px;
        }
        .img4{
            margin-top: 150px;
        }
        .mb-cus{
            margin-bottom: 100px;
        }
        .header-bottom{
            margin-top: 150px;
        }

    }

    @media only screen and (max-width: 767px) {
        .img1{
            margin-bottom: 20px;
        }
        .img2{
            margin-bottom: 20px;
        }
        .img3{
            margin-bottom: 20px;
        }
        .img4{
            margin-bottom: 20px;
        }
    }


</style>

<section class="section-padding">
    <div class="container mb-5">
        <div class="mb-cus header-bottom">
            <div class="row rw">
                <div class="col-sm-5 img3">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_1.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="col-sm-6 img4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_2.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="mb-cus ">
            <div class="row rw" >
                <div class="col-sm-6 img1">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_3.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="col-sm-5 d-flex justify-content-end img2" >
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_4.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
            <div class="row rw">
                <div class="col-sm-5 img3">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_5.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="col-sm-6 img4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_6.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="mb-cus ">
            <div class="row rw" >
                <div class="col-sm-6 img1">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_7.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="col-sm-5 d-flex justify-content-end img2" >
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_8.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
            <div class="row rw">
                <div class="col-sm-5 img3">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_9.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="col-sm-6 img4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_10.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="mb-cus ">
            <div class="row rw" >
                <div class="col-sm-6 img1">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_11.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="col-sm-5 d-flex justify-content-end img2" >
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_12.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-sm-4">
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_1.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_2.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_3.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_4.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_5.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_6.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_7.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_8.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-4">

                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_9.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_10.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_11.jpg') }}" alt="floral" class="img-fluid">
                </div>
                <div class="row mb-4">
                    <img src="{{ asset('assets/img/floral-styling/FLORAL-STYLING_12.jpg') }}" alt="floral" class="img-fluid">
                </div>
            </div>
        </div> --}}
    </div>
</section>

@endsection

@push('scripts')

@endpush
