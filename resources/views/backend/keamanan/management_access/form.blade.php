@extends('backend.layouts.master')
@section('title', 'Tambah Management Access')
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
                <a href="#">Keamanan</a>
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
                            <a href="{{route('m_access.index')}}" class="btn btn-success b-r-xl"><i
                                    class="fa fa-arrow-left"></i>&nbsp;
                                kembali</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action="">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Role <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Permission <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox" type="checkbox">
                                    <label for="checkbox">
                                        Master
                                    </label>
                                    <ul style="list-style: none">
                                        <li>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox0" type="checkbox">
                                                <label for="checkbox0">
                                                    Staff
                                                </label>
                                            </div>
                                            <ul style="list-style: none">
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1">
                                                            Tambah
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox2" type="checkbox">
                                                        <label for="checkbox2">
                                                            Edit
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox3" type="checkbox">
                                                        <label for="checkbox3">
                                                            Detail
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox4" type="checkbox">
                                                        <label for="checkbox4">
                                                            Hapus
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox5" type="checkbox">
                                                <label for="checkbox5">
                                                    Category Press
                                                </label>
                                            </div>
                                            <ul style="list-style: none">
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox6" type="checkbox">
                                                        <label for="checkbox6">
                                                            Tambah
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox7" type="checkbox">
                                                        <label for="checkbox7">
                                                            Edit
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox8" type="checkbox">
                                                        <label for="checkbox8">
                                                            Hapus
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9">
                                        Content
                                    </label>
                                    <ul style="list-style: none">
                                        <li>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox10" type="checkbox">
                                                <label for="checkbox10">
                                                    Carrousel Banner
                                                </label>
                                            </div>
                                            <ul style="list-style: none">
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox11" type="checkbox">
                                                        <label for="checkbox11">
                                                            Tambah
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox12" type="checkbox">
                                                        <label for="checkbox12">
                                                            Edit
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox13" type="checkbox">
                                                        <label for="checkbox13">
                                                            Hapus
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox14" type="checkbox">
                                                <label for="checkbox14">
                                                    Press Artikel
                                                </label>
                                            </div>
                                            <ul style="list-style: none">
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox15" type="checkbox">
                                                        <label for="checkbox15">
                                                            Tambah
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox16" type="checkbox">
                                                        <label for="checkbox16">
                                                            Edit
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox17" type="checkbox">
                                                        <label for="checkbox17">
                                                            Hapus
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox18" type="checkbox">
                                    <label for="checkbox18">
                                        Project
                                    </label>
                                    <ul style="list-style: none">
                                        <li>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox19" type="checkbox">
                                                <label for="checkbox19">
                                                    Decoration
                                                </label>
                                            </div>
                                            <ul style="list-style: none">
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox20" type="checkbox">
                                                        <label for="checkbox20">
                                                            Tambah
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox21" type="checkbox">
                                                        <label for="checkbox21">
                                                            Edit
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox22" type="checkbox">
                                                        <label for="checkbox22">
                                                            Hapus
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox23" type="checkbox">
                                                <label for="checkbox23">
                                                    Floral Styling
                                                </label>
                                            </div>
                                            <ul style="list-style: none">
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox24" type="checkbox">
                                                        <label for="checkbox24">
                                                            Tambah
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox25" type="checkbox">
                                                        <label for="checkbox25">
                                                            Edit
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox26" type="checkbox">
                                                        <label for="checkbox26">
                                                            Hapus
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox27" type="checkbox">
                                    <label for="checkbox27">
                                        Keamanan
                                    </label>
                                    <ul style="list-style: none">
                                        <li>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox28" type="checkbox">
                                                <label for="checkbox28">
                                                    Management Access
                                                </label>
                                            </div>
                                            <ul style="list-style: none">
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox29" type="checkbox">
                                                        <label for="checkbox29">
                                                            Tambah
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox30" type="checkbox">
                                                        <label for="checkbox30">
                                                            Edit
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox31" type="checkbox">
                                                        <label for="checkbox31">
                                                            Detail
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox32" type="checkbox">
                                                        <label for="checkbox32">
                                                            Hapus
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox33" type="checkbox">
                                    <label for="checkbox33">
                                        Log Activitas
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row d-flex justify-content-end">
                            <div class="col-sm-4 col-sm-offset-2 d-flex justify-content-end">
                                <a class="btn btn-default" href="{{route('m_access.index')}}">Batal</a>
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

</script>
@endpush
