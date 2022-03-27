<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passport Gates</title>
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/67b7ba_3214694a50c54f658b82782395905ba3%7Emv2.jpg/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/67b7ba_3214694a50c54f658b82782395905ba3%7Emv2.jpg">
    <link rel="shortcut icon" href="https://static.wixstatic.com/media/67b7ba_3214694a50c54f658b82782395905ba3%7Emv2.jpg/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/67b7ba_3214694a50c54f658b82782395905ba3%7Emv2.jpg" type="image/jpeg">
    <link rel="apple-touch-icon" sizes="180x180" href="https://static.wixstatic.com/media/67b7ba_3214694a50c54f658b82782395905ba3%7Emv2.jpg/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/67b7ba_3214694a50c54f658b82782395905ba3%7Emv2.jpg" type="image/jpeg">
    <link rel="manifest" href="{{ asset('website/assets/images/favicons/site.webmanifest') }}">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300,400,400i,500,600,700,800,900%7CSatisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('website/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/tripo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/nouislider.pips.css') }}">

    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}">
    <link href="{{ asset('website/assets/dist/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css"/>

</head>

<body>
<div class="preloader">
    <img src="{{ asset('website/assets/images/Black on Transparent.png') }}" class="preloader__image" alt="" width="100">
</div><!-- /.preloader -->

<div class="page-wrapper">
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

    <section class="tour-search-one__home-four" style="background-image: url({{ asset('website/assets/images/shapes/banner-4-bg.png') }});">
        <img src="{{ asset('website/assets/images/shapes/sun-1-1.png') }}" alt="" class="tour-search-one__home-four__sun">
        <img src="{{ asset('website/assets/images/shapes/bird-1-1.png') }}" alt="" class="tour-search-one__home-four__bird-1">
        <img src="{{ asset('website/assets/images/shapes/bird-1-2.png') }}" alt="" class="tour-search-one__home-four__bird-2">
        <img src="{{ asset('website/assets/images/shapes/banner-4-shapes.png') }}" alt="" class="tour-search-one__home-four__moc">

        <div class="container">

            <div class="tour-search-one__home-four__floated-text">
                Passport Gates
            </div><!-- /.tour-search-one__home-four__floated-text -->

            <div class="block-title">
                <p>Get your Second Passport in 90 Days</p>
                <h3>Starting From <br> $100,000</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-6">
                    <form class="tour-search-one" action="#">
                        <div class="tour-search-one__inner">
                            <div class="tour-search-one__inputs">
                                <div class="tour-search-one__col">
                                    <div class="tour-search-one__input-box">
                                        <label for="name">Name</label>
                                        <input type="text" placeholder="Enter Name" name="name" id="name">
                                    </div><!-- /.tour-search-one__input-box -->
                                </div><!-- /.tour-search-one__col -->
                                <div class="tour-search-one__col">
                                    <div class="tour-search-one__input-box">
                                        <label for="phone">Phone</label>
                                        <input type="number" placeholder="Enter Phone" name="phone" id="phone">
                                    </div><!-- /.tour-search-one__input-box -->
                                </div><!-- /.tour-search-one__col -->
                                <div class="tour-search-one__col">
                                    <div class="tour-search-one__input-box">
                                        <label for="email">Email</label>
                                        <input type="email" placeholder="Enter Email" name="email" id="email">
                                    </div><!-- /.tour-search-one__input-box -->
                                </div><!-- /.tour-search-one__col -->
                                <div class="tour-search-one__col">
                                    <div class="tour-search-one__input-box">
                                        <label for="nationality">Nationality</label>
                                        <input type="text" placeholder="Nationality" name="nationality" id="nationality">
                                    </div><!-- /.tour-search-one__input-box -->
                                </div><!-- /.tour-search-one__col -->
                                <div class="tour-search-one__col">
                                    <div class="tour-search-one__input-box">
                                        <label for="job">Job Title</label>
                                        <input type="text" placeholder="Job Title" name="job" id="job">
                                    </div><!-- /.tour-search-one__input-box -->
                                </div><!-- /.tour-search-one__col -->
                                <div class="tour-search-one__col">
                                    <div class="tour-search-one__input-box">
                                        <label for="Available">To qualify you must have $100,000 Available ?</label>
                                        <select class="selectpicker" id="Available">
                                            <option value="Yes_Available">Yes Available</option>
                                            <option value="Not_Available">Not Available (Sorry at the moment you don't qualify for the program )</option>
                                        </select>
                                    </div><!-- /.tour-search-one__input-box -->
                                </div><!-- /.tour-search-one__col -->
                            </div><!-- /.tour-search-one__inputs -->
                            <div class="tour-search-one__btn-wrap">
                                <button type="submit" class="thm-btn tour-search-one__btn">Submit now</button>
                            </div><!-- /.tour-search-one__btn-wrap -->
                        </div><!-- /.tour-search-one__inner -->
                    </form><!-- /.tour-search-one -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>

    <div class="site-footer__bottom">
        <div class="container">
            <p>@ All copyright 2022, <a href="#">Passport Gates</a></p>
            <div class="site-footer__social">
                <a href="#"><i class="fab fa-facebook-square"></i><!-- /.fab fa-facebook-square --></a>
                <a href="#"><i class="fab fa-instagram"></i><!-- /.fab fa-instagram --></a>
                <a href="#"><i class="fab fa-linkedin"></i><!-- /.fab fa-dribbble --></a>
            </div><!-- /.site-footer__social -->
        </div><!-- /.container -->
    </div><!-- /.site-footer__bottom -->
</div><!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<div class="side-menu__block">


    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">

            <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{ asset('website/assets/images/shapes/close-1-1.png') }}" alt=""></a>
        </div><!-- /.side-menu__top -->


        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
        <div class="side-menu__content">
            <p>We offer an efficient service to process your application, giving it the attention it deserves to ensure it is given the best possibility of success, allowing you full security for your investment and a second passport for you and your family.</p>
            <p><a href="mailto:info@passportgates.com">info@passportgates.com</a> <br> <a href="tel:+971585009411">+971585009411</a></p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__content -->
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->



<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->


<script src="{{ asset('website/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('website/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('website/assets/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('website/assets/js/wow.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('website/assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('website/assets/js/typed-2.0.11.js') }}"></script>
<script src="{{ asset('website/assets/js/vegas.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('website/assets/js/countdown.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('website/assets/js/nouislider.min.js') }}"></script>
<script src="{{ asset('website/assets/js/isotope.js') }}"></script>

<script src="{{ asset('website/assets/js/theme.js') }}"></script>
<script type="text/javascript" src="{{ asset('website/assets/dist/jquery.vmap.js') }}"></script>
<script type="text/javascript" src="{{ asset('website/assets/dist/maps/jquery.vmap.world.js') }}" charset="utf-8"></script>
<script type="text/javascript" src="{{ asset('website/assets/dist/jquery.vmap.sampledata.js') }}"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: 'transparent',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#D0BB6F',
            enableZoom: true,
            showTooltip: true,
            scaleColors: ['#9ca3a9', '#666666'],
            values: sample_data,
            normalizeFunction: 'polynomial'
        });
    });
</script>
</body>

</html>

