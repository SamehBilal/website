@extends('layouts.front')

@section('about')
    current
@endsection

@section('main')

        @include('components.website.menu')

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

@endsection
