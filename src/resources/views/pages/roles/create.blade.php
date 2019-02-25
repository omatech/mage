@extends('mage::layout.page')
@section('title', __('mage.roles.create.title'))
@section('page-title', __('mage.roles.create.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.roles.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.roles.create.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.roles.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form action="{{route('mage.roles.store')}}" method="POST">
        @method('POST')
        @include('mage::roles.forms.main')
    </form>
</div>
@endsection