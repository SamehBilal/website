<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">
            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">@yield('title')</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('dashboard.Home') }}</a></li>
                    @yield('links')
                </ol>

            </div>
        </div>
        <div class="row"
             role="tablist">
            <div class="col-auto">
                <a href="@yield('button-link')"
                       {{-- data-target="#library-drawer"
                        data-toggle="sidebar"--}}
                        class="btn btn-outline-secondary">
                    <i class="material-icons icon--left">@yield('button-icon')</i> @yield('button-title')
                </a>
            </div>
        </div>
    </div>
</div>
