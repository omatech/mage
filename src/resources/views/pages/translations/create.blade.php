@extends('mage::layout.page')
@section('web-title', __('mage.translations.create.web-title'))
@section('page-title', __('mage.translations.create.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.translations.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.translations.create.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.translations.create.title')</h3>
        <div class="card-tools"></div>
    </div>
    <form action="{{route('mage.translations.store')}}" method="POST">
        @include('mage::pages.translations.forms.main')
    </form>
</div>
@endsection