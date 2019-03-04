@if( (session()->has('status') && session('status') == 'custom') && session()->has('alert'))

@php $alert = session('alert') @endphp

<div class="alert alert-{{ $alert['type'] }} alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fa {{ $alert['icon'] }}"></i> @lang($alert['title'])</h5>
    @if(array_key_exists('withErrors', $alert))
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @else
        @lang($alert['description'])
    @endif
</div>
@endif
