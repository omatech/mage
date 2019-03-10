<li class="nav-item">
    <a href="{{ route('mage.dashboard') }}" class="nav-link {{ !isRoute('mage.dashboard') ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="circle"></i>
        </span>
        <p class="nav-text">@lang('mage.sidebar.dashboard')</p>
    </a>
</li>