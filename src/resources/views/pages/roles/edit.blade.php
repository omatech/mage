@extends('mage::layout.page')
@section('web-title', __('mage.roles.edit.web-title'))
@section('page-title', __('mage.roles.edit.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.roles.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.roles.edit.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.roles.edit.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form action="{{route('mage.roles.update', $role->id)}}" method="POST">
        @method('PUT')
        @include('mage::pages.roles.forms.main')
    </form>
</div>
@endsection
