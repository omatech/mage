@extends('mage::layout.page')
@section('web-title', __('mage.roles.index.web-title'))
@section('page-title', __('mage.roles.index.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.roles.index.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.roles.index.title')</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a href="{{ route('mage.roles.create') }}">
                    <button class="btn btn-sm btn-success">@lang('mage.roles.new')</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('mage::pages.roles.datatables.list')
    </div>
</div>
@endsection