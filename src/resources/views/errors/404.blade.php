@extends('mage::layout.auth')
@section('web-title', __('mage.errors.404.page-title'))
@section('content')
    <div class=" auth-content text-center">
        <div class="mb-4" style="font-size: 80px;">
            <i class="fa fa-exclamation-triangle"></i>
        </div>
        <h3 class="mb-5">@lang('mage.errors.404.page-title')</h3>
    </div>
@endsection
