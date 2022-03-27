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
                    <a href="{{ route('free.consultation') }}" class="topbar-one__guide-btn">GET FREE CONSULTATION</a>
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

    <div class="tour-search-one__home-four tour-search-one__home-5 cta-four" style="background-image: url({{ asset('website/assets/images/backgrounds/video-bg-1-1.jpg') }});">
        <div class="container">

            <div class="block-title text-right">
                <p>Get your Second Passport</p>
                <h3>in 90 Days</h3>
                <span>Starting From $100,000</span>
            </div><!-- /.block-title -->
        </div><!-- /.container -->
    </div><!-- /.tour-details__header -->

    <section class="tour-two tour-list tour-details-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <section class="section-style3">
                        <div class="promotion clearfix" style="background: url('{{ asset('website/assets/images/promo0.png') }}') no-repeat 0px 67px">
                            <div class="container page-builder-ltr">
                                <div class="head-title clearfix">
                                    <div class="block-title text-center">
                                        <p>Checkout services</p>
                                        <h3><span>Why Passport Gates</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="container page-builder-ltr">
                                <div class="row text-center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <img src="{{ asset('website/assets/images/promo1.png') }}" alt="stay safe" class="img-responsive">
                                        <h3 style="color: #D0BB6F">Handling everything</h3>
                                        <p>We then translate and notarize all required documents, and fill in all government forms. Ensuring that they are fully compliant with government requirements and regulations. Then, we prepare a full file for a final submission.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <img src="{{ asset('website/assets/images/promo2.png') }}" alt="Quality Services" class="img-responsive">
                                        <h3 style="color: #D0BB6F">Clear Vision</h3>
                                        <p>We make sure to give you a clear vision through our government authorized programs this will make it much easier for you to choose your path.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 item">
                                        <img src="{{ asset('website/assets/images/promo3.png') }}" alt="Save Money" class="img-responsive">
                                        <h3 style="color: #D0BB6F">Free Consultation</h3>
                                        <p>This includes guiding our clients to understand the best investment option to suit their needs, whether by donation or investing in real estate. We learn about our clients, their family members, and their situation before going through the costs involved for the various options. At the end of this stage, we provide a full quotation for your consideration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="tour-sidebar">
                        <div class="tour-sidebar__search tour-sidebar__single">
                            <h3>Free Consultation</h3>
                            <form action="#" class="tour-sidebar__search-form">
                                <div class="input-group">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div><!-- /.input-group -->
                                <div class="input-group">
                                    <input type="number" placeholder="Phone" name="phone">
                                </div><!-- /.input-group -->
                                <div class="input-group">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div><!-- /.input-group -->
                                <div class="input-group">
                                    <input type="text" placeholder="Nationality" name="nationality">
                                </div><!-- /.input-group -->
                                <div class="input-group">
                                    <input type="text" placeholder="Job Title" name="Job_title">
                                </div><!-- /.input-group -->

                                <div class="input-group">
                                    <select class="selectpicker" name="qualify" data-placeholder="TO QUALIFY YOU MUST HAVE $100,000 AVAILABLE ?">
                                        <option>To qualify you must have $100,000 available ?</option>
                                        <option value="Yes">Yes Available</option>
                                        <option value="No">Not Available (Sorry at the moment you don't qualify for the program )</option>
                                    </select>
                                </div><!-- /.input-group -->
                                <div class="input-group">
                                    <button type="submit" class="thm-btn">GET FREE CONSULTATION</button>
                                </div><!-- /.input-group -->
                            </form>
                        </div><!-- /.tour-sidebar__search -->
                    </div><!-- /.tour-sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-two -->

    <section class="destinations-three">
        <div class="container">
            <div class="block-title text-center">
                <p>Checkout featured</p>
                <h3>Top Destinations</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-three__single">
                        <img src="{{ asset('website/assets/images/destinations/destinations-3-1-1.jpg') }}" alt="">
                        <div class="destinations-three__content">
                            <h3><a href="#">Malta</a></h3>
                        </div><!-- /.destinations-three__content -->
                        <div class="destinations-three__hover-content">
                            <h3><a href="#">Malta</a></h3>
                            <p>Citizenship Program</p>
                            <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                        </div><!-- /.destinations-three__hover-content -->
                    </div><!-- /.destinations-three__single -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-three__single">
                        <img src="{{ asset('website/assets/images/destinations/destinations-3-1-2.jpg') }}" alt="">
                        <div class="destinations-three__content">
                            <h3><a href="#">Canada</a></h3>
                        </div><!-- /.destinations-three__content -->
                        <div class="destinations-three__hover-content">
                            <h3><a href="#">Canada</a></h3>
                            <p>Citizenship Program</p>
                            <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                        </div><!-- /.destinations-three__hover-content -->
                    </div><!-- /.destinations-three__single -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-three__single">
                        <img src="{{ asset('website/assets/images/destinations/destinations-3-1-3.jpg') }}" alt="">
                        <div class="destinations-three__content">
                            <h3><a href="#">Greece</a></h3>
                        </div><!-- /.destinations-three__content -->
                        <div class="destinations-three__hover-content">
                            <h3><a href="#">Greece</a></h3>
                            <p>Citizenship Program</p>
                            <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                        </div><!-- /.destinations-three__hover-content -->
                    </div><!-- /.destinations-three__single -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="destinations-three__single">
                        <img src="{{ asset('website/assets/images/destinations/destinations-3-1-4.jpg') }}" alt="">
                        <div class="destinations-three__content">
                            <h3><a href="#">Portugal</a></h3>
                        </div><!-- /.destinations-three__content -->
                        <div class="destinations-three__hover-content">
                            <h3><a href="#">Portugal</a></h3>
                            <p>Citizenship Program</p>
                            <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                        </div><!-- /.destinations-three__hover-content -->
                    </div><!-- /.destinations-three__single -->
                </div><!-- /.col-lg-4 col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->

    </section><!-- /.destinations-three -->

    <section class="tour-category-one">
        <div class="container">
            <div class="block-title text-center">
                <p>Benefits </p>
                <h3>Benefits list</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="000ms">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-user-experience"></i>
                        <h3><a href="#">No Requirement  <br> For Residency</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInDown " data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-hang-gliding"></i>
                        <h3><a href="#">Travel To 150 <br> Countries Visa Free</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-sunset"></i>
                        <h3><a href="#">Second Citizenship <br> For life</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInDown " data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-reliability"></i>
                        <h3><a href="#">100% Government <br> Programs</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-plane-ticket"></i>
                        <h3><a href="#">Tax and Business  <br> Strategy Advantage</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-category-one -->


    <section class="cta-one cta-one__home-two">
        <div class="container">
            <h3>Work with our amazing representatives</h3>
            <div class="cta-one__button-block">
                <a href="{{ route('free.consultation') }}" class="thm-btn cta-one__btn">Get Free Consultation</a><!-- /.thm-btn cta-one__btn -->
            </div><!-- /.cta-one__button-block -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->

    <section class="cta-three">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="cta-three__content">
                        <div class="cta-three__content-inner">
                            <div class="block-title text-left">
                                <p>Trusted & Professional</p>
                                <h3>We’re Trusted by <br> More Than <span class="counter">84,106</span> <br> Clients</h3>
                            </div><!-- /.block-title -->
                            <img src="{{ asset('website/assets/images/resources/cta-3-1.jpg') }}" data-wow-duration="1500ms" class="wow fadeInLeft img-fluid" alt="">
                            <div class="cta-three__box">
                                <p>We only chosse the best <br> one for you</p>
                            </div><!-- /.cta-three__box -->
                        </div><!-- /.cta-three__content-inner -->
                    </div><!-- /.cta-three__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 text-lg-right text-md-center">
                    <div class="cta-three__images wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('website/assets/images/resources/cta-3-2.jpg') }}" class="img-fluid" alt="">
                    </div><!-- /.cta-three__images -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta-three -->

    <section class="testimonials-one">
        <div class="container">
            <div class="block-title text-center">
                <p>checkout our</p>
                <h3>Top Tour Reviews</h3>
            </div><!-- /.block-title -->
            <div class="testimonials-one__carousel thm__owl-carousel light-dots owl-carousel owl-theme" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-1.jpg') }}" alt="">
                            <h3>dolor sit</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-2.jpg') }}" alt="">
                            <h3>Lorem ipsum</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-3.jpg') }}" alt="">
                            <h3>dolor sit</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-1.jpg') }}" alt="">
                            <h3>Lorem ipsum</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-2.jpg') }}" alt="">
                            <h3>dolor sit</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-3.jpg') }}" alt="">
                            <h3>Lorem ipsum</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-1.jpg') }}" alt="">
                            <h3>dolor sit</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-2.jpg') }}" alt="">
                            <h3>Lorem ipsum</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__content">
                            <div class="testimonials-one__stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.testimonials-one__stars -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum malesuada vulputate. Sed lacus turpis, faucibus at ligula sit amet, mollis dignissim est. Praesent pretium sit amet quam a dictum.</p>
                        </div><!-- /.testimonials-one__content -->
                        <div class="testimonials-one__info">
                            <img src="{{ asset('website/assets/images/testimonials/testimonials-1-3.jpg') }}" alt="">
                            <h3>dolor sit</h3>
                        </div><!-- /.testimonials-one__info -->
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->

    <section class="cta-four" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
        <div class="container">
            <p>Find next place to visit</p>
            <h3>Explore the <span>world</span></h3>
            <a href="#" class="thm-btn cta-four__btn">Start Consulting now</a><!-- /.thm-btn -->
        </div><!-- /.container -->
    </section><!-- /.cta-four -->

    <div class="brand-one brand-one__home-two">
        <div class="container">
            <div class="brand-one__carousel owl-theme owl-carousel thm__owl-carousel" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": false, "margin": 115, "responsive": { "0": { "items": 2, "margin": 20 }, "480": { "items": 2, "margin": 20 }, "767": { "items": 3, "margin": 20 }, "991": { "items": 4, "margin": 40 }, "1199": { "items": 5 } }}'>
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-2.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-1.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-3.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-4.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-5.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-1.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-3.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-2.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-4.png') }}" alt="">
                </div><!-- /.item -->
                <div class="item">
                    <img src="{{ asset('website/assets/images/resources/logo-5.png') }}" alt="">
                </div><!-- /.item -->
            </div><!-- /.brand-one__carousel owl-theme owl-carousel thm__owl-carousel -->
        </div><!-- /.container -->
    </div><!-- /.brand-one -->

    <section class="blog-one">
        <div class="container">
            <div class="block-title text-center">
                <p>Check out Our</p>
                <h3>Latest News & Articles</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('website/assets/images/blog/blog-1-1.jpg') }}" alt="">
                            <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-one__meta -->
                            <h3><a href="#">Lorem ipsum dolor sit amet, adipiscing elit.</a></h3>
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('website/assets/images/blog/blog-1-2.jpg') }}" alt="">
                            <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-one__meta -->
                            <h3><a href="#">Lorem ipsum dolor sit amet, adipiscing elit.</a></h3>
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('website/assets/images/blog/blog-1-3.jpg') }}" alt="">
                            <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>
                        </div><!-- /.blog-one__image -->
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-one__meta -->
                            <h3><a href="#">Lorem ipsum dolor sit amet, adipiscing elit.</a></h3>
                        </div><!-- /.blog-one__content -->
                    </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one -->


    <footer class="site-footer">
        <div class="site-footer__bg" style="background-image: url({{ asset('website/assets/images/backgrounds/footer-bg-1-1.png') }});"></div>
        <!-- /.site-footer__bg -->
        <div class="container">
            <div class="row">
                <div class="footer-widget__column footer-widget__about">
                    <a href="{{ route('index') }}" class="footer-widget__logo"><img src="{{ asset('website/assets/images/Black on Transparent.png') }}" width="140" alt=""></a>
                    <p>We offer an efficient service to process your application, giving it the attention it deserves to ensure it is given the best possibility of success, allowing you full security for your investment and a second passport for you and your family.</p>
                    <a href="mailto:info@passportgates.com">info@passportgates.com</a> <br>
                    <a href="tel:+971585009411">+971585009411</a>
                </div><!-- /.footer-widget__column -->
                <div class="footer-widget__column footer-widget__links">
                    <h3 class="footer-widget__title">Company</h3><!-- /.footer-widget__title -->
                    <ul class="footer-widget__links-list list-unstyled">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="#">Community Blog</a></li>
                        <li><a href="#">Required Documents</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="#">Meet the Team</a></li>
                    </ul><!-- /.footer-widget__links-list list-unstyled -->
                </div><!-- /.footer-widget__column -->
                <div class="footer-widget__column footer-widget__links">
                    <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                    <ul class="footer-widget__links-list list-unstyled">
                        <li><a href="#">Passport Guides</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Citizenship</a></li>
                        <li><a href="#">Residency</a></li>
                        <li><a href="#">FAQ's</a></li>
                    </ul><!-- /.footer-widget__links-list list-unstyled -->
                </div><!-- /.footer-widget__column -->
                <div class="footer-widget__column footer-widget__gallery">
                    <h3 class="footer-widget__title">Gallery</h3><!-- /.footer-widget__title -->
                    <ul class="footer-widget__gallery-list list-unstyled">
                        <li><a href="#">
                                <img src="{{ asset('website/assets/images/resources/footer-1-1.jpg') }}" alt="">
                            </a></li>
                        <li><a href="#">
                                <img src="{{ asset('website/assets/images/resources/footer-1-2.jpg') }}" alt="">
                            </a></li>
                        <li><a href="#">
                                <img src="{{ asset('website/assets/images/resources/footer-1-3.jpg') }}" alt="">
                            </a></li>
                        <li><a href="#">
                                <img src="{{ asset('website/assets/images/resources/footer-1-4.jpg') }}" alt="">
                            </a></li>
                        <li><a href="#">
                                <img src="{{ asset('website/assets/images/resources/footer-1-5.jpg') }}" alt="">
                            </a></li>
                        <li><a href="#">
                                <img src="{{ asset('website/assets/images/resources/footer-1-6.jpg') }}" alt="">
                            </a></li>
                    </ul><!-- /.footer-widget__links-list list-unstyled -->
                </div><!-- /.footer-widget__column -->
                <div class="footer-widget__column footer-widget__options">
                    <h3 class="footer-widget__title">Options</h3><!-- /.footer-widget__title -->
                    <select name="languages" id="languages-2" class="selectpicker">
                        <option value="ENG">ENG</option>
                        <option value="AR">AR</option>
                    </select><!-- /#languages-2 .selectpicker -->
                </div><!-- /.footer-widget__column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.site-footer -->

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

