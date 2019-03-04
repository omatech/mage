@extends('mage::layout.page')
@section('web-title', __('mage.users.index.web-title'))
@section('page-title', __('mage.users.index.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.users.index.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.users.index.title')</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <a href="{{ route('mage.users.create') }}">
                    <button class="btn btn-sm btn-success">@lang('mage.users.new')</button>
                </a>     
            </div>
        </div>
    </div>
    <div class="card-body">
        @include('mage::pages.users.datatables.list')
    </div>
</div>
@endsection