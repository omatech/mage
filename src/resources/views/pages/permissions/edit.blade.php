@extends('mage::layout.page')
@section('title', __('mage.pages.permissions.update.title'))
@section('page-title', __('mage.pages.permissions.update.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.pages.permissions.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.pages.permissions.update.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.pages.permissions.update.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form action="{{route('mage.permissions.update', $permission->id)}}" method="POST">
        @method('PUT')
        @include('mage::components.forms.permissions')
    </form>
</div>
@endsection
