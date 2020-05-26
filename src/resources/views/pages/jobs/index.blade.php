@extends('mage::layout.page')
@section('web-title', __('backend.jobs.index.web-title'))
@section('page-title', __('backend.jobs.index.page-title'))
@section('breadcrumbs')
    <li class="breadcrumb-item active">@lang('backend.jobs.index.breadcrumb.title')</li>
@endsection

@section('page')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">@lang('backend.jobs.index.title')</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm"></div>
            </div>
        </div>
        <div class="card" style="margin-bottom:0px!important">
            <div class="card-body p-0">
                <div class="nav-tabs-custom border-top shadow-sm border-bottom">
                    <ul class="nav nav-tabs">
                        <li class="mr-0 px-4 border-right" style="padding: 0.8rem; border-bottom: 0.3rem solid #B48B44">
                            <a class="nav-tab-link" href="{{route('backend.jobs.index')}}" style="color:#354657">@lang('mage.backend.jobs.all.tab')</a>
                        </li>
                        <li class="mr-0 px-4 border-right" style="padding: 0.8rem;">
                            <a class="nav-tab-link active" href="{{route('backend.jobs.index-jobs-done')}}" style="color:#354657">@lang('mage.backend.jobs.done.tab')</a>
                        </li>
                        <li class="mr-0 px-4 border-right" style="padding: 0.8rem;">
                            <a class="nav-tab-link" href="{{route('backend.jobs.index-jobs-failed')}}" style="color:#354657">@lang('mage.backend.jobs.failed.tab')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @include('pages.jobs.datatable.list')
        </div>
    </div>
@endsection
