<!doctype html>
<html lang="en">
 <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin in Laravel 9" name="description" />
        <meta content="AdminPanel" name="Prabhjot" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="{{ url('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ url('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />     

        <!-- Bootstrap Css -->
        <link href="{{ url('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{ url('admin/assets/css/style.css') }}" id="app-style" rel="stylesheet" type="text/css" />

  </head>

    <body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
        <!-- Begin page -->
        <div id="layout-wrapper">

            
        @include('admin.shared.header')

            <!-- ========== Left Sidebar Start ========== -->
        @include('admin.shared.sidebar')   
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <!--<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboards</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item">Dashboards </li>
                                            <li class="breadcrumb-item active">MYL</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>---->
                        <!-- end page title -->

                        @yield('content')
                        <!-- end row -->

                       
                        <!-- end row -->
                        

                         
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @include('admin.shared.footer')     


            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
         
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
     
 
        <!-- JAVASCRIPT -->
        <script src="{{ url('admin/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ url('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <!-- <script src="{{ url('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ url('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script> -->
        
        <!-- Responsive examples -->
        <!-- <script src="{{ url('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script> -->

        <!-- Datatable init js -->
        <script src="{{ url('admin/assets/js/pages/datatables.init.js') }}"></script>    

        <script src="{{ url('admin/assets/js/app.js') }}"></script>


 

    </body>
 </html>
