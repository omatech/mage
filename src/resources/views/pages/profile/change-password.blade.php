@extends('mage::layout.page')
@section('web-title', __('mage.profile.change-password.web-title'))
@section('page-title', __('mage.profile.change-password.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.profile.show.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.profile.change-password.breadcrumb.title')</li>
@endsection

@section('page-classes', 'col-6 offset-3')
@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.profile.change-password.title')</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">  
            </div>
        </div>
    </div>
    <form action="{{route('mage.profile.change-password.post')}}" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="mage-change-password-current">@lang('mage.profile.chage-password.form.current')</label>
                <input name="profile_password_current" type="password" class="form-control @if($errors->has('profile_password_current')) is-invalid @endif" id="mage-change-password-current" placeholder="@lang('mage.profile.chage-password.form.current.placeholder')">
            </div>
            <div class="form-group">
                <label for="mage-change-password-new">@lang('mage.profile.chage-password.form.password-new')</label>
                <input name="profile_password_new" type="password" class="form-control @if($errors->has('profile_password_new')) is-invalid @endif" id="mage-change-password-new" placeholder="@lang('mage.profile.chage-password.form.password-new.placeholder')">
            </div>
            <div class="form-group">
                <label for="mage-change-password-new-confirmation">@lang('mage.profile.chage-password.form.password-new-confirmation')</label>
                <input name="profile_password_new_confirmation" type="password" class="form-control @if($errors->has('profile_password_new_confirmation')) is-invalid @endif" id="mage-change-password-new-confirmation" placeholder="@lang('mage.profile.chage-password.form.password-new-confirmation.placeholder')">
            </div>
        </div>
        <div class="card-footer">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">@lang('mage.profile.change-password.form.save')</button>
        </div>
    </form>
</div>
@endsection
