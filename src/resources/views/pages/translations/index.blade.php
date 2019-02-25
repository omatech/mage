@extends('mage::layout.page')
@section('title', __('mage.translations.title'))
@section('page-title', __('mage.translations.title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.translations.index.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.translations.index.title')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
    </div>
</div>
@endsection