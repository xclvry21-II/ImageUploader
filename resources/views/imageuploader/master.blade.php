<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>{{ $title }} | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard_body') }}/assets/images/mynotes_favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('dashboard_body') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('dashboard_body') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('dashboard_body') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('dashboard_body') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_body') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashboard_body') }}/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('dashboard_body') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        {{-- toastr --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        {{-- Select2 (multi select dropdown) --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        {{-- summernote --}}
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            @yield('index')
            <!-- End Page-content -->

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->


        <!-- JAVASCRIPT -->
        <script src="{{ asset('dashboard_body') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('dashboard_body') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('dashboard_body') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('dashboard_body') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('dashboard_body') }}/assets/libs/node-waves/waves.min.js"></script>
 
        <!-- Datatable init js -->
        <script src="{{ asset('dashboard_body') }}/assets/js/pages/datatables.init.js"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('dashboard_body') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('dashboard_body') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('dashboard_body') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('dashboard_body') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
         
        <script src="{{ asset('dashboard_body') }}/assets/js/pages/dashboard.init.js"></script>
 
        <!-- init js -->
        <script src="{{ asset('dashboard_body') }}/assets/js/pages/form-editor.init.js"></script>
 
        {{-- sweetalert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
        <script src="{{ asset('dashboard_body') }}/assets/js/code.js"></script>
 
        <!-- materialdesign icon js-->
        <script src="{{ asset('dashboard_body') }}/assets/js/pages/materialdesign.init.js"></script>
 
        <!-- App js -->
        <script src="{{ asset('dashboard_body') }}/assets/js/app.js"></script>
        
        {{-- moment --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
        
        {{-- Toastr --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
        @endif 
        </script>

       

        
    </body>

</html>