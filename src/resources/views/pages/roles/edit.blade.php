@extends('mage::layout.page')
@section('title', __('mage.roles.update.title'))
@section('page-title', __('mage.roles.update.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.roles.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.roles.update.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.roles.update.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form action="{{route('mage.roles.update', $role->id)}}" method="POST">
        @method('PUT')
        @include('mage::roles.forms.main')
    </form>
</div>
@endsection
