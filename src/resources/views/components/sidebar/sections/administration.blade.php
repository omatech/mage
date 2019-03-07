<li class="nav-header">@lang('mage.sidebar.administration')</li>
@can('access-mage-users-management-zone')
<li class="nav-item has-treeview {{ !isRoute(['mage.users.*','mage.roles.*','mage.permissions.*']) ?: 'menu-open' }}">
    <a href="#" class="nav-link {{ !isRoute(['mage.users.*','mage.roles.*','mage.permissions.*']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="users"></i>
        </span>
        <span class="nav-text">@lang('mage.sidebar.users-management')</span>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('mage.users.index')}}" class="nav-link {{ !isRoute(['mage.users.*']) ?: 'active' }}">
                <span class="nav-icon">
                    <i data-feather="user"></i>
                </span>
                <span class="nav-text">@lang('mage.sidebar.users')</span>
            </a>
            <a href="{{route('mage.roles.index')}}" class="nav-link {{ !isRoute(['mage.roles.*']) ?: 'active' }}">
                <span class="nav-icon">
                    <i data-feather="shield"></i>
                </span>
                <span class="nav-text">@lang('mage.sidebar.roles')</span>
            </a>
            <a href="{{route('mage.permissions.index')}}" class="nav-link {{ !isRoute(['mage.permissions.*']) ?: 'active' }}">
                <span class="nav-icon">
                    <i data-feather="lock"></i>
                </span>
                <span class="nav-text">@lang('mage.sidebar.permissions')</span>
            </a>
        </li>
    </ul>    
</li>
@endcan
@can('access-mage-translations-zone')
<li class="nav-item">
    <a href="{{route('mage.translations.index')}}" class="nav-link {{ !isRoute(['mage.translations.*']) ?: 'active' }}">
        <span class="nav-icon">
            <i data-feather="message-circle"></i>
        </span>
        <span class="nav-text">@lang('mage.sidebar.translations')</span>

        @inject('countNotTrans', 'Omatech\Mage\App\Repositories\Translation\CountNotTranslatedTranslations')

        <span class="label label-danger badge">{{ $countNotTrans->make() }}</span>
    </a>
</li>
@endcan