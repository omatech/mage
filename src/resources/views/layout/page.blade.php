@extends('mage::app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@yield('page-title')</h1>
                </div>
                <div class="col-sm-6">
                    @component('mage::components.breadcrumbs.main')
                        @yield('breadcrumbs')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    @component('mage::components.alerts.main', [
                        'type'    => 'success', 
                        'status'  => 'created'])
                    @endcomponent

                    @component('mage::components.alerts.main', [
                        'type'    => 'success', 
                        'status'  => 'updated'])
                    @endcomponent

                    @component('mage::components.alerts.main', [
                        'type'    => 'success', 
                        'status'  => 'deleted'])
                    @endcomponent

                    @component('mage::components.alerts.custom')
                    @endcomponent

                    @if($errors->any())
                        @component('mage::components.alerts.main', [
                            'type'   => 'danger', 
                            'status' => 'errors'])
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        @endcomponent
                    @endif

                    @yield('page')
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
