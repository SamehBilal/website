@extends('layouts.front')

@section('blog')
    current
@endsection

@section('main')
<div class="page-wrapper">

    @include('components.website.menu')

    <section class="page-header" style="background-image: url({{ asset('website/assets/images/backgrounds/cta-4-bg.jpg') }});">
        <div class="container">
            <h2>Lorem ipsum dolor sit amet, adipiscing elit.</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">blog</a></li>
                <li><span>Lorem ipsum dolor sit amet, adipiscing elit.</span></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="blog-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="blog-details__image">
                        <img src="{{ asset('website/assets/images/blog/blog-d-1-1.jpg') }}" alt="" class="img-fluid">
                    </div><!-- /.blog-details__image -->
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                            {{--<li><a href="#"><i class="far fa-comments"></i> 2 Comments</a></li>--}}
                        </ul><!-- /.list-unstyled blog-one__meta -->
                        <h3>Lorem ipsum dolor sit amet, adipiscing elit.</h3>
                        <br>
                        <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form injected.
                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum
                            auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus a sit amet
                            mauris. Morbi accumsan ipsum veliam nec tellus a odio tincidunt auctor.</p>

                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some injected or words which don't look even slightly believable. If you are going
                            to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                            the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                            chunks as necessary, making this the first true generator on the Internet. It uses a dictionary
                            of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem
                            Ipsum which looks reasonable. </p>

                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting.</p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into unchanged. Lorem Ipsum passages publishing.</p>

                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <span>Tags:</span>
                                <a href="#">Travel</a>
                                <a href="#">Passport</a>
                                <a href="#">Residency</a>
                            </p><!-- /.blog-details__tags -->
                            <div class="sidebar__social-list">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div><!-- /.sidebar__social-list -->
                        </div><!-- /.blog-details__bottom -->
                    </div><!-- /.blog-details__content -->

                    {{--<div class="author-one">
                        <div class="author-one__image">
                            <img src="{{ asset('website/assets/images/blog/author-1-1.jpg') }}" alt="">
                        </div><!-- /.author-one__image -->
                        <div class="author-one__content">
                            <h3>Christine Eve</h3>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining unchanged. It was popularised in the sheets containing.</p>
                        </div><!-- /.author-one__content -->
                    </div><!-- /.author-one -->--}}

                    {{--<div class="comment-one">
                        <h3 class="comment-one__title">2 Comments</h3><!-- /.comment-one__title -->
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="{{ asset('website/assets/images/blog/comment-1-1.jpg') }}" alt="">
                            </div><!-- /.comment-one__image -->
                            <div class="comment-one__content">
                                <h3>Kevin Martin</h3>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting
                                    unchanged. It was popularised in the sheets containing lorem ipsum is simply free text
                                    available in the martket to use now.</p>
                                <a href="#" class="thm-btn comment-one__btn">Reply</a><!-- /.thm-btn comment-one__btn -->
                            </div><!-- /.comment-one__content -->
                        </div><!-- /.comment-one__single -->
                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="{{ asset('website/assets/images/blog/comment-1-2.jpg') }}" alt="">
                            </div><!-- /.comment-one__image -->
                            <div class="comment-one__content">
                                <h3>Kevin Martin</h3>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting
                                    unchanged. It was popularised in the sheets containing lorem ipsum is simply free text
                                    available in the martket to use now.</p>
                                <a href="#" class="thm-btn comment-one__btn">Reply</a><!-- /.thm-btn comment-one__btn -->
                            </div><!-- /.comment-one__content -->
                        </div><!-- /.comment-one__single -->
                    </div><!-- /.comment-one -->

                    <div class="comment-form">
                        <h3 class="comment-form__title">Leave a Comment</h3><!-- /.comment-form__title -->
                        <form action="inc/sendemail.php" class="contact-one__form">
                            <div class="row low-gutters">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="email" placeholder="Email Address">
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <button type="submit" class="thm-btn contact-one__btn">Send message</button>
                                        <!-- /.thm-btn contact-one__btn -->
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row low-gutters -->
                        </form>
                    </div><!-- /.comment-form -->--}}
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
