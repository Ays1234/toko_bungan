@extends('backend.layouts.master')
@section('title', 'Decoration')
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
                <a href="#">Project</a>
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
                            <a href="{{route('decoration_cms.form')}}" class="btn btn-primary b-r-xl"><i
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
                                    <th class="align-middle">Photo</th>
                                    <th class="align-middle">Nama</th>
                                    <th class="align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($decoration as $item)
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img alt="..." class="d-block rounded" src="{{ asset($item->image_decoration) }}" width="300px">
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <div class='btn-group'>
                                            <a href="/decoration_cms/edit/{{ $item->id }}"><button
                                                    class="btn btn-secondary btn-sm" type="button">
                                                    <i class="fa fa-pencil"></i>
                                                </button></a>
                                        </div>
                                        <div class='btn-group'>
                                            <form action="/destroy_decoration/{{ $item->id }}" method="POST" enctype="multipart/form-data"> @csrf
                                                <button type="submit" class="btn btn-dark btn-sm" type="button">
                                                    <i class="fa fa-trash"></i>
                                                </button></form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
