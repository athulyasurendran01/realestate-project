<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
        <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ URL::asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="{{ URL::asset('admin/css/sidebar-nav.min.css') }}" rel="stylesheet">
        <!-- toast CSS -->
        <link href="{{ URL::asset('admin/css/jquery.toast.css') }}" rel="stylesheet">
        <!-- animation CSS -->
        <link href="{{ URL::asset('admin/css/animate.css') }}s" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet">
        <!-- color CSS -->
        <link href="{{ URL::asset('admin/css/default.css') }}" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>


    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
         @include('admin.includes.sidenav')
        </div>
        <!-- Left Sidebar End -->

        <div class="content-page">
            <!-- Top Bar Start -->
            @include('admin.includes.header')
            <!-- Top Bar End -->

            <!-- Start Page content -->
            <div class="content">
                <div id="page-wrapper">
                    <div class="container-fluid">
                        @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                            {{ Session::get('message') }}
                            <span class="close-notification">x</span>
                        </p>
                        @endif
                        @yield('content')
                    </div> <!-- container -->
                </div>
            </div> <!-- content -->
            
            <footer class="footer text-center"> 
                {!! date('Y') !!} &copy; Ample Admin brought to you by wrappixel.com 
            </footer>

        </div>

    </div>
    <!-- END wrapper -->

    <script src="{{ URL::asset('admin/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ URL::asset('admin/js/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ URL::asset('admin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ URL::asset('admin/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{ URL::asset('admin/js/jquery.waypoints.js')}}"></script>
    <script src="{{ URL::asset('admin/js/jquery.counterup.min.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ URL::asset('admin/js/jquery.sparkline.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('admin/js/custom.min.js')}}"></script>
    <script src="{{ URL::asset('admin/js/dashboard1.js')}}"></script>
    <script src="{{ URL::asset('admin/js/jquery.toast.js')}}"></script>
    <!-- jQuery  -->
    @yield('jsfiles' ,'')
</html>
