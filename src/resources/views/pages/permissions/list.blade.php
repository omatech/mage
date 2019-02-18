@extends('mage::layout.page')
@section('title', __('mage.pages.permissions.index.title'))
@section('page-title', __('mage.pages.permissions.index.title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.pages.permissions.index.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.pages.permissions.index.datatable.title')</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a href="{{ route('mage.permissions.create') }}">
                    <button class="btn btn-sm btn-success">@lang('mage.pages.permissions.new')</button>
                </a>     
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('mage::components.datatables.permissions')
    </div>
</div>
@endsection
