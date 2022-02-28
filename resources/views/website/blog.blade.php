@extends('layouts.front')

@section('blog')
    current
@endsection

@section('main')

    <div class="page-wrapper">
       @include('components.website.menu')

        <section class="page-header" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
            <div class="container">
                <h2>Blog</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><span>Blog</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-list">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-two__single blog-one__single">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog-one__image">
                                        <img src="{{ asset('website/assets/images/blog/blog-1-1.jpg') }}" alt="">
                                        <a href="{{ route('blog.single') }}"><i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 d-flex">
                                    <div class="blog-two__content my-auto">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                            {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>--}}
                                        </ul><!-- /.list-unstyled blog-one__meta -->
                                        <h3><a href="{{ route('blog.single') }}">Lorem ipsum dolor sit amet, adipiscing elit.</a></h3>
                                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                            injected.</p>
                                        <a href="{{ route('blog.single') }}" class="blog-two__link">Read More</a>
                                    </div><!-- /.blog-two__content -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.blog-two__single -->
                        <div class="blog-two__single blog-one__single">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog-one__image">
                                        <img src="{{ asset('website/assets/images/blog/blog-1-2.jpg') }}" alt="">
                                        <a href="{{ route('blog.single') }}"><i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 d-flex">
                                    <div class="blog-two__content my-auto">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href=""><i class="far fa-user-circle"></i> Admin</a></li>
                                            {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>--}}
                                        </ul><!-- /.list-unstyled blog-one__meta -->
                                        <h3><a href="{{ route('blog.single') }}">Lorem ipsum dolor sit amet, adipiscing elit.</a></h3>
                                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                            injected.</p>
                                        <a href="{{ route('blog.single') }}" class="blog-two__link">Read More</a>
                                    </div><!-- /.blog-two__content -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.blog-two__single -->
                        <div class="blog-two__single blog-one__single">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog-one__image">
                                        <img src="{{ asset('website/assets/images/blog/blog-1-3.jpg') }}" alt="">
                                        <a href="{{ route('blog.single') }}"><i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 d-flex">
                                    <div class="blog-two__content my-auto">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                            {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>--}}
                                        </ul><!-- /.list-unstyled blog-one__meta -->
                                        <h3><a href="{{ route('blog.single') }}">Lorem ipsum dolor sit amet, adipiscing elit.</a></h3>
                                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                            injected.</p>
                                        <a href="{{ route('blog.single') }}" class="blog-two__link">Read More</a>
                                    </div><!-- /.blog-two__content -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.blog-two__single -->
                        <div class="blog-two__single blog-one__single">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog-one__image">
                                        <img src="{{ asset('website/assets/images/blog/blog-1-1.jpg') }}" alt="">
                                        <a href="#"><i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 d-flex">
                                    <div class="blog-two__content my-auto">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                            {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>--}}
                                        </ul><!-- /.list-unstyled blog-one__meta -->
                                        <h3><a href="#">Lorem ipsum dolor sit amet, adipiscing elit.</a></h3>
                                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form
                                            injected.</p>
                                        <a href="#" class="blog-two__link">Read More</a>
                                    </div><!-- /.blog-two__content -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.blog-two__single -->
                        <div class="post-pagination">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="active" href="#">01</a>
                            <a href="#">02</a>
                            <a href="#">03</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div><!-- /.post-pagination -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="{{ route('blog') }}" class="sidebar__search-form" method="GET">
                                    <input type="search" name="s" placeholder="Search">
                                    <button type="submit"><i class="tripo-icon-magnifying-glass"></i></button>
                                </form><!-- /.sidebar__search-form -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Recent Posts</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('website/assets/images/blog/lp-1-1.jpg') }}" alt="">
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h3><a href="{{ route('blog.single') }}">14 Things to see and do when visiting japan</a></h3>
                                        </div><!-- /.sidebar__post-content -->
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('website/assets/images/blog/lp-1-2.jpg') }}" alt="">
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h3><a href="{{ route('blog.single') }}">Journeys are best measured in new friends</a></h3>
                                        </div><!-- /.sidebar__post-content -->
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('website/assets/images/blog/lp-1-3.jpg') }}" alt="">
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h3><a href="{{ route('blog.single') }}">Travel the most beautiful places in the world</a></h3>
                                        </div><!-- /.sidebar__post-content -->
                                    </li>
                                </ul><!-- /.sidebar__post-list list-unstyled -->
                            </div><!-- /.sidebar__single sidebar__post -->
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Popular Tags</h3><!-- /.sidebar__title -->
                                <div class="sidebar__tags-list">
                                    <a href="#">Travel</a>
                                    <a href="#">Passport</a>
                                    <a href="#">Residency</a>
                                    <a href="#">Adventures</a>
                                    <a href="#">Investment</a>
                                    <a href="#">Museums</a>
                                </div><!-- /.sidebar__tags-list -->
                            </div><!-- /.sidebar__single sidebar__tags -->
                            <div class="sidebar__single sidebar__social">
                                <h3 class="sidebar__title">Follow Us</h3><!-- /.sidebar__title -->
                                <div class="sidebar__social-list">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div><!-- /.sidebar__social-list -->
                            </div><!-- /.sidebar__single sidebar__twitter -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-list -->


    </div><!-- /.page-wrapper -->

@endsection
