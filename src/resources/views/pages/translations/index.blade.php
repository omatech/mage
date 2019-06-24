@extends('mage::layout.page')
@section('web-title', __('mage.translations.index.web-title'))
@section('page-title', __('mage.translations.index.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.translations.index.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-body">
        <div class="custom-control custom-switch">
            <input name="translations-not-translated"
                    type="checkbox"
                    class="custom-control-input"
                    id="translations-not-translated">
            <label class="custom-control-label" for="translations-not-translated">@lang('mage.translations.index.not-translated')</label>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.translations.index.title')</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a href="{{ route('mage.translations.create') }}">
                    <button class="btn btn-sm btn-success">@lang('mage.translations.index.new')</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('mage::pages.translations.datatables.list')
    </div>
</div>
@endsection