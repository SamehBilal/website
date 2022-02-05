<!DOCTYPE html>
<html lang="en"
      dir="ltr">

<head>
    @include('components.dashboard.meta-tags')

    <title>@yield('title')</title>

    @include('components.dashboard.styles')

    @yield('extra-styles')
</head>

<body class="layout-app ">

@include('components.dashboard.preloader')

<!-- Drawer Layout -->

<div class="mdk-drawer-layout js-mdk-drawer-layout"
     data-push
     data-responsive-width="992px">
    <div class="mdk-drawer-layout__content page-content">

        <!-- Header -->

        <!-- Navbar -->

    @include('components.dashboard.navbar')

    <!-- // END Navbar -->

    @include('components.dashboard.alerts')
    <!-- // END Header -->

    @include('components.dashboard.before_content')

    <!-- BEFORE Page Content -->

        <!-- // END BEFORE Page Content -->

        <!-- Page Content -->

    @yield('main_content')

    <!-- // END Page Content -->

        <!-- Footer -->

    @include('components.dashboard.footer')

    <!-- // END Footer -->

    </div>

    <!-- // END drawer-layout__content -->

    <!-- Drawer -->

@include('components.dashboard.drawer')

@include('components.dashboard.right_drawer')

<!-- // END Drawer -->

</div>

<!-- // END Drawer Layout -->

@include('components.dashboard.scripts')

@yield('extra-scripts')

</body>

</html>
