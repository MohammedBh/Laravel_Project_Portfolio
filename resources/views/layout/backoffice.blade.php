<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />

    <title>Home - Backoffice</title>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="#" class="simple-text logo-normal"><i class="fal fa-tachometer-alt-slow mx-3"></i>
                    DASHBOARD</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Home</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Navbar</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Hero</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">About</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Facts</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Skils</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Skills Dyn.</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Portfolio</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Portfolio Dyn.</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Services</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Services Dyn.</p>
                        </a>
                    </li>
                    <li>
                        <a class="text-danger" href="#">
                            <i class="nc-icon nc-tile-56 text-danger"></i>
                            <p class="">Contact</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Home</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            @yield('content')
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('js/core/jquery.min.js')}}"></script>
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('js/paper-dashboard.min.js?v=2.0.1" type="text/javascript')}}"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('demo/demo.js')}}"></script>
</body>

</html>
