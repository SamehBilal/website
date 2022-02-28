@extends('layouts.front')

@section('contact')
    current
@endsection

@section('main')

        @include('components.website.menu')

        <section class="page-header" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
            <div class="container">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>Contact</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-info-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <i class="tripo-icon-placeholder"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p>Churchill Tower - Al Amal St - Business Bay - Dubai -
                                    UAE</p>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <i class="tripo-icon-phone-call"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p>Mobile: <a href="tel:666-999-0000">+971585009411</a> <br>
                                    Mobile: <a href="tel:+123-456-hello">+905434552674</a></p>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <i class="tripo-icon-phone-call"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p>Telephone: <a href="tel:+97142347738">+97142347738</a> <br>
                                    Telephone: <a href="tel:+9021299752624">+9021299752624</a></p>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-one__content">
                            <div class="block-title text-left">
                                <p>Contact with us</p>
                                <h3>Have any Question? <br>
                                    feel free to contact <br>
                                    with us.</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-one__content-text">
                                <p>Lorem ipsum available isn but the majority have suffered alteratin <br> in some or form
                                    injected.</p>
                            </div><!-- /.contact-one__content-text -->
                            <div class="contact-one__social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div><!-- /.contact-one__social -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <form action="{{ route('dashboard.messages.store') }}" method="POST" class="contact-one__form">
                            @csrf
                            <div class="row low-gutters">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" name="name" placeholder="Your Name" required>
                                        @error('name')
                                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" name="email" placeholder="Email Address" required>
                                        @error('email')
                                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number">
                                        @error('phone')
                                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" value="{{ old('subject') }}" class="@error('subject') is-invalid @enderror" name="subject" placeholder="Subject">
                                        @error('subject')
                                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="message" class="@error('message') is-invalid @enderror" placeholder="Write Message">{{ old('message') }}</textarea>
                                        @error('message')
                                        <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <button type="submit" class="thm-btn contact-one__btn">Send message</button><!-- /.thm-btn contact-one__btn -->
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row low-gutters -->
                        </form>
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.648823759664!2d55.26430698499079!3d25.181332983903534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69ce4be99a07%3A0xe359738b5b1bb1d3!2zQ2h1cmNoaWxsIFRvd2VyIC0gQWwgQW1hbCBTdCAtINin2YTYrtmE2YrYrCDYp9mE2KrYrNin2LHZiiAtINiv2KjZiiAtINin2YTYpdmF2KfYsdin2Kog2KfZhNi52LHYqNmK2Kkg2KfZhNmF2KrYrdiv2Kk!5e0!3m2!1sar!2seg!4v1644450050536!5m2!1sar!2seg" class="google-map__contact" allowfullscreen></iframe>
@endsection
