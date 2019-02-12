<li class="nav-item">
    <a href="{{route('mage.dashboard')}}" class="nav-link {{ !request()->routeIs('mage.dashboard') ?: 'active' }}">
        <i class="nav-icon fa fa-dashboard text-warning"></i>
        <p>@lang('mage.sidebar.dashboard')</p>
    </a>
</li>