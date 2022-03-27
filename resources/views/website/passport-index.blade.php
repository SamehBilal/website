@extends('layouts.front')

@section('passport')
    current
@endsection

@section('main')
    @include('components.website.menu')

    <div class="banner-three__wrap">
        <div class="banner-three__floated-text">Travel</div><!-- /.banner-three__floated-text -->

        <img src="{{ asset('website/assets/images/shapes/leaf-1-1.png') }}" alt="" class="banner-three__leaf">
        <img src="{{ asset('website/assets/images/shapes/sun-1-1.png') }}" alt="" class="banner-three__sun">
        <img src="{{ asset('website/assets/images/shapes/plane-1-1.png') }}" class="banner-three__plane" alt="">

        <section class="banner-three">
            <div class="container">
                <div class="banner-three__top">
                    <div class="banner-three__top-inner">
                        <h3>Passport Guide</h3>
                        <p>Passport Gates</p>
                    </div><!-- /.banner-three__top-inner -->
                </div><!-- /.banner-three__top -->
            </div><!-- /.container -->
        </section><!-- /.banner-three -->

        <div class="banner-three__box">
            <div class="container">
                <div class="row">
                    <div class="banner-three__col" onclick="location.href='{{ route('passport.guide') }}'" style="cursor: pointer" title="Passport Guide">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-1.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-2.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col" onclick="location.href='{{ route('visa.requirements') }}'" style="cursor: pointer" title="Visa Requirements">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-3.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-4.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col" onclick="location.href='{{ route('passports') }}'" style="cursor: pointer" title="Passports">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-5.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.banner-three__box -->

    </div><!-- /.banner-three__wrap -->
    <section>
        <div class="block-title text-center">
            <p>Passport Guide</p>
            <h3>Passports</h3>
        </div><!-- /.block-title -->
        <div id="vmap" style="width: 100vw; height: 600px;"></div>
    </section>

    <section class="tour-category-one">
        <div class="container">
            <div class="row">
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="000ms" style="max-width: 25%!important;">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-feedback"></i>
                        <h3><a href="#">Rank</a> <br> 18</h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInDown " data-wow-duration="1500ms" data-wow-delay="100ms" style="max-width: 25%!important;">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-plane-ticket"></i>
                        <h3><a href="#">Visa Free</a> <br> 42</h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="200ms" style="max-width: 25%!important;">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-magnifying-glass"></i>
                        <h3><a href="#">Visa Required</a> <br> 32</h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
                <div class="tour-category-one__col wow fadeInDown " data-wow-duration="1500ms" data-wow-delay="300ms" style="max-width: 25%!important;">
                    <div class="tour-category-one__single">
                        <i class="tripo-icon-suitcase"></i>
                        <h3><a href="#">Visa On Arrival</a> <br> 15</h3>
                    </div><!-- /.tour-category-one__single -->
                </div><!-- /.tour-category-one__col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-category-one -->

@endsection
