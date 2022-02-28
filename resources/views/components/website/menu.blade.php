<div class="site-header__header-one-wrap">
    <div class="topbar-one" style="background: #0A0A0A">
        <div class="container-fluid">
            <div class="topbar-one__left">
                <a href="mailto:info@passportgates.com">info@passportgates.com</a>
                <a href="tel:+971585009411">+971585009411</a>
            </div><!-- /.topbar-one__left -->
            <div class="topbar-one__right">
                <div class="topbar-one__social">
                    <a href="https://www.facebook.com/TheGoldenCitizen/"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/thegoldencitizen"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/the-golden-citizen/"><i class="fab fa-linkedin"></i></a>
                </div><!-- /.topbar-one__social -->
                <a href="{{ route('contact') }}" class="topbar-one__guide-btn">GET FREE CONSULTATION</a>
            </div><!-- /.topbar-one__right -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar-one -->
    <header class="main-nav__header-one ">
        <nav class="header-navigation stricky">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="main-nav__logo-box">
                    <a href="{{ route('index') }}" class="main-nav__logo">
                        <img src="{{ asset('website/assets/images/Black on Transparent.png') }}" class="main-logo" width="140" alt="Awesome Image" />
                    </a>
                    <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i>
                        <!-- /.smpl-icon-menu --></a>
                </div><!-- /.logo-box -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="main-nav__main-navigation">
                    <ul class=" main-nav__navigation-box">
                        <li class="@yield('index')">
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="@yield('about')">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="dropdown @yield('programs')">
                            <a href="#">Programs</a>
                            <ul>
                                <li><a href="{{ route('citizenship') }}">Citizenship By Investment</a></li>
                                <li><a href="{{ route('residency') }}">Residency By Investment</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li class="dropdown @yield('passport')">
                            <a href="#">Passport Guide</a>
                            <ul>
                                <li><a href="{{ route('passport.guide') }}">Passport Guides</a></li>
                                <li><a href="{{ route('visa.requirements') }}">Travel Visa Requirements</a></li>
                                <li><a href="{{ route('passports') }}">Passports</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li class="@yield('blog')">
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="@yield('contact')">
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="main-nav__right">
                    <a href="#" class="main-nav__search search-popup__toggler"><i class="tripo-icon-magnifying-glass"></i></a>
                    <a href="{{ route('login') }}" class="main-nav__login" title="Login/Register"><i class="tripo-icon-avatar"></i></a>
                    <select name="languages" id="languages" class="selectpicker">
                        <option value="ENG">ENG</option>
                        <option value="AR">AR</option>
                    </select><!-- /#languages .selectpicker -->
                </div><!-- /.main-nav__right -->
            </div>
            <!-- /.container -->
        </nav>
    </header><!-- /.site-header -->
</div><!-- /.site-header__header-one-wrap -->
