@extends('mage::layout.page')
@section('web-title', __('mage.permissions.create.web-title'))
@section('page-title', __('mage.permissions.create.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.permissions.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.permissions.create.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.permissions.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    
    <form action="{{route('mage.permissions.store')}}" method="POST">
        @method('POST')
        @include('mage::pages.permissions.forms.main')
    </form>
</div>
@endsection