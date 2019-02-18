@extends('mage::layout.page')
@section('title', __('mage.pages.users.index.title'))
@section('page-title', __('mage.pages.users.index.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.pages.users.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.pages.users.show.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.pages.users.show.title')</h3>
        <div class="card-tools">
            
        </div>
    </div>
    <div class="card-body">
    </div>
</div>
@endsection