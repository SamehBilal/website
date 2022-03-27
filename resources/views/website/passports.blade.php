@extends('layouts.front')

@section('passport')
    current
@endsection

@section('main')
    @include('components.website.menu')
    <div class="banner-three__wrap">
        <div class="banner-three__floated-text">Passport</div><!-- /.banner-three__floated-text -->

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

        <section class="gallery-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Passport Guide</p>
                    <h3>Passports</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/1.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/1.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/2.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/2.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/3.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/3.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/4.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/4.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/5.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/5.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/6.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/6.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/7.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/7.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/8.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/8.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/1.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/1.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/2.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/2.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/3.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/3.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/4.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/4.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/5.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/5.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/6.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/6.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/7.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/7.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/8.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/8.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/1.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/1.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/2.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/2.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/3.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/3.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/4.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/4.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/5.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/5.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/6.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/6.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/7.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/7.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/8.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/8.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/1.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/1.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/2.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/2.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/3.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/3.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/4.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/4.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/5.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/5.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/6.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/6.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/7.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/7.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/8.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/8.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/1.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/1.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/2.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/2.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/3.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/3.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-1">
                        <div class="gallery-one__single">
                            <img src="{{ asset('website/assets/images/passports/4.png') }}" alt="">
                            <a class="gallery-one__link img-popup" href="{{ asset('website/assets/images/passports/4.png') }}"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.gallery-one -->
@endsection
