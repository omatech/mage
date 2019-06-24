@extends('mage::layout.auth')
@section('web-title', __('mage.auth.reset-password.web-title'))
@section('page-title', __('mage.auth.reset-password.page-title'))
@section('page-description', __('mage.auth.reset-password.page-description'))
@section('page-subdescription', __('mage.auth.reset-password.page-subdescription'))

@section('content')
    <div class=" auth-content">
        <div class="mb-4 text-center">
            <i class="fa fa-key icon-login"></i>
        </div>
        <h3 class="mb-5 text-center">@lang('mage.auth.reset-password')</h3>
        <form method="POST" action="{{ route('mage.auth.password.update') }}" class="mb-4">
            {{ csrf_field() }}
            @if($errors->count())
                <div class="input-group mb-3">
                    <p class="text-danger" style="margin:0 auto;"><span>{{ $errors->first() }}</span></p>
                </div>
            @endif
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @if($errors->count()) is-invalid @endif" placeholder="@lang('mage.auth.reset-password.email')">
                <div class="input-group-append">
                    <span class="fa fa-envelope input-group-text"></span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @if($errors->count()) is-invalid @endif" placeholder="@lang('mage.auth.reset-password.password')">
                <div class="input-group-append">
                    <span class="fas fa-key input-group-text"></span>
                </div>
            </div>
            <div class="input-group mb-4">
                <input type="password" name="password_confirmation" class="form-control @if($errors->count()) is-invalid @endif" placeholder="@lang('mage.auth.reset-password.repeat-password')">
                <div class="input-group-append">
                    <span class="fas fa-key input-group-text"></span>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">@lang('mage.auth.reset-password.reset')</button>
                </div>
            </div>
        </form>
        <hr />
        <p class="mb-2 text-center"><a href="{{ route('mage.auth.login.index') }}">@lang('mage.auth.forgot-password.login')</a></p>
    </div>
@endsection
