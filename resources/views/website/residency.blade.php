@extends('layouts.front')

@section('programs')
    current
@endsection

@section('main')

    @include('components.website.menu')

    <section class="page-header" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
        <div class="container">
            <h2>Residency By Investment</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><span>Residency By Investment</span></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="tour-category-one">
        <div class="container">
            {{--<div class="block-title text-center">
                <p>residency </p>
                <h3>residency By Investment</h3>
            </div><!-- /.block-title -->--}}
            <div class="row text-center cta-two__content-highlight">
                <p>Residency Programs allow high networth and qualified individuals to obtain residency visas and live in a desired host country without requiring the country’s citizenship.</p>
                <p>As a permanent resident, you and your family will benefit from many of the rights enjoyed by citizens of those countries. If you are seeking to achieve your residency and relocation dream, Reach Immigration is your first choice.</p>
                <br>
            </div>
            <div class="row">
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="000ms">
                    <div class="tour-category-one__single">
                        <img src="{{ asset('website/assets/images/flags/194-malta-300x300.png') }}" height="50" alt="">
                        <h3><a href="{{ route('residency.single') }}">Malta</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInDown " data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="tour-category-one__single">
                        <img src="{{ asset('website/assets/images/flags/243-canada-300x300.png') }}" height="50" alt="">
                        <h3><a href="{{ route('residency.single') }}">Canada</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="tour-category-one__single">
                        <img src="{{ asset('website/assets/images/flags/170-greece-300x300.png') }}" height="50" alt="">
                        <h3><a href="{{ route('residency.single') }}">Greece</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInDown " data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="tour-category-one__single">
                        <img src="{{ asset('website/assets/images/flags/260-united-kingdom-300x300.png') }}" height="50" alt="">
                        <h3><a href="{{ route('residency.single') }}">United Kingdom</a></h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="400ms">
                    <div class="tour-category-one__single">
                        <img src="{{ asset('website/assets/images/flags/224-portugal-300x300.png') }}" height="50" alt="">
                        <h3><a href="{{ route('residency.single') }}">Portugal</a></h3>
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

@endsection
