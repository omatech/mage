@extends('mage::layout.page')
@section('title', __('mage.pages.dashboard.title'))
@section('page-title', __('mage.pages.dashboard.title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.pages.dashboard.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.pages.users.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
    </div>
</div>
@endsection
