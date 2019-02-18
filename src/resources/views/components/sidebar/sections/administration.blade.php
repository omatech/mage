<li class="nav-header">@lang('mage.sidebar.administration')</li>
<li class="nav-item has-treeview {{ !isRoute(['mage.users.*','mage.roles.*','mage.permissions.*']) ?: 'menu-open' }}">
    <a href="#" class="nav-link {{ !isRoute(['mage.users.*','mage.roles.*','mage.permissions.*']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="users"></i>
        </span>
        <p class="nav-text">@lang('mage.sidebar.users-management')<i class="right fa fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('mage.users.index')}}" class="nav-link {{ !isRoute(['mage.users.*']) ?: 'active' }}">
                <span class="nav-icon">
                    <i data-feather="user"></i>
                </span>
                <p class="nav-text">@lang('mage.sidebar.users')</p>
            </a>
            <a href="{{route('mage.roles.index')}}" class="nav-link {{ !isRoute(['mage.roles.*']) ?: 'active' }}">
                <span class="nav-icon">
                    <i data-feather="shield"></i>
                </span>
                <p class="nav-text">@lang('mage.sidebar.roles')</p>
            </a>
            <a href="{{route('mage.permissions.index')}}" class="nav-link {{ !isRoute(['mage.permissions.*']) ?: 'active' }}">
                <span class="nav-icon">
                    <i data-feather="lock"></i>
                </span>
                <p class="nav-text">@lang('mage.sidebar.permissions')</p>
            </a>
        </li>
    </ul>    
</li>
<li class="nav-item">
    {{--<a href="{{route('mage.translate')}}" class="nav-link {{ !isRoute(['mage.translate']) ?: 'active' }}">
        <i class="nav-icon fa fa-book text-info"></i>
        <p>@lang('mage.sidebar.translate')</p>
    </a>--}}
</li>
