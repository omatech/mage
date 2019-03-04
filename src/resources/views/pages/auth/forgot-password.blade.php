@extends('mage::layout.auth')
@section('web-title', __('mage.auth.forgot-password'))
@section('content')
    <div class=" auth-content text-center">
        <div class="mb-4">
            <i class="fa fa-key icon-login"></i>
        </div>
        <h3 class="mb-5">@lang('mage.auth.forgot-password')</h3>
        @if(!session()->has('status'))
            <form action="{{route('mage.auth.password.email')}}" method="POST" class="social-auth-links text-center mb-4">
                {{ csrf_field() }}
                @method('POST')
                @if($errors->count())
                    <div class="input-group mb-3">
                        <p class="text-danger" style="margin:0 auto;"><span>@lang('passwords.user')</span></p>
                    </div>
                @endif
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
                <i class="far fa-check-circle icon-reset-success" style="font-size: 7rem"></i>
            </div>

            {{ session('status') }}

        @endif
    </div>
@endsection
