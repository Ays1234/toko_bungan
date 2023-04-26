@extends('backend.layouts.master')
@section('title', 'Edit Categoty Press')
@section('css')

@endsection

@section('content')
<div class="row wrapper border-bottom page-heading">
    <div class="col-lg-10">
        <h2>@yield('title')</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('dashboard.index')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Master</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>@yield('title')</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h4 class="font-weight-bold">@yield('title') &nbsp;
                        <small class="text-danger"> (*) Wajib diisi</small>
                    </h4>
                    <div class="ibox-tools">
                        <div class="p-0 text-right">
                            <a href="{{route('category.index')}}" class="btn btn-success b-r-xl"><i
                                    class="fa fa-arrow-left"></i>&nbsp;
                                kembali</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    @foreach($id as $category)
                        <form id="submitData" action="/update_category/{{ $category->id }}" method="post" style="overflow-x: none" enctype="multipart/form-data">
                           @csrf
                            <div class="row px-2">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Judul <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control py-2 b-r-md" id="judul" name="judul"
                                                value="{{ $category->judul }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Deskripsi <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10">{{ $category->deskripsi }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Photo <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input id="logo" type="file" name="photo" class="custom-file-input">
                                                <label for="logo" class="custom-file-label">Choose file...</label>
                                            </div>
                                            <div class="d-block rounded">
                                                <img src="{{ asset('public/core/uploads/category/'.$category->photo) }}" height="250" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row d-flex justify-content-end">
                                <div class="col-sm-4 col-sm-offset-2 d-flex justify-content-end">
                                    <a class="btn btn-default" href="{{route('category.index')}}">Batal</a>
                                    <button class="btn btn-primary mx-2" type="submit" id="simpan">
                                        <span class=""><i class="fa fa-floppy-o"></i> Simpan</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        $(".select2").select2({
            placeholder: "pilih device ....",
            allowClear: true
        });
        $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });
</script>
@endpush
