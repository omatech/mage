@extends('mage::layout.page')
@section('title', __('mage.permissions.create.title'))
@section('page-title', __('mage.permissions.create.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.permissions.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.permissions.create.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.permissions.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    
    <form action="{{route('mage.permissions.store')}}" method="POST">
        @method('POST')
        @include('mage::permissions.forms.main')
    </form>
</div>
@endsection