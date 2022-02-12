<div class="mdk-drawer js-mdk-drawer"
     id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
             data-perfect-scrollbar>

            <!-- Sidebar Content -->

            {{--<div class="d-flex align-items-center navbar-height">
                <form action="{{ route('dashboard') }}"
                      class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                    <input type="text"
                           class="form-control pl-0"
                           placeholder="Search">
                    <button class="btn"
                            type="submit"><i class="material-icons">search</i></button>
                </form>
            </div>--}}

            <a href="{{ route('dashboard') }}"
               class="sidebar-brand ">
               {{-- <img class="sidebar-brand-icon" src="{{ asset('backend/images/illustration/student/128/white.svg') }}" alt="Luma">--}}

                <span class=" avatar-xl sidebar-brand-icon h-auto">
                    <span class="avatar-title rounded bg-transparent"><img src="{{ asset('website/assets/images/Original on Transparent.png') }}"
                                                                       height="70"
                                                                       alt="logo" /></span>

                            </span>

                <span>{{ config('app.name', 'Laravel') }}</span>
            </a>

            <div class="sidebar-heading">{{ __('dashboard.Application') }}</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item {{ set_active(['dashboard'])}}">
                    <a class="sidebar-menu-button"
                       href="{{ route('dashboard') }}">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dashboard</span>
                        {{ __('dashboard.Dashboard') }}
                    </a>
                </li>
                <li class="sidebar-menu-item {{ set_active(['dashboard/subscribers*'])}}">
                    <a class="sidebar-menu-button"
                       href="{{ route('dashboard.subscribers.index') }}">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">card_membership</span>
                        {{ __('dashboard.Subscribers') }}
                    </a>
                </li>
                <li class="sidebar-menu-item {{ set_active(['dashboard/messages*'])}}">
                    <a class="sidebar-menu-button"
                       href="{{ route('dashboard.messages.index') }}">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                        {{ __('dashboard.Messages') }}
                    </a>
                </li>
                <li class="sidebar-menu-item {{ set_active(['dashboard/posts*'])}}">
                    <a class="sidebar-menu-button"
                       href="{{ route('dashboard.posts.index') }}">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">confirmation_number</span>
                       Blog
                    </a>
                </li>
            </ul>

            <div class="sidebar-heading">{{ __('dashboard.Setup') }}</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item {{ set_active(['dashboard/settings*'],'active open')}}">
                    <a class="sidebar-menu-button js-sidebar-collapse"
                       data-toggle="collapse"
                       href="#settings_menu">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">settings</span>
                        {{ __('dashboard.Settings') }}
                        {{--<span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span>--}}
                        {{--<span class="sidebar-menu-toggle-icon"></span>--}}
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse {{ set_active(['dashboard/settings*'],'show')}} sm-indent"
                        id="settings_menu">
                        <li class="sidebar-menu-item {{ set_active(['dashboard/settings/profile'])}}">
                            <a class="sidebar-menu-button"
                               href="{{ route('dashboard.settings.profile') }}">
                                <span class="sidebar-menu-text">{{ __('dashboard.Profile') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- // END Sidebar Content -->
        </div>
    </div>
</div>
