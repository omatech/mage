@extends('mage::layout.page')
@section('title', __('mage.pages.translate.title'))
@section('page-title', __('mage.pages.translate.title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.pages.translate.index.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.pages.translate.index.title')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
    </div>
</div>
@endsection