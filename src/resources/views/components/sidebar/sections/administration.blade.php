<li class="nav-header">@lang('mage.sidebar.administration')</li>
<li class="nav-item has-treeview {{ !isRoute(['mage.users.*','mage.roles.*','mage.permissions.*']) ?: 'menu-open' }}">
    <a href="#" class="nav-link {{ !isRoute(['mage.users.*','mage.roles.*','mage.permissions.*']) ?: 'active' }}">
        <i class="nav-icon fa fa-users"></i>
        <p>@lang('mage.sidebar.users-management')<i class="right fa fa-angle-left"></i></p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('mage.users.index')}}" class="nav-link {{ !isRoute(['mage.users.*']) ?: 'active' }}">
                <i class="nav-icon fa fa-user"></i>
                <p>@lang('mage.sidebar.users')</p>
            </a>
            <a href="{{route('mage.roles.index')}}" class="nav-link {{ !isRoute(['mage.roles.*']) ?: 'active' }}">
                <i class="nav-icon fa fa-tag"></i>
                <p>@lang('mage.sidebar.roles')</p>
            </a>
            <a href="{{route('mage.permissions.index')}}" class="nav-link {{ !isRoute(['mage.permissions.*']) ?: 'active' }}">
                <i class="nav-icon fa fa-lock"></i>
                <p>@lang('mage.sidebar.permissions')</p>
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
