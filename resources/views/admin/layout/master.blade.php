<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-select/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/select2/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css')}}">

    <!-- bootstrap rtl -->
   <link rel="stylesheet" href="{{asset('public/dashboard/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/dashboard/css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('public/dashboard/css/custom.css')}}">
    @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    @if(Route::currentRouteName() != 'admin.show.login')
        @include('admin.partial.navbar')
        @include('admin.partial.sidebar')
    @endif

    <div class="content-wrapper">

        @yield('content')
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>

    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/dataTables.buttons.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.colVis.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.flash.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.html5.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.print.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-keytable/js/dataTables.keyTable.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-keytable/js/keyTable.bootstrap4.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-select/js/dataTables.select.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/datatables-select/js/select.bootstrap4.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/pdfmake/pdfmake.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/select2/js/select2.js')}}"></script>
    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.js')}}"></script>
{{--    <script src="{{asset('vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.js')}}"></script>--}}
    <script src="{{asset('vendor/almasaeed2010/adminlte/dist/js/adminlte.js')}}"></script>
    <script src="{{asset('public/dashboard/js/custom.js')}}"></script>

    <x-admin.alert/>
    <x-admin.confirm-delete/>

    <script>

        $(function () {



            var a = $("#datatable-table").DataTable({
                // responsive: true,
                // scr
                // scrollX:        true,
        // scrollCollapse: true,
                dom: 'Bfrtip',
                pageLength: 50,
                buttons: [
                    {
                        extend: 'csv',
                        text: 'ملف Excel',
                        // exportOptions: {
                        //     columns: [2, 1, 0]
                        // },
                        className: "btn btn-success"
                    
                    },
                    {
                        extend: 'print',
                        text: 'ملف PDF',
                        // exportOptions: {
                        //     columns: [2, 1, 0]
                        // },
                        className: "btn btn-inverse"
                    },
                ],

                "language": {
                    "sEmptyTable": "ليست هناك بيانات متاحة في الجدول",
                    "sLoadingRecords": "جارٍ التحميل...",
                    "sProcessing": "جارٍ التحميل...",
                    "sLengthMenu": "أظهر _MENU_ مدخلات",
                    "sZeroRecords": "لم يعثر على أية سجلات",
                    "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                    "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                    "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                    "sInfoPostFix": "",
                    "sSearch": "ابحث:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "الأول",
                        "sPrevious": "السابق",
                        "sNext": "التالي",
                        "sLast": "الأخير"
                    },
                    "oAria": {
                        "sSortAscending": ": تفعيل لترتيب العمود تصاعدياً",
                        "sSortDescending": ": تفعيل لترتيب العمود تنازلياً"
                    }
                }
            });
            a.buttons().container().appendTo("#datatable-table_wrapper .col-md-6:eq() ")
            

        });

       function confirmDelete(url){
           $('#confirm-delete-form').attr('action',url);
       }



    </script>
    @yield('script')
</body>
</html>
