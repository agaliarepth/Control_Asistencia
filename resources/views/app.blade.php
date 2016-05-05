<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>ASISTENCIA-2015</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ asset('/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />

        <!-- Theme style -->
        <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link href="{{ asset('/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{ asset('/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{{ asset('/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('/plugins/jQueryUI/jquery.ui.autocomplete.css') }}" rel="stylesheet" type="text/css" />

        <!-- Date Picker -->
        <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <div class="wrapper">

            @include('includes.header')
            @include('includes.sidebar')
            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <section class="content-header">
                    <h1>
                   
                 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('content')
               
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2015 <a href="http://almsaeedstudio.com">Ing Elver Vasquez Segales</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->
        <!-- jQuery 2.1.3 -->
        <script src="{{ asset('/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="{{ asset('/bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/bootstrap/js/modal.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/jQueryUI/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
        @yield('scripts-datatables')
        <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/dist/js/app.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/dist/js/demo.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/scripts/scripts.js')}}" type="text/javascript"></script>
        
  <section >
     
   </section>
    </body>
</html>
@yield('scripts')