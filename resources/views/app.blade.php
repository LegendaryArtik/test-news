<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('og_data')
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/diamedicus-180x180.png') }}"/>
    <link media="all" rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('head_scripts')
</head>
<body>
@include('header')
<main>
    @yield('content')
</main>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
