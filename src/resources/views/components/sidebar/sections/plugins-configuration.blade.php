@if(count(config('mage.plugins')) > 0)

    <li class="nav-header">@lang('mage.sidebar.plugins')</li>

    @foreach(config('mage.plugins') as $plugin)
        @includeIf("$plugin::mage.configuration")
    @endforeach

@endif