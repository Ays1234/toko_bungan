@extends('backend.layouts.master')
@section('title', 'Beranda')
@section('css')

@endsection

@section('content')
<div class="row wrapper border-bottom page-heading">
    <div class="col-lg-10">
        <h2>Dashbard</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/dashboard">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Dashboard</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Selamat Datang</h2>
        </div>
    </div>
</div>

@endsection
@push('scripts')

@endpush
