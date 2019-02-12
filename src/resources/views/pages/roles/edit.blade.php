@extends('mage::app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('mage.pages.roles.update.title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('mage.title')</a></li>
                        <li class="breadcrumb-item">@lang('mage.pages.roles.index.title')</li>
                        <li class="breadcrumb-item active">@lang('mage.pages.roles.update.title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if($errors->any())
                        @include('mage::components.alerts.roles.invalid')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@lang('mage.pages.roles.update.title')</h3>
                            <div class="card-tools"></div>
                        </div>
                        <form action="{{route('mage.roles.update', $role->id)}}" method="POST">
                            @method('PUT')
                            @include('mage::components.forms.roles')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
