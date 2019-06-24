@foreach(config('mage.plugins') as $plugin)
    @includeIf("$plugin::mage.sidebar")
@endforeach