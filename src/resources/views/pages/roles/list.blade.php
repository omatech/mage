@extends('mage::app') 
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('mage.pages.roles.index.title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('mage.title')</a></li>
                        <li class="breadcrumb-item active">@lang('mage.pages.roles.index.title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @includeWhen(session()->has('status') && session('status') == 'created',
                        'mage::components.alerts.roles.created')

                    @includeWhen(session()->has('status') && session('status') == 'updated',
                        'mage::components.alerts.roles.updated')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@lang('mage.pages.roles.index.datatable.title')</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <a href="{{ route('mage.roles.create') }}">
                                        <button class="btn btn-sm btn-success">@lang('mage.pages.roles.new')</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('mage::components.datatables.roles')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection