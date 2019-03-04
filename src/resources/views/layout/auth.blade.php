<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME')}} | @yield('web-title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('mage::components.favicon')
    @section('styles')
        <link rel="stylesheet" href="{{ mix('/mage.css', '/vendor/mage') }}">
    @show
</head>
<body>
<div class="auth-wrapper align-items-stretch">
    <div class="row align-items-center w-100 align-items-stretch bg-white">
        <div class="d-none d-lg-flex col-lg-8 auth-bg-img align-items-center d-flex justify-content-center"
             style="background-image: url('/vendor/mage/img/login.jpg');">
            <div class="col-md-8">
                <h1 class="text-white mb-3">Login in Mage</h1>
                <p class="text-white">Speak, friend and enter.</p>
            </div>
        </div>
        <div class="col-lg-4 align-items-stret h-100 align-items-center d-flex justify-content-center">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
