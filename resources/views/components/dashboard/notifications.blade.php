<div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full"
     data-toggle="tooltip"
     data-title="{{ __('dashboard.Notifications') }}"
     data-placement="bottom"
     data-boundary="window">
    <button class="nav-link btn-flush dropdown-toggle"
            type="button"
            data-toggle="dropdown"
            data-caret="false">
        <i class="material-icons">notifications_none</i>
        @php $user = Auth::user(); @endphp
        @if(count($user->unreadnotifications) > 0)
            <span class="badge badge-notifications badge-accent">{{ $user->unreadnotifications->count() }}</span>
        @endif
    </button>
    <div class="dropdown-menu dropdown-menu-right">
        <div data-perfect-scrollbar
             class="position-relative">
            <div class="dropdown-header"><strong>{{ __('dashboard.System_notifications') }}</strong></div>
            <div class="list-group list-group-flush mb-0">
                @if(count($user->unreadnotifications) > 0)
                    @foreach($user->unreadnotifications as $note)
               {{-- <a href="javascript:void(0);"
                   class="list-group-item list-group-item-action unread">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">3 minutes ago</small>

                                                <span class="ml-auto unread-indicator bg-accent"></span>

                                            </span>
                    <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                </span>
                                            </span>
                </a>

                <a href="javascript:void(0);"
                   class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">5 hours ago</small>

                                            </span>
                    <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="text-black-100">Adrian. D</strong>
                                                    <span class="text-black-70">Wants to join your private group.</span>
                                                </span>
                                            </span>
                </a>

                <a href="javascript:void(0);"
                   class="list-group-item list-group-item-action">
                                            <span class="d-flex align-items-center mb-1">
                                                <small class="text-black-50">1 day ago</small>

                                            </span>
                    <span class="d-flex">
                                                <span class="avatar avatar-xs mr-2">
                                                    <span class="avatar-title rounded-circle bg-light">
                                                        <i class="material-icons font-size-16pt text-warning">storage</i>
                                                    </span>
                                                </span>
                                                <span class="flex d-flex flex-column">

                                                    <span class="text-black-70">Your deploy was successful.</span>
                                                </span>
                                            </span>
                </a>--}}
                    @endforeach
                @else
                    <a href="javascript:void(0);"
                       class="list-group-item list-group-item-action unread">
                        <span class="d-flex">
                            <span class="avatar avatar-sm mr-2">
                                <span class="avatar-title rounded-circle bg-light">
                                    <img src="{{ asset('backend/images/icon/disable-alarm.png') }}" alt="Avatar" class="avatar-img rounded">
                                </span>
                            </span>
                            <span class="flex d-flex flex-column">
                                <span class="text-black-70">{{ __('dashboard.No_New_Notifications') }}</span>
                            </span>
                        </span>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
