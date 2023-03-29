@extends('layouts.layout')

@section('title', 'Contact')

@section('content')

<style>
    .input{
        border: none;
        border-bottom: 1px solid #c49a6c;
        border-radius: 0;
    }
    .input::placeholder{
        font-size: 14px;
        color: #c49a6c;
    }
    .send{
        background: #c49a6c;
        color: white;
    }
    .send:hover{
        color: #c49a6c;
        background: white;
        border: 1px solid #c49a6c;
    }
    .input-field{
        font-size: 14px;
        color: #c49a6c;
    }
    .h-full{
        height: 65vh;
    }

</style>

<section class="section-padding ">
    <div class="container px-5 h-full">
        <div class="row d-flex justify-content-center ">
            <form class="col-sm-7">
                <div class="mb-3">
                    <input type="text" class="form-control input input-field" id="name" placeholder="Your Name (Required)" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control input input-field" id="email" placeholder="Your Email (Required)" required>
                </div>
                <div class="mb-3">
                    <textarea name="desc" id="desc" cols="30" rows="6" class="form-control input input-field" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn send px-4 fw-bolder my-4"> Send</button>
            </form>
        </div>
</section>

@endsection

@push('scripts')

@endpush
