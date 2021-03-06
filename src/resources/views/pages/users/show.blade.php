@extends('mage::layout.page')
@section('web-title', __('mage.users.show.web-title'))
@section('page-title', __('mage.users.show.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.users.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.users.show.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.users.show.title')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
    </div>
</div>
@endsection