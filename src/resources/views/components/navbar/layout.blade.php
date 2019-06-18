<nav class="main-header navbar navbar-expand bg-custom elevation-1">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id="nav-toggle" data-widget="pushmenu" href="#">
                <i data-feather="grid" style="width:18px"></i>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav navbar-right ml-auto">
        {{--<li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <i data-feather="bell" style="width:18px"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-notification">
                <ul>
                    <li>
                        <div class="overlayscroll" style="max-height: 200px;">
                            <a href="#" class="notification-item">
                                <div class="notification-img">
                                    <img src="{{ url('/images/avatar.jpg') }}" alt="user" class="img-circle">
                                    <span class="profile-status online pull-right"></span>
                                </div>
                                <div class="notification-content">
                                    <h5>Pavan kumar</h5>
                                    <span class="notification-description">Just see the my admin!</span>
                                    <span class="notification-time">9:30 AM</span>
                                </div>
                            </a>
                            <a href="#" class="notification-item">
                                <div class="notification-img">
                                    <img src="{{ url('/vendor/mage/img/wizard.svg')}}" alt="user" class="img-circle">
                                    <span class="profile-status online pull-right"></span>
                                </div>
                                <div class="notification-content">
                                    <h5>Pavan kumar</h5>
                                    <span class="notification-description">Just see the my admin!</span>
                                    <span class="notification-time">9:30 AM</span>
                                </div>
                            </a>
                            <a href="#" class="notification-item">
                                <div class="notification-img">
                                    <img src="{{ url('/vendor/mage/img/wizard.svg')}}" alt="user" class="img-circle">
                                    <span class="profile-status online pull-right"></span>
                                </div>
                                <div class="notification-content">
                                    <h5>Pavan kumar</h5>
                                    <span class="notification-description">Just see the my admin!</span>
                                    <span class="notification-time">9:30 AM</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('mage.auth.logout')}}" class="dropdown-item notification-all">
                            <i data-feather="chevron-right" style="width:16px"></i>
                            <span class="dropdown-item-option">@lang('mage.auth.user.notifications')</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>--}}
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="{{ url('/vendor/mage/images/wizard.svg') }}" alt="Mage Logo" class="img-circle elevation-3 img-avatar">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-user">
                <div class="dropdown-user-box">
                    <div class="user-img">
                        <img src="{{ url('/vendor/mage/images/wizard.svg') }}" alt="user">
                    </div>
                    <div class="user-text">
                        <h4>{{auth()->guard('mage')->user()->name}}</h4>
                        <p class="text-muted">{{auth()->guard('mage')->user()->email}}</p>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a href="{{route('mage.auth.logout')}}" class="dropdown-item">
                    <i data-feather="power" style="width:16px"></i>
                    <span class="dropdown-item-option">@lang('mage.auth.user.logout')</span>
                </a>
            </div>
        </li>

        @if(config('mage.translations.show_select_switch'))
        <li class="nav-item dropdown">
            @php
                $locales = config('mage.translations.available_locales');
                $key = array_search(app()->getLocale(), array_column($locales, 'locale'));
            @endphp
            <a class="nav-link flag-menu" data-toggle="dropdown" href="#">
                <i class="flag-icon flag-icon-{{$locales[$key]['flag']}}"></i>
            </a>
            <div class="dropdown-menu">
                @foreach($locales as $locale)
                    @if($locale != $locales[$key])
                        <a class="dropdown-item" href="#">
                            <i class="flag-icon flag-icon-{{$locale['flag']}}"></i> {{ __($locale['name_key'])}}
                        </a>
                    @endif
                @endforeach
            </div>
        </li>
        @endif
    </ul>
</nav>
