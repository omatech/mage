@extends('mage::layout.page')
@section('web-title', __('mage.activity-logs.index.web-title'))
@section('page-title', __('mage.activity-logs.index.page-title'))
@section('breadcrumbs')
    <li class="breadcrumb-item active">@lang('mage.activity-logs.index.breadcrumb.title')</li>
@endsection

@section('page')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@lang('mage.activity-logs.index.title')</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm"></div>
            </div>
        </div>
        <div class="card-body">
            @include('pages.activity-logs.datatable.list')
        </div>
    </div>
@endsection
