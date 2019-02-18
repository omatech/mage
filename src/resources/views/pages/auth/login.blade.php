<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME')}} | Login</title>

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
                 style="background-image: url('vendor/mage/img/login.jpg');">
                <div class="col-md-8">
                    <h1 class="text-white mb-3">Login in Mage</h1>
                    <p class="text-white">Speak, friend and enter.</p>
                </div>
            </div>
            <div class="col-lg-4 align-items-stret h-100 align-items-center d-flex justify-content-center">
                <div class=" auth-content text-center">
                    <div class="mb-4">
                        <i class="fa fa-unlock icon-login"></i>
                    </div>
                    <h3 class="mb-5">@lang('mage.auth.login.login')</h3>
                    <form action="{{route('mage.auth.login')}}" method="POST" class="social-auth-links text-center mb-4">
                        {{ csrf_field() }}
                        @method('POST')
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="@lang('mage.auth.login.email')">
                            <div class="input-group-append">
                                <span class="fa fa-envelope input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" name="password" class="form-control" placeholder="@lang('mage.auth.login.password')">
                            <div class="input-group-append">
                                <span class="fas fa-key input-group-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">@lang('mage.auth.login.signin')</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-2 text-muted"><a href="auth-reset-password-v2.html">@lang('mage.auth.login.forgot-password')</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
