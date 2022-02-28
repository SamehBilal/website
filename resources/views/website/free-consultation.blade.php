@extends('layouts.front')

@section('main')
    @include('components.website.menu')

    <div class="tour-details__header" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
        <div class="container">
            <div class="tour-details__gallery-links">
                {{--<a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>--}}
            </div><!-- /.tour-details__gallery-links -->
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><span>Free Consultation</span></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </div><!-- /.tour-details__header -->
    <br>
    <br>
    <section class="tour-two tour-list tour-details-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
