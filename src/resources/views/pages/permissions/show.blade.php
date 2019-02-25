@extends('mage::layout.page')
@section('title', __('mage.permissions.show.title'))
@section('page-title', __('mage.permissions.show.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.permissions.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.permissions.show.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.permissions.show.title')</h3>
        <div class="card-tools">
            
        </div>
    </div>  
    <div class="card-body">
    </div> 
</div>
@endsection
