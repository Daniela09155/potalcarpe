<!DOCTYPE html>
<html lang="en">
   
<!-- Cabecera HTML, responsive page, titulo etc. -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Sistema Control De Asistencias </title>
    <!-- icono de la pestaña -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logooxd.ico')}}">
    <!-- inicia css -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{asset ('assets/plugins/datepicker/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    @stack('horarios-style')
    <!-- fin de cabecera  -->
    </head>
    <body class="vertical-layout">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.page_templates.auth')
        @endauth
        @guest()
            @include('layouts.page_templates.guest')
        @endguest
        <!--   Core JS Files   -->
        <!-- Start js -->        
 
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/vertical-menu.js') }}"></script>
    <!-- Switchery js -->
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
    <!-- Chart js -->
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
    <!-- Piety Chart js -->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script> 
    <!-- Vector Maps js -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- Custom Dashboard Social js -->   
    <script src="{{ asset('assets/js/custom/custom-dashboard-social.js') }}"></script>
    <!-- Core js -->
    <script src="{{ asset('assets/js/core.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.js"></script>
   
    <!-- End js -->
</body>
</html>