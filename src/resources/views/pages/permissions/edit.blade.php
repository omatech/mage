@extends('mage::layout.page')
@section('web-title', __('mage.permissions.edit.web-title'))
@section('page-title', __('mage.permissions.edit.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.permissions.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.permissions.edit.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.permissions.edit.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form action="{{route('mage.permissions.update', $permission->id)}}" method="POST">
        @method('PUT')
        @include('mage::pages.permissions.forms.main')
    </form>
</div>
@endsection
