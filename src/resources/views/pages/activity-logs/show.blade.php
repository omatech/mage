@extends('mage::layout.page')
@section('web-title', __('backend.activity-logs.index.web-title'))
@section('page-title', __('backend.activity-logs.index.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item"><a
    href="{{route('backend.activity-logs.index')}}">@lang('backend.activity-logs.index.breadcrumb.title')</a>
</li>
<li class="breadcrumb-item active">{{$activityLog['id']}}</li>
@endsection
@section('page')
<div class="container">

    <div class="card" style="background: transparent; border:0; box-shadow: none">
        <ul class="nav nav-tabs profile-tab" role="tablist" style="background: white">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#details" role="tab" aria-selected="true">@lang('backend.activity-logs.show.details')</a>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">@lang('backend.activity-logs.show.title')</h3>
        </div>
    
        <div class="greyed card-body">
            <div class="row">
                <div class="row col-12 m-0" style="text-align: left">
                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.id')}}</div>
                        <div>
                            {{$activityLog['id'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.action')}}</div>
                        <div>
                            {{$activityLog['action'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-4 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.model_type')}}</div>
                        <div>
                            {{$activityLog['model_type'] ?? '-'}}
                        </div>
                    </div>
    
                    <div class="col-4 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.uri')}}</div>
                        <div>
                            {{$activityLog['uri'] ?? '-'}}
                        </div>
                    </div>
    
                    <div class="col-4 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.alias')}}</div>
                        <div>
                            {{$activityLog['alias'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.method')}}</div>
                        <div>
                            {{$activityLog['method'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.user_agent')}}</div>
                        <div>
                            {{$activityLog['user_agent'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.ip_address')}}</div>
                        <div>
                            {{$activityLog['ip_address'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.created_at')}}</div>
                        <div>
                            {{$activityLog['created_at'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.headers')}}</div>
                        <div>
                            {{$activityLog['headers'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.x_prescriber_id')}}</div>
                        <div>
                            {{$activityLog['x_prescriber_id'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.x_remote_ip')}}</div>
                        <div>
                            {{$activityLog['x_remote_ip'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.authorization_token')}}</div>
                        <div>
                            {{$activityLog['authorization_token'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.body')}}</div>
                        <div>
                            {{$activityLog['body'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.files')}}</div>
                        <div>
                            {{$activityLog['files'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.microtime_start')}}</div>
                        <div>
                            {{$activityLog['microtime_start'] ?? '-'}}
                        </div>
                    </div>
                    
                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.microtime_stop')}}</div>
                        <div>
                            {{$activityLog['microtime_stop'] ?? '-'}}
                        </div>
                    </div>
                </div>
                <input id="inputhid" type="hidden" value="">
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">@lang('backend.activity-logs.show.title_user')</h3>
        </div>
    
        <div class="greyed card-body">
            <div class="row">
                <div class="row col-12 m-0" style="text-align: left">
    
                    <div class="col-4">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.user_id')}}</div>
                        <div>
                            {{$activityLog['user_id'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.email')}}</div>
                        <div>
                            {{$activityLog['email'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-2 font-weight-bold">{{__('backend.activity-logs.show.last_login_at')}}</div>
                        <div>
                            {{$activityLog['last_login_at'] ?? '-'}}
                        </div>
                    </div>
                </div>
                <input id="inputhid" type="hidden" value="">
            </div>
        </div>
    </div>

</div>
@endsection
