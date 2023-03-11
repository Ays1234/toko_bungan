@extends('backend.layouts.master')
@section('title', 'Staff')
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
                    <h4 class="font-weight-bold">Data @yield('title')</h4>
                    <div class="ibox-tools">
                        <div class="p-0 text-right">
                            <a href="{{route('staff.form')}}" class="btn btn-primary b-r-xl"><i
                                    class="fa fa-plus-circle"></i>&nbsp;
                                Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive m-3">
                        <table id="table1" class="table p-3">
                            <thead>
                                <tr>
                                    <th width="5%" class="align-middle">#</th>
                                    <th class="align-middle">Nama</th>
                                    <th class="align-middle">Email</th>
                                    <th class="align-middle">Status</th>
                                    <th class="align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Panji</td>
                                    <td>panji@gmail.com</td>
                                    <td><span class="lable label-primary px-2 rounded">Aktif</span></td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm" type="button">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-dark btn-sm" type="button">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <a data-toggle="modal" href="#modal-form" class="btn btn-secondary btn-sm" type="button">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cahyono</td>
                                    <td>cahyono@gmail.com</td>
                                    <td><span class="lable label-primary px-2 rounded">Aktif</span></td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm" type="button">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-dark btn-sm" type="button">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <a data-toggle="modal" href="#modal-form" class="btn btn-secondary btn-sm" type="button">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="modal-form" class="modal fade" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>Detail</h4>
                                            <div class="table-responsive m-3">
                                                <table id="table1" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Kolom</th>
                                                            <th>Nilai</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Nama</td>
                                                            <td>Panji</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Email</td>
                                                            <td>panji@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>status</td>
                                                            <td><span class="lable label-primary px-2 rounded">Aktif</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Login Terakhir</td>
                                                            <td> - </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Tgl.Buat</td>
                                                            <td>07/03/2023</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                            <div class="col-sm-6">
                                                <a href="{{route('staff.index')}}" class="btn btn-default btn-sm">Tutup</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        table = $('#table1').DataTable({
            pageLength: 10,
            responsive: true,
            "searching": false,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                // { extend: 'copy' },
                // { extend: 'csv' },
                // { extend: 'excel', title: 'ExampleFile' },
                // { extend: 'pdf', title: 'ExampleFile' },

                // {
                //     extend: 'print',
                //     customize: function (win) {
                //         $(win.document.body).addClass('white-bg');
                //         $(win.document.body).css('font-size', '10px');
                //         $(win.document.thead).css('background:#1ab394', '10px');

                //         $(win.document.body).find('table')
                //             .addClass('compact')
                //             .css('font-size', 'inherit');
                //     }
                // }
            ]
        });
        table = $('#table_detail').DataTable({
            paging:false,
            responsive: true,
            "searching": false,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                // { extend: 'copy' },
                // { extend: 'csv' },
                // { extend: 'excel', title: 'ExampleFile' },
                // { extend: 'pdf', title: 'ExampleFile' },

                // {
                //     extend: 'print',
                //     customize: function (win) {
                //         $(win.document.body).addClass('white-bg');
                //         $(win.document.body).css('font-size', '10px');
                //         $(win.document.thead).css('background:#1ab394', '10px');

                //         $(win.document.body).find('table')
                //             .addClass('compact')
                //             .css('font-size', 'inherit');
                //     }
                // }
            ]
        });
    });
</script>
@endpush
