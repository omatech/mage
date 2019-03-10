@extends('mage::app')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-dark">@yield('page-title')</h3>
                @component('mage::components.breadcrumbs.main')
                    @yield('breadcrumbs')
                @endcomponent
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
