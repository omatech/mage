<nav class="main-header navbar navbar-expand bg-custom">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style="padding: 0rem">
                <span class="nav-link">
                <img src="{{ url('/vendor/mage/img/wizard.svg')}}" alt="Mage Logo" class="img-circle elevation-3" style="

max-height: 28px;
margin-right: .7rem;
margin-top: -3px;">
                    <span class="d-none d-sm-inline-block">{{auth()->user()->name}}</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                {{--<span class="dropdown-header"></span>--}}
                {{--<a href="#" class="dropdown-item">@lang('mage.auth.user.password')</a>--}}
                <div class="dropdown-divider"></div>
                <a href="{{route('mage.auth.logout')}}" class="dropdown-item dropdown-footer">@lang('mage.auth.user.logout')</a>
            </div>
        </li>
    </ul>
</nav>