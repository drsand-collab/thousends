<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        http-equiv="Content-Security-Policy"
        content="script-src
        https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js
        https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js
        https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js
       {{ asset('/assets/js/utils.js') }}
       {{ asset('/assets/js/links.js') }}
       {{ asset('/assets/js/thousand.js') }}
       "/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Einzelwerk Tests | @yield('title', 'Home')</title>

    @section('headerScripts')
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">

        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @show

</head>
<body>
@include('components.nav_bar_top')
@yield('content')
<div class="container"></div>
@section('footerScripts')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
@show

{{--@stack('scripts')--}}

</body>
</html>
