@extends('mage::layout.page')
@section('title', __('mage.pages.users.create.title'))
@section('page-title', __('mage.pages.users.create.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.pages.users.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.pages.users.create.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.pages.users.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form id="mage-users-form" action="{{route('mage.users.store')}}" method="POST">
        @method('POST')
        @include('mage::components.forms.users')
    </form>
</div>
@endsection