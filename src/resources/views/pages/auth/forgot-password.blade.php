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
                        <i class="fa fa-key icon-login"></i>
                    </div>
                    <h3 class="mb-5">@lang('mage.auth.forgot-password')</h3>
                    {{ dump($errors)}}
                    @if(!session()->has('status'))
                    <form action="{{route('mage.auth.password.email')}}" method="POST" class="social-auth-links text-center mb-4">
                        {{ csrf_field() }}
                        @method('POST')
                        <div class="input-group mb-4">
                        <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="@lang('mage.auth.forgot-password.email')" value="{{old('email')}}">
                            <div class="input-group-append">
                                <span class="fa fa-envelope input-group-text"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">@lang('mage.auth.forgot-password.reset')</button>
                            </div>
                        </div>
                    </form>
                    @else
                    <div class="justify-content-center input-group mb-5">
                        <i class="far fa-check-circle" class="icon-reset-success" style="font-size: 7rem"></i>
                    </div>

                    {{ session('status') }}

                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
