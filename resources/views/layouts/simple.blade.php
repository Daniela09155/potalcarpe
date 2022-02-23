<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{env('APP_NAME', 'Laravel')}} - @yield('htmlheader_title', env('APP_TITLE_PAGE', 'Portal')) </title>

        <meta name="description" content="@yield('htmlheader_description', env('APP_TITLE_PAGE', 'Portal'))">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logooxd.ico')}}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
        <meta name="theme-color" content="#3570C1">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" id="css-main" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-theme" href="{{ asset('css/dashmix.css') }}">

        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
       
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Dashmix Core JS -->
        <script src="{{ asset('js/dashmix.app.js') }}"></script>

        <!-- Laravel Original JS -->
        <script src="{{ asset('js/inventarios.app.js') }}"></script>

        @yield('js_after')
    </body>
</html>
