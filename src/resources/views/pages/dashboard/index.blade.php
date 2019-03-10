@extends('mage::layout.page')
@section('web-title', __('mage.dashboard.index.web-title'))
@section('page-title', __('mage.dashboard.index.page-title'))
@section('breadcrumbs')
    <li class="breadcrumb-item active">@lang('mage.dashboard.index.breadcrumb.title')</li>
@endsection

@section('page')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@lang('mage.dashboard.index.title')</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body"></div>
    </div>
@endsection
