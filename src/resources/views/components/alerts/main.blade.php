@php 
    $routeName = request()->route()->getName();
@endphp

@if($status == 'errors' || session()->has('status') && session('status') == $status)
<div class="alert alert-{{$type}} alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fa @if($status == 'errors') fa-ban @else fa-check @endif"></i> @lang("$routeName.alert.$status.title")</h5>
    @if(!empty($slot->toHtml())) {{ $slot }}
    @else
        @lang("$routeName.alert.$status.description")
    @endif
</div>
@endif