<!--
    *
    *  INSPINIA - Responsive Admin Theme
    *  version 2.8
    *
    -->
    <!DOCTYPE html>
    <html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>CMS - Vincent Luhur | @yield('title')</title>

        <link rel="icon" type="image/x-icon" href="assets/img/fav.ico">

        <link href="{{ asset('assets/inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">


        <link href="{{ asset('assets/inspinia/css/custom1.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/inspinia/css/style1.css')}}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/iCheck/custom.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/cropper/cropper.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/switchery/switchery.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/nouslider/jquery.nouislider.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/ionRangeSlider/ion.rangeSlider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/inspinia/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/select2/select2.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/plugins/dualListbox/bootstrap-duallistbox.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/inspinia/css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    </head>

    <body class="pace-done">

        <div id="wrapper">

            <!-- Navigation -->
            @include('backend.layouts.navigation')

            <div id="page-wrapper" class="gray-bg">
                <!-- Page wrapper -->
                @include('backend.layouts.topbar')

                {{-- Content --}}
                @yield('content')

                <!-- Footer -->
                @include('backend.layouts.footer')

            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="{{ asset('assets/inspinia/js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('assets/inspinia/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/inspinia/js/bootstrap.js') }}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{ asset('assets/inspinia/js/inspinia.js') }}"></script>
        <script src="{{ asset('assets/inspinia/js/plugins/pace/pace.min.js') }}"></script>
        <script src="{{ asset('assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <!-- Chosen -->
        <script src="{{ asset('assets/inspinia/js/plugins/chosen/chosen.jquery.js') }}"></script>

        <!-- JSKnob -->
        <script src="{{ asset('assets/inspinia/js/plugins/jsKnob/jquery.knob.js') }}"></script>

        <!-- Input Mask-->
        <script src="{{ asset('assets/inspinia/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

        <!-- Data picker -->
        <script src="{{ asset('assets/inspinia/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('assets/inspinia/js/plugins/dataTables/datatables.min.js')}}"></script>

        <!-- NouSlider -->
        <script src="{{ asset('assets/inspinia/js/plugins/nouslider/jquery.nouislider.min.js') }}"></script>

        <!-- Switchery -->
        <script src="{{ asset('assets/inspinia/js/plugins/switchery/switchery.js') }}"></script>

        <!-- IonRangeSlider -->
        <script src="{{ asset('assets/inspinia/js/plugins/ionRangeSlider/ion.rangeSlider.min.js') }}"></script>

        <!-- iCheck -->
        <script src="{{ asset('assets/inspinia/js/plugins/iCheck/icheck.min.js') }}"></script>

        <!-- MENU -->
        <script src="{{ asset('assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>

        <!-- Color picker -->
        <script src="{{ asset('assets/inspinia/js/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>

        <!-- Clock picker -->
        <script src="{{ asset('assets/inspinia/js/plugins/clockpicker/clockpicker.js') }}"></script>

        <!-- Image cropper -->
        <script src="{{ asset('assets/inspinia/js/plugins/cropper/cropper.min.js') }}"></script>

        <!-- Date range use moment.js same as full calendar plugin -->
        <script src="{{ asset('assets/inspinia/js/plugins/fullcalendar/moment.min.js') }}"></script>

        <!-- Date range picker -->
        <script src="{{ asset('assets/inspinia/js/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <!-- Select2 -->
        <script src="{{ asset('assets/inspinia/js/plugins/select2/select2.full.min.js') }}"></script>

        <!-- TouchSpin -->
        <script src="{{ asset('assets/inspinia/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>

        <!-- Tags Input -->
        <script src="{{ asset('assets/inspinia/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

        <!-- Dual Listbox -->
        <script src="{{ asset('assets/inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        @stack('scripts')
    </body>

    </html>
