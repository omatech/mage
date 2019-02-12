@extends('mage::app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('mage.pages.users.create.title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('mage.title')</a></li>
                        <li class="breadcrumb-item">@lang('mage.pages.users.index.title')</li>
                        <li class="breadcrumb-item active">@lang('mage.pages.users.create.title')</li>
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
                        @include('mage::components.alerts.users.invalid')
                    @endif
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
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
