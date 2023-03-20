@extends('backend.layouts.master')
@section('title', 'Edit Carrousel Benner')
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
                <a href="#">Content</a>
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
                            <a href="{{route('carrousel.index')}}" class="btn btn-success b-r-xl"><i
                                    class="fa fa-arrow-left"></i>&nbsp;
                                kembali</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                        <form id="submitData" action="/add_carrousel/create" method="post" style="overflow-x: none" enctype="multipart/form-data">
                          @csrf
                            <div class="row px-2">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Nama <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control py-2 b-r-md" id="nama" name="name"
                                                value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Photo <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input id="logo" type="file" name="banner_image" class="custom-file-input">
                                                <label for="logo" class="custom-file-label">Choose file...</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold ">Device<span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <select name="type_device" class="select2 form-control">
                                                <option></option>
                                                <option value="desktop">Dekstop</option>
                                                <option value="mobile">Mobile</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row d-flex justify-content-end">
                                <div class="col-sm-4 col-sm-offset-2 d-flex justify-content-end">
                                    <a class="btn btn-default" href="{{route('carrousel.index')}}">Batal</a>
                                    <button class="btn btn-primary mx-2" type="submit" id="simpan">
                                        <span class=""><i class="fa fa-floppy-o"></i> Simpan</span>
                                    </button>
                                </div>
                            </div>
                        </form>
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
