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
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="current">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Programs</a>
                                    <ul>
                                        <li><a href="#">Citizenship By Investment</a></li>
                                        <li><a href="#">Residency By Investment</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li class="dropdown">
                                    <a href="#">Passport Guide</a>
                                    <ul>
                                        <li><a href="#">Passport Guides</a></li>
                                        <li><a href="#">Travel Visa Requirements</a></li>
                                        <li><a href="#">Assessment Tool</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
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

        <section class="page-header" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
            <div class="container">
                <h2>About Us</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>About Us</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="cta-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft">
                        <img src="{{ asset('website/assets/images/resources/cta-2-1.jpg') }}" alt="" class="img-fluid">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="cta-two__content">
                            <div class="block-title text-left">
                                <p>Best program services</p>
                                <h3>Passport Gates</h3>
                            </div><!-- /.block-title -->
                            <div class="cta-two__content-highlight">
                                <p>We offer an efficient service to process your application, giving it the attention it deserves to ensure it is given the best possibility of success, allowing you full security for your investment and a second passport for you and your family.</p>
                            </div><!-- /.cta-two__content-highlight -->
                            <ul class="list-unstyled cta-two__list">
                                <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing.</li>
                                <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur.</li>
                                <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet.</li>
                            </ul><!-- /.list-unstyled -->
                            <a href="{{ route('about') }}" class="thm-btn cta-two__btn">Get Free Consultation</a><!-- /.thm-btn -->
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->

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

        <section class="video-one" style="background-image: url({{ asset('website/assets/images/backgrounds/video-bg-1-1.jpg') }});">
            <div class="container text-center">
                <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="video-one__btn video-popup"><i class="fa fa-play"></i></a><!-- /.video-one__btn -->
                <p>Love where you're going</p>
                <h3><span>Passport Gates</span> is you trusted <br> bath <span>to the best program</span></h3>
            </div><!-- /.container -->
        </section><!-- /.video-one -->


        <div class="brand-one">
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


        <section class="mailchimp-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3>Get The Latest Updates <br>
                            by Signing Up</h3>
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <form action="{{ route('dashboard.subscribers.store') }}" method="POST" accept-charset="utf-8" class="mailchimp-one__form" >
                            @csrf
                            <input type="email" placeholder="Email Address" id="newsletter" name="email">
                            <button class="thm-btn mailchimp-one__btn" type="submit">Subscribe now</button>
                        </form><!-- /.mailchimp-one__form -->
                        <div class="mc-form__response">
                            @error('email')
                            <div class="invalid-feedback" role="alert">{{ $message }}</div>
                            @enderror
                        </div><!-- /.mc-form__response -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->

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
</body>

</html>
