<li class="nav-item">
    <a href="{{ route('mage.dashboard') }}" class="nav-link {{ !isRoute('mage.dashboard') ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="circle"></i>
        </span>
        <p class="nav-text">@lang('mage.sidebar.dashboard')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('backend.jobs.index') }}" class="nav-link {{ !isRoute('backend.jobs.*') ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="circle"></i>
        </span>
        <p class="nav-text">@lang('backend.sidebar.jobs')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('backend.activity-logs.index') }}" class="nav-link {{ !isRoute('backend.activity-logs.*') ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="circle"></i>
        </span>
        <p class="nav-text">@lang('backend.sidebar.activity-logs')</p>
    </a>
</li>