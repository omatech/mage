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
    <div class="row align-items-center w-100 align-items-stretch">
        <div class="col-12 col-lg-7 register-bg" style="background-position:center; background-image: url('/vendor/mage/images/login.jpg')">
            <div class="row justify-content-md-center align-items-md-center">             
                <div class="col-12 col-md-7 col-lg-9 register-text">
                    <h1 class="register-title">@yield('page-title')</h1>
                    <p class="epi">@yield('page-description')</p>
                    <p class="op-50">@yield('page-subdescription')</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 align-items-stret h-100 align-items-center d-flex justify-content-center">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>