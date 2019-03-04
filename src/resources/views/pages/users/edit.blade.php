@extends('mage::layout.page')
@section('web-title', __('mage.users.edit.web-title'))
@section('page-title', __('mage.users.edit.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.users.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.users.edit.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.users.edit.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form id="mage-users-form" action="{{route('mage.users.update', $user->id)}}" method="POST">
        @method('PUT')
        @include('mage::pages.users.forms.main')
    </form>
</div>
@endsection