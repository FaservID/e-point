<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>E-POINT MTSN 1 MUBA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('assets/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="{{ asset('assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Select2 css -->
    <link href="{{ asset('assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker css -->
    <link href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Touchspin css -->
    <link href="{{ asset('assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Datepicker css -->
    <link href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Timepicker css -->
    <link href="{{ asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Flatpickr Timepicker css -->
    <link href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />


    @stack('custom-styles')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        @include('sweetalert::alert')

        @include('layouts.partials.header')

        <!-- ========== Left Sidebar Start ========== -->

        @include('layouts.partials.sidebar')

        <!-- ========== Left Sidebar End ========== -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    @yield('content')
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            @include('layouts.partials.footer')

            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- Code Highlight js -->
    <script src="{{ asset('assets/vendor/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/hyper-syntax.js') }}"></script>

    <!-- Datatables js -->
    <script src="{{ asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Datatable Demo Aapp js -->
    <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>

    <!-- Remixicons Icons Demo js -->
    <script src="{{ asset('assets/js/pages/demo.remixicons.js') }}"></script>

    <!-- MDI Icons Demo js -->
    <script src="{{ asset('assets/js/pages/demo.materialdesignicons.js') }}"></script>


    <!--  Select2 Plugin Js -->
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>

    <!-- Daterangepicker Plugin js -->
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Bootstrap Datepicker Plugin js -->
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Bootstrap Timepicker Plugin js -->
    <script src="{{ asset('assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>

    <!-- Input Mask Plugin js -->
    <script src="{{ asset('assets/vendor/jquery-mask-plugin/jquery.mask.min.js') }}"></script>

    <!-- Bootstrap Touchspin Plugin js -->
    <script src="{{ asset('assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>

    <!-- Bootstrap Maxlength Plugin js -->
    <script src="{{ asset('assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

    <!-- Typehead Plugin js -->
    <script src="{{ asset('assets/vendor/handlebars/handlebars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typeahead.js/typeahead.bundle.min.js') }}"></script>

    <!-- Flatpickr Timepicker Plugin js -->
    <script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Typehead Demo js -->
    <script src="{{ asset('assets/js/pages/demo.typehead.js') }}"></script>

    <!-- Timepicker Demo js -->
    <script src="{{ asset('assets/js/pages/demo.timepicker.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <script type="text/javascript">
        $('.delete').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Hapus Data?",
                text: "Data yang dihapus akan hilang selamanya.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel", "Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Selesaikan!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
    @stack('custom-scripts')
</body>

</html>
