@extends('mage::layout.page')
@section('web-title', __('mage.roles.create.web-title'))
@section('page-title', __('mage.roles.create.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.roles.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.roles.create.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.roles.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form action="{{route('mage.roles.store')}}" method="POST">
        @method('POST')
        @include('mage::pages.roles.forms.main')
    </form>
</div>
@endsection