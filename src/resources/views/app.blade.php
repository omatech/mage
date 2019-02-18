<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME')}} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('mage::components.favicon')
    @section('styles')
        <link rel="stylesheet" href="{{ mix('/mage.css', '/vendor/mage') }}">
    @show

    @routes
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('mage::components.navbar.layout')

        @include('mage::components.sidebar.layout')
        @yield('content')

        @include('mage::components.footer.layout')
    </div>

    @section('scripts')
        <script src="{{ mix('/mage.js', '/vendor/mage') }}"></script>
    @show
</body>
</html>
