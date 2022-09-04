<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Dashboard 3</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('adminlte3/dist/css/adminlte.min.css') }}">

        @yield('styles')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('core::admin.layouts.header')

            @include('core::admin.layouts.sidebar')

            @yield('content')

            @include('core::admin.layouts.footer')
        </div>
    </body>
</html>
