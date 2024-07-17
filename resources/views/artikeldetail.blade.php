<x-home>
    @foreach ($artikel as $item)
        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{ $item->picture }})">
            </div>
            <div class="shape1">
                <img src="{{ asset('frontend/assets/images/shapes/page-header-shape1.png') }}" alt="#">
            </div>

            <div class="container">
                <div class="page-header__inner">
                    <h2>{{ $item->title }}</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>-</span></li>
                        <li>{{ $item->title }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->


        <!--Start Blog Details -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <!--Start Blog Details Content-->
                    <div class="col-xl-8">
                        <div class="blog-details__content">
                            <!--Start Blog Page Single-->
                            <div class="blog-page__single">
                                <div class="blog-page__single-img">
                                    <div class="inner">
                                        <img src="{{ $item->picture }}" alt="#">
                                    </div>
                                </div>

                                <div class="blog-page__single-content">

                                    <h2>{{ $item->title }}</h2>
                                    <p class="text1">{!! $item->content !!}</p>



                                </div>
                            </div>
                            <!--End Blog Page Single-->



                            <div class="author-one">
                                <div class="inner">
                                    <div class="author-one__image">
                                        <img src="{{ $item->user->picture }}" alt="#">
                                    </div>
                                    <div class="author-one__content">
                                        <h3>{{ $item->user->name }}</h3>
                                        <p>{!! $item->user->des !!}</p>
                                        <ul>
                                            <li><a href="{{ $item->user->fb }}"><i class="fab fa-facebook-square"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="{{ $item->user->x }}"><i class="fab fa-twitter"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="{{ $item->user->ig }}"><i class="fab fa-instagram"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="comment-one">
                                <h3 class="comment-one__title">Comments (2)</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/blog-details-img4.jpg" alt="#">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Strone Smith</h3>
                                        <p>Blessed heaven in seasons man were image void seasons given bearing greats
                                            fly all multiply you can surem dolor mesurement good.</p>
                                        <span>February 03. 2023 <a href="#"
                                                class="comment-one__btn">Reply</a></span>
                                    </div>
                                </div>

                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/blog-details-img5.jpg" alt="#">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Jhon Smith</h3>
                                        <p>Blessed heaven in seasons man were image void seasons given bearing greats
                                            fly multiply every deed </p>
                                        <span>February 03. 2023 <a href="#"
                                                class="comment-one__btn">Reply</a></span>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave A Reply</h3>
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box comment-form__textarea">
                                                <textarea name="message" placeholder="Write Comment"></textarea>
                                            </div>

                                            <div class="comment-form__btn-box">
                                                <button class="thm-btn" type="submit"
                                                    data-loading-text="Please wait...">
                                                    <span class="txt">
                                                        Post Comment
                                                    </span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                    <!--End Blog Details Content-->

                    <!--Start Sidebar-->
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__search wow animated fadeInUp" data-wow-delay="0.1s">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__category wow animated fadeInUp" data-wow-delay="0.2s">
                                <h3 class="sidebar__title">Category</h3>
                                <ul class="sidebar__category-list">
                                    <li><a href="#">Gardening <span>(12)</span></a></li>
                                    <li class="active"><a href="#">Lawn Care
                                            <span>(15)</span></a></li>
                                    <li><a href="#">Gutter Cleaning <span>(08)</span></a></li>
                                    <li><a href="#">landscaping <span>(20)</span></a></li>
                                    <li><a href="#">Maintanace <span>(14)</span></a></li>
                                    <li><a href="#">Planting Trees <span>(05)</span></a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->


                            <div class="sidebar__single sidebar__post wow animated fadeInUp" data-wow-delay="0.3s">
                                <h3 class="sidebar__title">Recent Post</h3>
                                <div class="sidebar__post-box">
                                    @foreach ($recentPosts as $post)
                                        <div class="sidebar__post-single">
                                            <div class="sidebar-post__img">
                                                <img src="{{ asset('storage/' . $post->image) }}"
                                                    alt="{{ $post->title }}">
                                            </div>
                                            <div class="sidebar__post-content-box">
                                                <h3><a
                                                        href="{{ route('artikeldetail', $post->slug) }}">{{ $post->title }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__tags wow animated fadeInUp" data-wow-delay="0.4s">
                                <h3 class="sidebar__title">Tags Cloud</h3>
                                <ul class="sidebar__tags-list clearfix">
                                    <li><a href="#">Carpet</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Agent</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Love</a></li>
                                    <li><a href="#">Room</a></li>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Corporate</a></li>
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                </div>
            </div>
        </section>
        <!--End Blog Details-->
    @endforeach
</x-home>
