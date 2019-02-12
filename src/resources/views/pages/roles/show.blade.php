@extends('mage::app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">@lang('mage.pages.roles.show.title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">@lang('mage.title')</a></li>
                        <li class="breadcrumb-item">@lang('mage.pages.roles.show.title')</li>
                        <li class="breadcrumb-item active">@lang('mage.pages.roles.show.title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@lang('mage.pages.roles.show.title')</h3>
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
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
