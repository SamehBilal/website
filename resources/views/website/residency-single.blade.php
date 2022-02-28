@extends('layouts.front')

@section('programs')
    current
@endsection

@section('main')
    @include('components.website.menu')

    <div class="tour-details__header" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
        <div class="container">
            <div class="tour-details__gallery-links">
                <a href="#"><i class="fab fa-youtube"></i></a>
                {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
            </div><!-- /.tour-details__gallery-links -->
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><span>Malta </span> </li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </div><!-- /.tour-details__header -->

    <section class="tour-two tour-list tour-details-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-details__content">
                        <div class="tour-two__top">
                            <div class="tour-two__top-left">
                                <h3>Malta Program</h3>
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star inactive"></i> {{--2 Reviews--}}
                                </div><!-- /.tour-one__stars -->

                            </div><!-- /.tour-two__top-left -->
                            <div class="tour-two__right">
                                <p><span>$250,000</span> <br> {{--Per Person--}}</p>
                            </div><!-- /.tour-two__right -->
                        </div><!-- /.tour-two__top -->
                        <ul class="tour-one__meta list-unstyled">
                            <li><a href="tour-details.html"><i class="fa fa-passport"></i>Passport Rank 159</a></li>
                            <li><a href="tour-details.html"><i class="fa fa-plane"></i>Visa Free Countries 17</a></li>
                            {{--<li><a href="tour-details.html"><i class="far fa-bookmark"></i>Investment Amount​ 250,000 USD</a></li>--}}
                            <li><a href="tour-details.html"><i class="far fa-clock"></i>Processing Time 6 months</a></li>
                        </ul><!-- /.tour-one__meta -->

                        <h3 class="tour-details__title">About The Program</h3><!-- /.tour-details__title -->
                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form injected.
                            Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum
                            quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem
                            ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia
                            quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                            lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros.</p>
                        <h3 class="tour-details__subtitle">Benefits Of The Program</h3><!-- /.tour-details__subtitle -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="tour-details__list list-unstyled">
                                    <li>
                                        <i class="fa fa-check"></i>
                                        Lorem ipsum available isn but architecto beatae vitae dicta
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>
                                        et quasi architecto beatae architecto beatae vitae dicta
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>
                                        beatae vitae dicta sunt explicabo architecto beatae vitae dicta
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>
                                        lacus quis enim var sed efficitur architecto beatae vitae dicta
                                    </li>
                                </ul><!-- /.tour-details__list -->
                            </div><!-- /.col-md-6 -->
                            {{--<div class="col-md-6">
                                <ul class="tour-details__list unavailable list-unstyled">
                                    <li>
                                        <i class="fa fa-times"></i>
                                        Additional Services
                                    </li>
                                    <li>
                                        <i class="fa fa-times"></i>
                                        1 Meal Per Day
                                    </li>
                                    <li>
                                        <i class="fa fa-times"></i>
                                        Insurance
                                    </li>
                                    <li>
                                        <i class="fa fa-times"></i>
                                        Food & Drinks
                                    </li>
                                </ul><!-- /.tour-details__list -->
                            </div><!-- /.col-md-6 -->--}}
                        </div><!-- /.row -->
                        <div class="tour-details__spacer"></div><!-- /.tour-details__spacer -->
                        <h3 class="tour-details__title">Requirements & Qualifications</h3><!-- /.tour-details__title -->

                        <div class="tour-details__plan">
                            <div class="tour-details__plan-single">
                                <div class="tour-details__plan-count">
                                    01
                                </div><!-- /.tour-details__plan-count -->
                                <div class="tour-details__plan-content">
                                    <h3>Lorem ipsum available isn but the</h3>
                                    <span>Essential</span>
                                    <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                        injected. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro
                                        est qui dolorem ipsum quia quaed inventore veritatis et quasi dicta sunt explicabo.
                                    </p>
                                    {{--<ul class="list-unstyled">
                                        <li>Free Drinks</li>
                                        <li>Awesome Breakfast</li>
                                        <li>5 Star Accommodation</li>
                                    </ul><!-- /.list-unstyled -->--}}
                                </div><!-- /.tour-details__plan-content -->
                            </div><!-- /.tour-details__plan-single -->
                            <div class="tour-details__plan-single">
                                <div class="tour-details__plan-count">
                                    02
                                </div><!-- /.tour-details__plan-count -->
                                <div class="tour-details__plan-content">
                                    <h3>Lorem ipsum available isn but the</h3>
                                    <span>Essential</span>
                                    <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                        injected. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro
                                        est qui dolorem ipsum quia quaed inventore veritatis et quasi dicta sunt explicabo.
                                    </p>
                                    {{--<ul class="list-unstyled">
                                        <li>Free Drinks</li>
                                        <li>Awesome Breakfast</li>
                                        <li>5 Star Accommodation</li>
                                    </ul><!-- /.list-unstyled -->--}}
                                </div><!-- /.tour-details__plan-content -->
                            </div><!-- /.tour-details__plan-single -->
                            <div class="tour-details__plan-single">
                                <div class="tour-details__plan-count">
                                    03
                                </div><!-- /.tour-details__plan-count -->
                                <div class="tour-details__plan-content">
                                    <h3>Lorem ipsum available isn but the</h3>
                                    <span>Optional</span>
                                    <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                        injected. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro
                                        est qui dolorem ipsum quia quaed inventore veritatis et quasi dicta sunt explicabo.
                                    </p>
                                    {{--<ul class="list-unstyled">
                                        <li>Free Drinks</li>
                                        <li>Awesome Breakfast</li>
                                        <li>5 Star Accommodation</li>
                                    </ul><!-- /.list-unstyled -->--}}
                                </div><!-- /.tour-details__plan-content -->
                            </div><!-- /.tour-details__plan-single -->
                        </div><!-- /.tour-details__plan -->
                        {{--<div class="tour-details__spacer"></div><!-- /.tour-details__spacer -->
                        <h3 class="tour-details__title">Tour Location</h3><!-- /.tour-details__title -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact google-map__tour-details" allowfullscreen></iframe>--}}
                        <div class="tour-details__spacer"></div><!-- /.tour-details__spacer -->
                        <h3 class="tour-details__title">FAQs</h3><!-- /.tour-details__title -->
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>Lorem ipsum is simply free text?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                            injected. Lorem ipsum is simply free text used by copytyping</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h4>Lorem ipsum is simply free text?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                            injected. Lorem ipsum is simply free text used by copytyping</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Lorem ipsum is simply free text?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                            injected. Lorem ipsum is simply free text used by copytyping</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                        {{--<h3 class="tour-details__title">Reviews Scores</h3><!-- /.tour-details__title -->
                        <div class="tour-details__review-score">
                            <div class="tour-details__review-score-ave">
                                <div class="my-auto">
                                    <h3>7.0</h3>
                                    <p><i class="fa fa-star"></i> Super</p>
                                </div><!-- /.my-auto -->
                            </div><!-- /.tour-details__review-score-ave -->
                            <div class="tour-details__review-score__content">
                                <div class="tour-details__review-score__bar">
                                    <div class="tour-details__review-score__bar-top">
                                        <h3>Services</h3>
                                        <p>50%</p>

                                    </div><!-- /.tour-details__review-score__bar-top -->
                                    <div class="tour-details__review-score__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms" style="width: 50%;"></span>
                                    </div><!-- /.tour-details__review-score__bar-line -->
                                </div><!-- /.tour-details__review-score__bar -->
                                <div class="tour-details__review-score__bar">
                                    <div class="tour-details__review-score__bar-top">
                                        <h3>Comfort</h3>
                                        <p>87%</p>

                                    </div><!-- /.tour-details__review-score__bar-top -->
                                    <div class="tour-details__review-score__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms" style="width: 87%;"></span>
                                    </div><!-- /.tour-details__review-score__bar-line -->
                                </div><!-- /.tour-details__review-score__bar -->
                                <div class="tour-details__review-score__bar">
                                    <div class="tour-details__review-score__bar-top">
                                        <h3>Hospitality</h3>
                                        <p>63%</p>

                                    </div><!-- /.tour-details__review-score__bar-top -->
                                    <div class="tour-details__review-score__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms" style="width: 63%;"></span>
                                    </div><!-- /.tour-details__review-score__bar-line -->
                                </div><!-- /.tour-details__review-score__bar -->
                                <div class="tour-details__review-score__bar">
                                    <div class="tour-details__review-score__bar-top">
                                        <h3>Food</h3>
                                        <p>34%</p>

                                    </div><!-- /.tour-details__review-score__bar-top -->
                                    <div class="tour-details__review-score__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms" style="width: 34%;"></span>
                                    </div><!-- /.tour-details__review-score__bar-line -->
                                </div><!-- /.tour-details__review-score__bar -->
                                <div class="tour-details__review-score__bar">
                                    <div class="tour-details__review-score__bar-top">
                                        <h3>Location</h3>
                                        <p>22%</p>

                                    </div><!-- /.tour-details__review-score__bar-top -->
                                    <div class="tour-details__review-score__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms" style="width: 22%;"></span>
                                    </div><!-- /.tour-details__review-score__bar-line -->
                                </div><!-- /.tour-details__review-score__bar -->
                                <div class="tour-details__review-score__bar">
                                    <div class="tour-details__review-score__bar-top">
                                        <h3>Rating</h3>
                                        <p>70%</p>

                                    </div><!-- /.tour-details__review-score__bar-top -->
                                    <div class="tour-details__review-score__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms" style="width: 70%;"></span>
                                    </div><!-- /.tour-details__review-score__bar-line -->
                                </div><!-- /.tour-details__review-score__bar -->
                            </div><!-- /.tour-details__review-score__content -->
                        </div><!-- /.tour-details__review-score -->--}}

                    </div><!-- /.tour-details__content -->

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
@endsection
