<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <title>{{ env('APP_NAME')}} | @yield('web-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('mage::components.favicon')
    @section('styles')
        <link rel="stylesheet" href="{{ mix('/mage.css', '/vendor/mage') }}">
        @include('mage::assets.styles')
    @show
</head>
<body class="hold-transition sidebar-mini {{session('sidebar')}}">
    <div class="wrapper">
        @include('mage::components.navbar.layout')

        @include('mage::components.sidebar.layout')
        @yield('content')

        @include('mage::components.footer.layout')
    </div>
    @section('scripts')
        @routes
        @translations

        <script src="{{ mix('/mage.js', '/vendor/mage') }}"></script>
        @include('mage::assets.scripts')
    @show
</body>
</html>
