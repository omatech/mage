<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mage</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @include('mage::components.favicon')
    @section('styles')
        <link rel="stylesheet" href="{{ mix('/mage.css', '/vendor/mage') }}">
    @show
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Mage</b>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Speak, friend and enter</p>
                <form action="{{route('mage.auth.login')}}" method="POST" class="social-auth-links text-center mb-3">
                    {{ csrf_field() }}
                    @method('POST')
                    <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="@lang('mage.auth.login.email')">
                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="@lang('mage.auth.login.password')">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-primary">@lang('mage.auth.login.signin')</button>
                        </div>
                    </div>
                </form>    
                <p class="mb-1">
                    <a href="#">@lang('mage.auth.login.forgot-password')</a>
                </p>
            </div>
        </div>
    </body>
</html>
