@extends('backend.layouts.master')
@section('title', 'Edit Staff')
@section('css')
<style>
    .select2{
        height: 20px;
    }
</style>
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
                            <a href="{{route('staff.index')}}" class="btn btn-success b-r-xl"><i
                                    class="fa fa-arrow-left"></i>&nbsp;
                                kembali</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    @foreach($id as $staff)
                        <form id="submitData" action="/update_staff/{{ $staff->id }}" method="post" style="overflow-x: none">
                            @csrf
                            <div class="row px-2">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold">Nama Lengkap <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control py-2 b-r-md" id="nama" name="name"
                                                value="{{ $staff->name }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold ">Email <span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control py-2 b-r-md" id="email" name="email"
                                                value="{{ $staff->email }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold ">Password <span class="text-danger">*</span></label>
                                        <div class="col-md-9 input-group">
                                            <input type="password" class="form-control py-2 b-r-md" id="password"
                                                name="password" value="" required>
                                                <span
                                                    class="input-group-append">
                                                    <button type="button"
                                                        class="bg-white btn border-bottom border-right border-top" onclick="showpass()"><i
                                                        class="fa fa-eye-slash"></i>
                                                    </button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="decompordis" class="col-md-3 col-form-label font-weight-bold ">Status<span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <select name='status' class="select2 form-control">
                                                <option></option>
                                                <option value="active" {{ $staff->status =='active' ? 'selected' : '' }}>Aktif</option>
                                                <option value="disable" {{ $staff->status =='disable' ? 'selected' : '' }}>Non Aktif</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group row d-flex justify-content-end">
                                <div class="col-sm-4 col-sm-offset-2 d-flex justify-content-end">
                                    <a class="btn btn-default" href="{{route('staff.index')}}">Batal</a>
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
    // function showpass() {
    // var x = document.getElementById("password");
    //     if (x.type === "password") {
    //         x.type = "text";
    //     } else {
    //         x.type = "password";
    //     }
    // }
    $(document).ready(function () {
        $(".select2").select2({
            placeholder: "pilih status ....",
            allowClear: true
        });
    });
</script>
@endpush
