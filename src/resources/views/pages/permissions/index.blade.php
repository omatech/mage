@extends('mage::layout.page')
@section('web-title', __('mage.permissions.show.web-title'))
@section('page-title', __('mage.permissions.show.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.permissions.index.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.permissions.index.datatable.title')</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a href="{{ route('mage.permissions.create') }}">
                    <button class="btn btn-sm btn-success">@lang('mage.permissions.new')</button>
                </a>     
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('mage::pages.permissions.datatables.list')
    </div>
</div>
@endsection
