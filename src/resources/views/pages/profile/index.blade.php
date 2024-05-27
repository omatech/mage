@extends('mage::layout.page')
@section('web-title', __('mage.profile.index.web-title'))
@section('page-title', __('mage.profile.index.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item active">@lang('mage.profile.index.breadcrumb.title')</li>
@endsection

@section('page')
<div class="row">
    <div class="col-lg-3 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="card-profile-image">
                    <img src="{{ url('vendor/mage/images/profile.png') }}" class="img-circle" width="150">
                    <h4 class="card-title">{{ auth()->guard('mage')->user()->name }}</h4>
                    <h6 class="card-subtitle">{{ auth()->guard('mage')->user()->email }}</h6>
                </div>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-body">
                <small class="text-muted">@lang('mage.profile.name') </small>
                <h6>{{ auth()->guard('mage')->user()->name }}</h6>
                <small class="text-muted">@lang('mage.profile.email') </small>
                <h6>{{ auth()->guard('mage')->user()->email }}</h6>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-xlg-9 col-md-7">
        <div class="card">
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-selected="true">@lang('mage.profile.profile')</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <form action="{{route('mage.profile.update')}}" method="POST">
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="mage-profile-name">@lang('mage.profile.form.name.label')</label>
                                <input name="profile_name" type="text" class="form-control @if($errors->has('profile_name')) is-invalid @endif" id="profile-name" placeholder="@lang('mage.profile.form.name.placeholder')"
                                    value="{{ old('profile_name', auth()->guard('mage')->user()->name ?? '') }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">@lang('mage.roles.form.save')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
