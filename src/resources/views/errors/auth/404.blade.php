@extends('mage::layout.page')
@section('web-title', __('mage.errors.404.web-title'))
@section('page-title', __('mage.errors.404.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.errors.404.breadcrumb.title')</li>
@endsection

@section('page')
<div class="error-page" style="margin: 100px auto 0 auto;">
    <h2 class="headline text-warning" style="text-align: center; float: none"> 404</h2>
</div>
@endsection
