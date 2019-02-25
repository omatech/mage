@extends('mage::layout.page')
@section('title', __('mage.users.edit.title'))
@section('page-title', __('mage.users.edit.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.users.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.users.edit.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.users.edit.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form id="mage-users-form" action="{{route('mage.users.update', $user->id)}}" method="POST">
        @method('PUT')
        @include('mage::users.forms.main')
    </form>
</div>
@endsection