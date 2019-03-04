@extends('mage::layout.page')
@section('web-title', __('mage.roles.show.web-title'))
@section('page-title', __('mage.roles.show.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.roles.index.breadcrumb.title')</li>
<li class="breadcrumb-item active">@lang('mage.roles.show.breadcrumb.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.roles.show.title')</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="row">
            <input type="hidden" id="rol-id" value="{{$role->id}}">
            @foreach($permissions as $permission)
            <div class="col-sm-3">
                <div class="custom-control custom-switch">
                    <input name="role-permission[]"
                            type="checkbox"
                            class="mage-role-permission custom-control-input" @if($role->permissions->where('id', $permission->id)->count()) checked @endif
                            id="permission{{$permission->id}}"
                            value="{{$permission->id}}">
                    <label class="custom-control-label" for="permission{{$permission->id}}">{{$permission->name}}</label>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection