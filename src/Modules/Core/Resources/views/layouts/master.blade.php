<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module Core</title>

    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/css/main/app.css">
    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="https://zuramai.github.io/mazer/demo/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="https://zuramai.github.io/mazer/demo/assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/css/pages/datatables.css">

    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/core.css') }}"> --}}
</head>
<body>
    <div id="app">
        @extends('core::layouts.slidebar')
        @yield('content')
    </div>

    {{-- Laravel Mix - JS File --}}
    {{-- <script src="{{ mix('js/core.js') }}"></script>--}}
    <script src="https://zuramai.github.io/mazer/demo/assets/js/bootstrap.js"></script><div style="position: static !important;"></div>
    <script src="https://zuramai.github.io/mazer/demo/assets/js/app.js"></script>
    <script src="https://zuramai.github.io/mazer/demo/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="https://zuramai.github.io/mazer/demo/assets/js/pages/datatables.js"></script>
</body>
</html>
