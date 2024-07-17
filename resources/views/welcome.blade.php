<x-home>



    <!--Start Main Slider Two-->
    <section class="main-slider main-slider-two">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">


                <!--Start Main Slider Two-->
                @foreach ($banner as $udingila)
                    <div class="swiper-slide">
                        <div class="image-layer" style="   background-image:url({{ $udingila->picture }}) ">
                        </div>
                        <div class="shape1"></div>

                        <div class="container">
                            <div class="main-slider-two__content">
                                <div class="tagline">
                                    <p>{{ $udingila->judul }}</p>
                                </div>
                                <div class="title">
                                    <h2>{{ $udingila->deskripsi }}</h2>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ $udingila->buton }}">
                                        <span class="txt">Whatsapp</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Main Slider Two-->

                <!--End Main Slider Two-->

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Slider Two-->


    <!--Start Features One -->
    <section class="features-one">
        <div class="features-one__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/features-v1-bg.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-one__inner">
                        <div class="owl-carousel owl-theme thm-owl__carousel features-one__carousel"
                            data-options='{"items": 4}'>
                            <!--Start Features One Single-->
                            @foreach ($kategorihome as $item)
                                <div class="features-one__single text-center">
                                    <div class="features-one__single-inner">
                                        <div class="icon-box">
                                            <img src="{{ $item->picture }}" alt="">
                                        </div>
                                        <div class="text-box">
                                            <h2><a href="#">{{ $item->judul }}</a></h2>
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                            <!--End Features One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--End Features One -->


    <!--Start About Two -->
    <section class="about-two">
        <div class="about-two__bg"
            style="background-image: url({{ asset('frontend/assets/images/about/gunung.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <!--Start About Two Img-->
                <div class="col-xl-6">
                    <div class="about-two__img">
                        <div class="about-two__img1">
                            <img src="{{ asset('frontend/assets/images/about/gunung.jpg') }}" alt="#">
                        </div>
                        <div class="about-two__img2 wow zoomIn" data-wow-delay="100ms" data-wow-duration="3500ms">
                            <img src="{{ asset('frontend/assets/images/about/about-v2-img2.jpg') }}" alt="#">
                        </div>
                        <div class="counter-box">
                            <h2><span class="odometer" data-count="12">00</span> <span class="plus">+</span>
                            </h2>
                            <p>Years of <br> Experience</p>
                        </div>
                    </div>
                </div>
                <!--End About Two Img-->

                <!--Start About Two Content-->
                <div class="col-xl-6">
                    <div class="about-two__content">
                        <div class="sec-title style2">
                            <div class="sec-title__tagline">
                                <div class="img-box"><img
                                        src="{{ asset('frontend/assets/images/resources/sec-title-img2.png') }}"
                                        alt="#">
                                </div>
                                <h6>Welcome to our garden</h6>
                            </div>
                            <h2 class="sec-title__title">We Provide Gardening <br> Best Services</h2>
                        </div>

                        <div class="about-two__content-text1">
                            <p>There are many variations of passages of available, but the majority have suffered
                                alteration in some form, by injected humour, or randomised words which don’t look
                                even slightly believable.</p>
                        </div>

                        <div class="about-two__content-text2">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-box">
                                        <div class="icon-box">
                                            <span class="icon-planting"></span>
                                        </div>
                                        <div class="title-box">
                                            <h3>Soil Marking & <br> Carbo</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="single-box">
                                        <div class="icon-box">
                                            <span class="icon-planting"></span>
                                        </div>
                                        <div class="title-box">
                                            <h3>Commercial <br> Planting</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-two__content-text3">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which
                                don't look even.</p>
                        </div>

                        <div class="about-two__progress">
                            <div class="about-two__progress-single">
                                <div class="title">
                                    <h4>Landscaping Ground</h4>
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="88%">
                                        <div class="count-text">88%</div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-two__progress-single mb0">
                                <div class="title">
                                    <h4>Soil Re-bulding</h4>
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="60%">
                                        <div class="count-text">60%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End About Two Content-->
            </div>
        </div>
    </section>
    <!--End About Two -->

    <!--Start Slogan One -->
    <section class="slogan-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-one__inner">
                        <div class="shape1"><img
                                src="{{ asset('frontend/assets/images/shapes/slogan-v1-shape1.png') }}"
                                alt="#">
                        </div>
                        <div class="slogan-one__bg"
                            style="background-image: url({{ asset('frontend/assets/images/backgrounds/slogan-v1-bg.png') }});">
                        </div>
                        <div class="content-box">
                            <h2><span>Provides</span> hassle-free backyard <br>
                                transformations</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="contact.html">
                                <span class="txt">Get A Quote</span>
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan One -->


    <!--Start Services Two -->
    <section class="services-two">
        <div class="services-two__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/services-v2-bg.jpg') }});">
        </div>
        <div class="services-two__bg2"
            style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape2.png') }});">
        </div>
        <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                class="float-bob-y" src="{{ asset('frontend/assets/images/shapes/services-v2-shape3.png') }}"
                alt="#"></div>
        <div class="shape2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                class="float-bob-y" src="{{ asset('frontend/assets/images/shapes/services-v2-shape4.png') }}"
                alt="#"></div>
        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title__tagline center">
                    <div class="img-box"><img src="{{ asset('frontend/assets/images/resources/sec-title-img.png') }}"
                            alt="#">
                    </div>
                    <h6>Our Services</h6>
                </div>
                <h2 class="sec-title__title">
                    We Provide Most Services</h2>
            </div>

            <div class="row">
                <!--Start Services Two Single-->
                @foreach ($abouthome as $item)
                    <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="services-two__single">
                            <div class="services-two__single-inner">
                                <div class="services-two__single-img">
                                    <div class="inner">
                                        <img src="{{ $item->picture }}" style="width: 170px; height: 215px;"
                                            alt="#">
                                    </div>
                                    <div class="icon-box">
                                        <span class="{{ $item->button }}"></span>
                                    </div>
                                </div>

                                <div class="services-two__single-content">
                                    <div class="services-two__single-content-bg"
                                        style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape1.png') }});">
                                    </div>
                                    <h2><a href="#">{{ $item->judul }}</a></h2>
                                    <p>{!! $item->deskripsi !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Services Two Single-->


            </div>
        </div>
    </section>
    <!--End Services Two -->


    <!--Start Projects Two -->
    <section class="projects-two">
        <div class="shape1 rotate-me"><img src="{{ asset('frontend/assets/images/shapes/projects-v2-shape1.png') }}"
                alt="#">
        </div>
        <div class="shape2 float-bob-y"><img
                src="{{ asset('frontend/assets/images/shapes/projects-v2-shape2.png') }}" alt="#">
        </div>
        <div class="container">
            <div class="row">

                <!--Start Projects Two Content-->
                <div class="col-xl-6">
                    <div class="projects-two__content">
                        <div class="sec-title style2">
                            <div class="sec-title__tagline">
                                <div class="img-box"><img
                                        src="{{ asset('frontend/assets/images/resources/sec-title-img2.png') }}"
                                        alt="#">
                                </div>
                                <h6>Our Portfolio</h6>
                            </div>
                            <h2 class="sec-title__title">Our Latest Projects</h2>
                        </div>

                        <div class="projects-two__content-text1">
                            <p>There are many variations of passages of available, but the majority
                                have suffered alteration in some form, by injected randomised
                                words which don’t look even slightly believable.</p>
                        </div>
                        <div class="projects-two__content-tab tabs-box">
                            <!--Start Projects Two Tab Button-->
                            <ul class="tab-buttons clearfix">
                                <li data-tab="#investment" class="tab-btn active-btn">Investment</li>
                                <li data-tab="#financial" class="tab-btn">Financial</li>
                                <li data-tab="#landscaping" class="tab-btn">Landscaping</li>
                            </ul>
                            <!--Start Projects Two Tab Button-->


                            <div class="tabs-content">

                                <!--Start Tab-->
                                <div class="tab active-tab" id="investment">
                                    <div class="projects-two__tabs-content">
                                        <div class="projects-two__tabs-content-img">
                                            <div class="border-box"></div>
                                            <img src="{{ asset('frontend/assets/images/project/projects-v2-img1.jpg') }}"
                                                alt="#">
                                            <div class="overlay-content">

                                                <ul>
                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>01</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>02</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>03</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->

                                <!--Start Tab-->
                                <div class="tab" id="financial">
                                    <div class="projects-two__tabs-content">
                                        <div class="projects-two__tabs-content-img">
                                            <div class="border-box"></div>
                                            <img src="{{ asset('frontend/assets/images/project/projects-v2-img1.jpg') }}"
                                                alt="#">
                                            <div class="overlay-content">

                                                <ul>
                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>01</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>02</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>03</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->

                                <!--Start Tab-->
                                <div class="tab" id="landscaping">
                                    <div class="projects-two__tabs-content">
                                        <div class="projects-two__tabs-content-img">
                                            <div class="border-box"></div>
                                            <img src="{{ asset('frontend/assets/images/project/projects-v2-img1.jpg') }}"
                                                alt="#">
                                            <div class="overlay-content">

                                                <ul>
                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>01</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>02</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="inner">
                                                            <div class="text-box">
                                                                <h4>Private Garden</h4>
                                                                <p>Assistant</p>
                                                            </div>

                                                            <div class="number-box">
                                                                <span>03</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Tab-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Projects Two Content-->

                <!--Start Projects Two Counter-->
                <div class="col-xl-6">
                    <div class="projects-two__counter clearfix">
                        <div class="projects-two__counter-img"
                            style="background-image: url({{ asset('frontend/assets/images/project/projects-v2-img2.jpg') }});">
                        </div>

                        <div class="projects-two__counter-box">
                            <ul>
                                <li>
                                    <h2><span class="odometer" data-count="87">00</span> <span
                                            class="plus">+</span>
                                    </h2>
                                    <p>Total apartments</p>
                                    <div class="border-box"></div>
                                </li>

                                <li>
                                    <h2><span class="odometer" data-count="291">00</span> <span
                                            class="plus">+</span>
                                    </h2>
                                    <p>Quality features</p>
                                    <div class="border-box"></div>
                                </li>

                                <li>
                                    <h2><span class="odometer" data-count="9">00</span> <span class="plus">+</span>
                                    </h2>
                                    <p>Award Wins</p>
                                    <div class="border-box"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Projects Two Counter-->

            </div>
        </div>
    </section>
    <!--End Projects Two -->


    <!--Start Team One-->
    <section class="team-one">
        <div class="container">

            <div class="sec-title style2 text-center">
                <div class="sec-title__tagline center">
                    <div class="img-box"><img
                            src="{{ asset('frontend/assets/images/resources/sec-title-img2.png') }}" alt="#">
                    </div>
                    <h6>Our Team</h6>
                </div>
                <h2 class="sec-title__title">
                    Our Expert Members</h2>
            </div>

            <div class="row">
                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="team-one__single">
                        <div class="shape1"><img
                                src="{{ asset('frontend/assets/images/shapes/team-v1-shape2.png') }}" alt="#">
                        </div>
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('frontend/assets/images/team/team-v1-img1.jpg') }}"
                                    alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-box"
                                style="background-image: url({{ asset('frontend/assets/images/shapes/team-v1-shape1.png') }});">
                                <p>Founder</p>
                            </div>
                        </div>

                        <div class="team-one__single-content">
                            <h3><a href="team-details.html">Amanda Tim</a></h3>
                            <div class="rating-box">
                                <ul>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                    <div class="team-one__single">
                        <div class="shape1"><img
                                src="{{ asset('frontend/assets/images/shapes/team-v1-shape2.png') }}" alt="#">
                        </div>
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('frontend/assets/images/team/team-v1-img2.jpg') }}"
                                    alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-box"
                                style="background-image: url({{ asset('frontend/assets/images/shapes/team-v1-shape1.png') }});">
                                <p>Gardenist</p>
                            </div>
                        </div>

                        <div class="team-one__single-content">
                            <h3><a href="team-details.html">David Coper</a></h3>
                            <div class="rating-box">
                                <ul>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="team-one__single">
                        <div class="shape1"><img
                                src="{{ asset('frontend/assets/images/shapes/team-v1-shape2.png') }}" alt="#">
                        </div>
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('frontend/assets/images/team/team-v1-img3.jpg') }}"
                                    alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-box"
                                style="background-image: url({{ asset('frontend/assets/images/shapes/team-v1-shape1.png') }});">
                                <p>Stocker</p>
                            </div>
                        </div>

                        <div class="team-one__single-content">
                            <h3><a href="team-details.html">Reshta Leo</a></h3>
                            <div class="rating-box">
                                <ul>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->

                <!--Start Team One Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                    <div class="team-one__single">
                        <div class="shape1"><img
                                src="{{ asset('frontend/assets/images/shapes/team-v1-shape2.png') }}" alt="#">
                        </div>
                        <div class="team-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('frontend/assets/images/team/team-v1-img4.jpg') }}"
                                    alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-box"
                                style="background-image: url({{ asset('frontend/assets/images/shapes/team-v1-shape1.png') }});">
                                <p>Farmer</p>
                            </div>
                        </div>

                        <div class="team-one__single-content">
                            <h3><a href="team-details.html">Icrim Maha</a></h3>
                            <div class="rating-box">
                                <ul>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                    <li>
                                        <span class="icon-pointed-star"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team One Single-->
            </div>
        </div>
    </section>
    <!--End Team One-->

    <!--Start Brand Two-->
    <section class="brand-one brand-one--two">
        <div class="brand-one--two__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/brand-v2-bg.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                                    "0": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "375": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "575": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 2
                                    },
                                    "768": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 3
                                    },
                                    "992": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 4
                                    },
                                    "1200": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 5
                                    }
                                }}'>
                <div class="swiper-wrapper">


                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img1.png') }}" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img2.png') }}" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img3.png') }}" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img4.png') }}" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img5.png') }}" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img1.png') }}" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img2.png') }}" alt="#">
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/assets/images/brand/brand-v2-img3.png') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand Two -->

    <!--Start Work Process Two -->
    <section class="work-process-two">
        <div class="shape1"><img src="{{ asset('frontend/assets/images/shapes/work-process-v2-shape1.jpg') }}"
                alt="#"></div>
        <div class="shape2"><img src="{{ asset('frontend/assets/images/shapes/work-process-v2-shape2.png') }}"
                alt="#"></div>
        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title__tagline center">
                    <div class="img-box"><img
                            src="{{ asset('frontend/assets/images/resources/sec-title-img2.png') }}" alt="#">
                    </div>
                    <h6> Work Process</h6>
                </div>
                <h2 class="sec-title__title">
                    Our Easy Work Process</h2>
            </div>

            <div class="row filter-layout masonary-layout">
                <!--Start Work Process Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <div class="work-process-two__single">
                        <div class="work-process-two__single-icon">
                            <div class="inner">
                                <span class="icon-seeding"></span>
                            </div>
                            <div class="count-box"></div>
                        </div>

                        <div class="work-process-two__single-content text-center">
                            <h3><a href="arbor-management.html">Ready To Plant</a></h3>
                            <p>Lorem Ipsum is simply to free <br> dumy text the pricing</p>
                        </div>
                    </div>
                </div>
                <!--End Work Process Two Single-->

                <!--Start Work Process Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="work-process-two__single style2 mb50">
                        <div class="work-process-two__single-icon">
                            <div class="inner">
                                <span class="icon-gardener"></span>
                            </div>
                            <div class="count-box"></div>
                        </div>

                        <div class="work-process-two__single-content text-center">
                            <h3><a href="arbor-management.html">Soil Fil Tering</a></h3>
                            <p>Lorem Ipsum is simply to free <br> dumy text the pricing</p>
                        </div>
                    </div>
                </div>
                <!--End Work Process Two Single-->

                <!--Start Work Process Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <div class="work-process-two__single mb25">
                        <div class="work-process-two__single-icon">
                            <div class="inner">
                                <span class="icon-agriculture"></span>
                            </div>
                            <div class="count-box"></div>
                        </div>

                        <div class="work-process-two__single-content text-center">
                            <h3><a href="arbor-management.html">Garden Design</a></h3>
                            <p>Lorem Ipsum is simply to free <br> dumy text the pricing</p>
                        </div>
                    </div>
                </div>
                <!--End Work Process Two Single-->

                <!--Start Work Process Two Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="work-process-two__single style2">
                        <div class="work-process-two__single-icon">
                            <div class="inner">
                                <span class="icon-gardening"></span>
                            </div>
                            <div class="count-box"></div>
                        </div>

                        <div class="work-process-two__single-content text-center">
                            <h3><a href="arbor-management.html">Using Soil Medic</a></h3>
                            <p>Lorem Ipsum is simply to free <br> dumy text the pricing</p>
                        </div>
                    </div>
                </div>
                <!--End Work Process Two Single-->
            </div>
        </div>
    </section>
    <!--End Work Process Two -->


    <!--Start Pricing Table One-->
    <section class="pricing-table-one">
        <div class="shape1 float-bob-y"><img
                src="{{ asset('frontend/assets/images/shapes/pricing-table-v1-shape1.png') }}" alt="#">
        </div>
        <div class="shape2 float-bob-y"><img
                src="{{ asset('frontend/assets/images/shapes/pricing-table-v1-shape2.png') }}" alt="#">
        </div>
        <div class="pricing-table-one__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/pricing-v1-bg.jpg') }});">
        </div>
        <div class="container">

            <div class="sec-title style2">
                <div class="sec-title__tagline">
                    <div class="img-box"><img src="{{ asset('frontend/assets/images/resources/sec-title-img.png') }}"
                            alt="#">
                    </div>
                    <h6>Pricing Table</h6>
                </div>
                <h2 class="sec-title__title">Our Latest Packages</h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="pricing-table-one__inner">

                        <div class="owl-carousel owl-theme thm-owl__carousel pricing-table-one__carousel"
                            data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 1
                                        },
                                        "1200": {
                                            "items": 2
                                        }
                                    }
                                }'>

                            <!--Start Pricing Table One Single-->
                            <div class="pricing-table-one__single">
                                <div class="pricing-table-one__single-left text-center">
                                    <div class="top-content">
                                        <div class="title">
                                            <h3>Best Choice</h3>
                                        </div>
                                        <div class="text-box">
                                            <h2>Growing Business</h2>
                                            <p>2-6 Employes</p>
                                        </div>
                                    </div>

                                    <div class="img-box"><img
                                            src="{{ asset('frontend/assets/images/resources/pricing-table-v1-img1.png') }}"
                                            alt="#">
                                    </div>

                                    <div class="bottom-content">
                                        <h2>$ <span>199</span> /Month</h2>
                                    </div>
                                </div>

                                <div class="pricing-table-one__single-right">
                                    <ul>
                                        <li>
                                            <p>Gardens Service</p>
                                        </li>
                                        <li>
                                            <p>Forest Planning</p>
                                        </li>
                                        <li>
                                            <p>Gardens Party</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                    </ul>

                                    <div class="pricing-table-one__single-right-btn">
                                        <a href="#">Get It Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Pricing Table One Single-->

                            <!--Start Pricing Table One Single-->
                            <div class="pricing-table-one__single">
                                <div class="pricing-table-one__single-left text-center">
                                    <div class="top-content">
                                        <div class="title">
                                            <h3>Best Choice</h3>
                                        </div>
                                        <div class="text-box">
                                            <h2>Large Business</h2>
                                            <p>8-19 Employes</p>
                                        </div>
                                    </div>

                                    <div class="img-box"><img
                                            src="{{ asset('frontend/assets/images/resources/pricing-table-v1-img1.png') }}"
                                            alt="#">
                                    </div>

                                    <div class="bottom-content">
                                        <h2>$ <span>399</span> /Month</h2>
                                    </div>
                                </div>

                                <div class="pricing-table-one__single-right">
                                    <ul>
                                        <li>
                                            <p>Gardens Service</p>
                                        </li>
                                        <li>
                                            <p>Forest Planning</p>
                                        </li>
                                        <li>
                                            <p>Gardens Party</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                    </ul>

                                    <div class="pricing-table-one__single-right-btn">
                                        <a href="#">Get It Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Pricing Table One Single-->

                            <!--Start Pricing Table One Single-->
                            <div class="pricing-table-one__single">
                                <div class="pricing-table-one__single-left text-center">
                                    <div class="top-content">
                                        <div class="title">
                                            <h3>Best Choice</h3>
                                        </div>
                                        <div class="text-box">
                                            <h2>Growing Business</h2>
                                            <p>2-6 Employes</p>
                                        </div>
                                    </div>

                                    <div class="img-box"><img
                                            src="{{ asset('frontend/assets/images/resources/pricing-table-v1-img1.png') }}"
                                            alt="#">
                                    </div>

                                    <div class="bottom-content">
                                        <h2>$ <span>199</span> /Month</h2>
                                    </div>
                                </div>

                                <div class="pricing-table-one__single-right">
                                    <ul>
                                        <li>
                                            <p>Gardens Service</p>
                                        </li>
                                        <li>
                                            <p>Forest Planning</p>
                                        </li>
                                        <li>
                                            <p>Gardens Party</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                    </ul>

                                    <div class="pricing-table-one__single-right-btn">
                                        <a href="#">Get It Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Pricing Table One Single-->

                            <!--Start Pricing Table One Single-->
                            <div class="pricing-table-one__single">
                                <div class="pricing-table-one__single-left text-center">
                                    <div class="top-content">
                                        <div class="title">
                                            <h3>Best Choice</h3>
                                        </div>
                                        <div class="text-box">
                                            <h2>Large Business</h2>
                                            <p>8-19 Employes</p>
                                        </div>
                                    </div>

                                    <div class="img-box"><img
                                            src="{{ asset('frontend/assets/images/resources/pricing-table-v1-img1.png') }}"
                                            alt="#">
                                    </div>

                                    <div class="bottom-content">
                                        <h2>$ <span>399</span> /Month</h2>
                                    </div>
                                </div>

                                <div class="pricing-table-one__single-right">
                                    <ul>
                                        <li>
                                            <p>Gardens Service</p>
                                        </li>
                                        <li>
                                            <p>Forest Planning</p>
                                        </li>
                                        <li>
                                            <p>Gardens Party</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                        <li>
                                            <p>Exciting Feature</p>
                                        </li>
                                    </ul>

                                    <div class="pricing-table-one__single-right-btn">
                                        <a href="#">Get It Now</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Pricing Table One Single-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Table One-->

    <!--Start Testimonilas Two-->
    <section class="testimonilas-two">
        <div class="testimonilas-two__pattern"
            style="background-image: url({{ asset('frontend/assets/images/pattern/testimonilas-v2-pattern.png') }});">
        </div>
        <div class="testimonilas-two__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/testimonilas-v2-bg.jpg') }});">
        </div>
        <div class="shape1 float-bob-y"><img
                src="{{ asset('frontend/assets/images/shapes/testimonilas-v2-shape1.png') }}" alt="#">
        </div>
        <div class="container">

            <div class="sec-title style2">
                <div class="sec-title__tagline">
                    <div class="img-box"><img
                            src="{{ asset('frontend/assets/images/resources/sec-title-img2.png') }}" alt="#">
                    </div>
                    <h6>Our Testimonilas
                    </h6>
                </div>
                <h2 class="sec-title__title">
                    People Say About Us</h2>
                <p class="text">There are many variations of passages of available, but the majority <br>
                    have suffered alteration in some form by injected randomised.</p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonilas-two__inner">

                        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-two__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 30,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2
                                    }
                                }
                            }'>


                            <!--Start Testimonilas Two Single-->
                            <div class="testimonilas-two__single">
                                <div class="testimonilas-two__single-top">
                                    <p>“ There are many variations of passages of available at
                                        but the majority have suffered alteration in some atlok
                                        form, by injected randomised words which koiu layio
                                        don’t look even slightly believable avialabalo ore a do
                                        psum is a simply to free dumy to text the pricing.”</p>
                                </div>

                                <div class="testimonilas-two__single-bottom">
                                    <div class="left-box">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-v2-img1.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-quote-1"></span>
                                            </div>
                                        </div>

                                        <div class="text-box">
                                            <h3>Robert Smith</h3>
                                            <p>Ceo & Founder</p>
                                        </div>
                                    </div>

                                    <div class="right-box">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>5.0 Out of 3</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonilas Two Single-->

                            <!--Start Testimonilas Two Single-->
                            <div class="testimonilas-two__single">
                                <div class="testimonilas-two__single-top">
                                    <p>“ There are many variations of passages of available at
                                        but the majority have suffered alteration in some atlok
                                        form, by injected randomised words which koiu layio
                                        don’t look even slightly believable avialabalo ore a do
                                        psum is a simply to free dumy to text the pricing.”</p>
                                </div>

                                <div class="testimonilas-two__single-bottom">
                                    <div class="left-box">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-v2-img2.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-quote-1"></span>
                                            </div>
                                        </div>

                                        <div class="text-box">
                                            <h3>Robert Smith</h3>
                                            <p>Ceo & Founder</p>
                                        </div>
                                    </div>

                                    <div class="right-box">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>5.0 Out of 3</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonilas Two Single-->


                            <!--Start Testimonilas Two Single-->
                            <div class="testimonilas-two__single">
                                <div class="testimonilas-two__single-top">
                                    <p>“ There are many variations of passages of available at
                                        but the majority have suffered alteration in some atlok
                                        form, by injected randomised words which koiu layio
                                        don’t look even slightly believable avialabalo ore a do
                                        psum is a simply to free dumy to text the pricing.”</p>
                                </div>

                                <div class="testimonilas-two__single-bottom">
                                    <div class="left-box">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-v2-img1.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-quote-1"></span>
                                            </div>
                                        </div>

                                        <div class="text-box">
                                            <h3>Robert Smith</h3>
                                            <p>Ceo & Founder</p>
                                        </div>
                                    </div>

                                    <div class="right-box">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>5.0 Out of 3</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonilas Two Single-->


                            <!--Start Testimonilas Two Single-->
                            <div class="testimonilas-two__single">
                                <div class="testimonilas-two__single-top">
                                    <p>“ There are many variations of passages of available at
                                        but the majority have suffered alteration in some atlok
                                        form, by injected randomised words which koiu layio
                                        don’t look even slightly believable avialabalo ore a do
                                        psum is a simply to free dumy to text the pricing.”</p>
                                </div>

                                <div class="testimonilas-two__single-bottom">
                                    <div class="left-box">
                                        <div class="img-box">
                                            <div class="inner">
                                                <img src="{{ asset('frontend/assets/images/testimonial/testimonial-v2-img2.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="icon-box">
                                                <span class="icon-quote-1"></span>
                                            </div>
                                        </div>

                                        <div class="text-box">
                                            <h3>Robert Smith</h3>
                                            <p>Ceo & Founder</p>
                                        </div>
                                    </div>

                                    <div class="right-box">
                                        <div class="rating-box">
                                            <ul>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                                <li>
                                                    <span class="icon-pointed-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>5.0 Out of 3</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonilas Two Single-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonilas Two-->

    <!--Start Blog Two-->
    <section class="blog-two">
        <div class="container">
            <div class="sec-title style2 text-center">
                <div class="sec-title__tagline center">
                    <div class="img-box"><img
                            src="{{ asset('frontend/assets/images/resources/sec-title-img2.png') }}" alt="#">
                    </div>
                    <h6>Blog Post</h6>
                </div>
                <h2 class="sec-title__title">
                    Latest News & Updates</h2>
            </div>

            <div class="row">
                <!--Start Blog Two Single-->
                @foreach ($artikel as $item)
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="blog-two__single">
                            <div class="blog-two__single-img">
                                <img src="{{ $item->picture }}" alt="#">
                            </div>

                            <div class="blog-two__single-content">
                                <div class="date-box">
                                    <h3>{{ $item->created_at->format('d') }}</h3>
                                </div>
                                <div class="inner">
                                    <h2><a href="{{ route('artikeldetail', $item->slug) }}">{{ $item->title }}</a>
                                    </h2>
                                    <div class="tagline">
                                        <span>news</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->

                <!--End Blog Two Single-->
            </div>
        </div>
    </section>
    <!--End Blog Two-->
</x-home>
