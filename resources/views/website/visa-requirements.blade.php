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

    <section class="tour-search-one__home-three">
        <div class="container">
            <div class="block-title text-center">
                <p>Find Adventure That Suits You </p>
                <h3>Book With Us - It’s Better!</h3>
            </div><!-- /.block-title -->
            <form class="tour-search-one" action="#">
                <div class="tour-search-one__inner">
                    <div class="tour-search-one__inputs">
                        <div class="tour-search-one__input-box" style="max-width: 50%!important;">
                            <label for="origin">Origin</label>
                            <select class="selectpicker" name="origin" id="origin">
                                <option value="Egypt">Egypt</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Turkey">Turkey</option>
                            </select>
                        </div><!-- /.tour-search-one__input-box -->
                        <div class="tour-search-one__input-box" style="max-width: 50%!important;">
                            <label for="destination">Destination</label>
                            <select class="selectpicker" name="destination" id="destination">
                                <option value="Portugal">Portugal</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Turkey">Turkey</option>
                            </select>
                        </div><!-- /.tour-search-one__input-box -->
                    </div><!-- /.tour-search-one__inputs -->
                    <div class="tour-search-one__btn-wrap">
                        <button type="submit" class="thm-btn tour-search-one__btn">Check</button>
                    </div><!-- /.tour-search-one__btn-wrap -->
                </div><!-- /.tour-search-one__inner -->
            </form><!-- /.tour-search-one -->
        </div><!-- /.container -->
    </section>

    <section class="tour-two tour-list tour-details-two">
        <div class="container">
            <div class="row">
                <div class="tour-details__content">
                <h3 class="tour-details__title">Portugal Visa Requirements For Egyptian Citizens</h3><!-- /.tour-details__title -->
                    <div class="tour-search-one" action="#">
                        <div class="tour-search-one__inner">
                            <div class="tour-search-one__inputs">
                                <div class="tour-search-one__input-box" style="max-width: 50%!important;">
                                    <label for="Status">Visa Status	</label>
                                    <div id="status">
                                        Maximum Duration
                                    </div>
                                </div><!-- /.tour-search-one__input-box -->
                                <div class="tour-search-one__input-box" style="max-width: 50%!important;">
                                    <label for="Required">Visa Required</label>
                                    <div id="Required">
                                        90
                                    </div>
                                </div><!-- /.tour-search-one__input-box -->
                            </div><!-- /.tour-search-one__inputs -->
                        </div><!-- /.tour-search-one__inner -->
                    </div><!-- /.tour-search-one -->
                <h3 class="tour-details__subtitle">Documents & Health Requirements</h3><!-- /.tour-details__subtitle -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="tour-details__list list-unstyled">
                            <li>
                                <i class="fa fa-check"></i>
                                passport valid for more than 6 months.
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                visa application form, in two (2) copies, correctly completed and signed.
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                two recent photographs of the same print.
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                invitation letter, or certificate of accommodation legalized by the municipality of residence of the invitation.
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                hotel reservation letter or certificate drawn up by a travel agency.
                            </li>
                        </ul><!-- /.tour-details__list -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
                </div>
            </div>
        </div>
    </section>

@endsection
