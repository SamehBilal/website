@extends('layouts.front')

@section('programs')
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
                        <h3>Enjoy Your Trips</h3>
                        <p>Like Never Before!</p>
                    </div><!-- /.banner-three__top-inner -->
                </div><!-- /.banner-three__top -->
            </div><!-- /.container -->
        </section><!-- /.banner-three -->

        <div class="banner-three__box">
            <div class="container">
                <div class="row">
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-1.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-2.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-3.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
                        <div class="banner-three__box-single">
                            <img src="{{ asset('website/assets/images/gallery/gallery-h3-4.jpg') }}" alt="">
                        </div><!-- /.banner-three__box-single -->
                    </div><!-- /.banner-three__col -->
                    <div class="banner-three__col">
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
        <div id="svgMapPopulation"></div>
        <script src="{{ asset('website/assets/data/population.js') }}"></script>
        <script>
            new svgMap({
                targetElementID: 'svgMapPopulation',
                data: svgMapDataPopulation,
                flagType: 'emoji',
                mouseWheelZoomEnabled: true,
                mouseWheelZoomWithKey: true
            });
        </script>

    </section>

@endsection
