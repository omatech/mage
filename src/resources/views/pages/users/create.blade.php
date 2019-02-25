@extends('mage::layout.page')
@section('title', __('mage.users.create.title'))
@section('page-title', __('mage.users.create.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.users.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.users.create.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.users.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form id="mage-users-form" action="{{route('mage.users.store')}}" method="POST">
        @method('POST')
        @include('mage::users.forms.main')
    </form>
</div>
@endsection