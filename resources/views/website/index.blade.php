@extends('layouts.front')

@section('main')
    <div class="site-header__header-one site-header__home-two-wrap">
        <div class="topbar-one">
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
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->
        <header class="main-nav__header-one site-header__home-two ">
            <nav class="header-navigation stricky">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__logo-box">
                        <a href="{{ route('index') }}" class="main-nav__logo">
                            <img src="{{ asset('website/assets/images/Original on Transparent.png') }}" class="main-logo" width="140" alt="Awesome Image" />
                        </a>
                        <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i>
                            <!-- /.smpl-icon-menu --></a>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-nav__main-navigation">
                        <ul class=" main-nav__navigation-box">
                            <li class="current">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Programs</a>
                                <ul>
                                    <li><a href="{{ route('citizenship') }}">Citizenship By Investment</a></li>
                                    <li><a href="{{ route('residency') }}">Residency By Investment</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li class="dropdown">
                                <a href="#">Passport Guide</a>
                                <ul>
                                    <li><a href="{{ route('passport.guide') }}">Passport Guides</a></li>
                                    <li><a href="{{ route('visa.requirements') }}">Travel Visa Requirements</a></li>
                                    <li><a href="{{ route('passports') }}">Passports</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="main-nav__right">
                        <select name="languages" id="languages" class="selectpicker">
                            <option value="ENG">ENG</option>
                            <option value="AR">AR</option>
                        </select><!-- /#languages .selectpicker -->
                        <a href="#" class="main-nav__search search-popup__toggler"><i class="tripo-icon-magnifying-glass"></i></a>
                        <a href="{{ route('login') }}" class="main-nav__login" title="Login/Register"><i class="tripo-icon-avatar"></i> </a>
                    </div><!-- /.main-nav__right -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
    </div><!-- /.site-header__header-one site-header__home-two-wrap -->

    <section class="banner-two">
        <div class="banner-two__bg">
            <div class="banner-two__bg-inner" data-options='{ "delay": 5000, "slides": [ { "src": "{{ asset('website/assets/images/backgrounds/travel-2021-08-29-14-39-54-utc.jpg') }}" }, { "src": "{{ asset('website/assets/images/backgrounds/1519801807380.jfif') }}" }, { "src": "{{ asset('website/assets/images/backgrounds/travel editor favorite products.jpg') }}" } ], "transition": "fade", "timer": false }'></div><!-- /.banner-two__bg-inner -->
        </div><!-- /.banner-two__bg -->
<!--            <img src="{{ asset('website/assets/images/shapes/banner-two__flotated-text.png') }}" alt="" class="banner-two__floated-text">-->
        <div class="container">
            <p>Passport Gates</p>
            <h2>Trusted Bath</h2>
        </div><!-- /.container -->
    </section><!-- /.banner-two -->


    <section class="tour-search-one__home-two">
        <div class="container">
            <form class="tour-search-one wow fadeIn" action="#" data-wow-duration="1500ms">
                <div class="tour-search-one__inner">
                    <div class="tour-search-one__inputs">
                        <div class="tour-search-one__input-box">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Enter Name" name="name" id="name">
                        </div><!-- /.tour-search-one__input-box -->
                        <div class="tour-search-one__input-box">
                            <label for="phone">Phone</label>
                            <input type="number" placeholder="Enter Phone" name="phone" id="phone">
                        </div><!-- /.tour-search-one__input-box -->
                        <div class="tour-search-one__input-box">
                            <label for="email">Email</label>
                            <input type="email" placeholder="Enter Email" name="email" id="email">
                        </div><!-- /.tour-search-one__input-box -->
                        <div class="tour-search-one__input-box">
                            <label for="nationality">Nationality</label>
                            <input type="text" placeholder="Nationality" name="nationality" id="nationality">
                        </div><!-- /.tour-search-one__input-box -->
                        <div class="tour-search-one__input-box">
                            <label for="job">Job Title</label>
                            <input type="text" placeholder="Job Title" name="job" id="job">
                        </div><!-- /.tour-search-one__input-box -->
                        <div class="tour-search-one__input-box" style="max-width: 100%!important;">
                            <label for="Available">To qualify you must have $100,000 Available ?</label>
                            <select class="selectpicker" id="Available">
                                <option value="Yes_Available">Yes Available</option>
                                <option value="Not_Available">Not Available (Sorry at the moment you don't qualify for the program )</option>
                            </select>
                        </div><!-- /.tour-search-one__input-box -->
                    </div><!-- /.tour-search-one__inputs -->
                    <div class="tour-search-one__btn-wrap">
                        <button type="submit" class="thm-btn tour-search-one__btn btn_black" style="background: #D0BB6F">GET FREE CONSULTATION</button>
                    </div><!-- /.tour-search-one__btn-wrap -->
                </div><!-- /.tour-search-one__inner -->
            </form><!-- /.tour-search-one -->
        </div><!-- /.container -->
    </section>

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
                <a href="{{ route('contact') }}" class="thm-btn cta-one__btn">Get Free Consultation</a><!-- /.thm-btn cta-one__btn -->
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

@endsection


