<x-home>

    <!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/page-header-bg.jpg') }})">
        </div>
        <div class="shape1">
            <img src="{{ asset('frontend/assets/images/shapes/page-header-shape1.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="page-header__inner">
                <h2>Our Services</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->

    <!--Start Features One -->
    <section class="features-one">
        <div class="features-one__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/features-v1-bg.png') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-one__inner">
                        <div class="owl-carousel owl-theme thm-owl__carousel features-one__carousel"
                            data-owl-options='{
                                    "loop": true,
                                    "autoplay": true,
                                    "margin": 30,
                                    "nav": false,
                                    "dots": false,
                                    "smartSpeed": 500,
                                    "autoplayTimeout": 10000,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                    "responsive": {
                                            "0": {
                                                "items": 1
                                            },
                                            "768": {
                                                "items": 2
                                            },
                                            "992": {
                                                "items": 3
                                            },
                                            "1200": {
                                                "items": 4
                                            }
                                        }
                                    }'>


                            <!--Start Features One Single-->
                            <div class="features-one__single text-center">
                                <div class="features-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-lawn-mower"></span>
                                    </div>

                                    <div class="text-box">
                                        <h2><a href="#">Maintenance</a></h2>
                                        <p>We’ve been using tech</p>
                                    </div>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <!--End Features One Single-->

                            <!--Start Features One Single-->
                            <div class="features-one__single text-center">
                                <div class="features-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-shovels"></span>
                                    </div>

                                    <div class="text-box">
                                        <h2><a href="#">URBAN</a></h2>
                                        <p>We’ve been using tech</p>
                                    </div>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <!--End Features One Single-->

                            <!--Start Features One Single-->
                            <div class="features-one__single text-center">
                                <div class="features-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-agriculture"></span>
                                    </div>

                                    <div class="text-box">
                                        <h2><a href="#">Landscaping</a></h2>
                                        <p>We’ve been using tech</p>
                                    </div>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <!--End Features One Single-->

                            <!--Start Features One Single-->
                            <div class="features-one__single text-center">
                                <div class="features-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-gardening-1"></span>
                                    </div>

                                    <div class="text-box">
                                        <h2><a href="#">Events</a></h2>
                                        <p>We’ve been using tech</p>
                                    </div>
                                </div>
                                <div class="count-box"></div>
                            </div>
                            <!--End Features One Single-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features One -->

    <!--Start Services Two -->
    <section class="services-two">
        <div class="services-two__bg"
            style="background-image: url({{ asset('frontend/assets/images/backgrounds/services-v2-bg.jpg') }});">
        </div>
        <div class="services-two__bg2"
            style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape2.png') }});">
        </div>
        <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"><img class="float-bob-y"
                src="{{ asset('frontend/assets/images/shapes/services-v2-shape3.png') }}" alt="#"></div>
        <div class="shape2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img class="float-bob-y"
                src="{{ asset('frontend/assets/images/shapes/services-v2-shape4.png') }}" alt="#"></div>
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
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-inner">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('frontend/assets/images/services/services-v2-img1.jpg') }}"
                                        alt="#">
                                </div>
                                <div class="icon-box">
                                    <span class="icon-shovels"></span>
                                </div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-bg"
                                    style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape1.png') }});">
                                </div>
                                <h2><a href="arbor-management.html">Retaining Wall <br> Installation</a></h2>
                                <p>The laying out and care
                                    plot ground devoted
                                    partially or wholly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Two Single-->

                <!--Start Services Two Single-->
                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-inner">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('frontend/assets/images/services/services-v2-img2.jpg') }}"
                                        alt="#">
                                </div>
                                <div class="icon-box">
                                    <span class="icon-lawn-mower"></span>
                                </div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-bg"
                                    style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape1.png') }});">
                                </div>
                                <h2><a href="arbor-management.html">Pests and Weeds <br> Control</a></h2>
                                <p>The laying out and care
                                    plot ground devoted
                                    partially or wholly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Two Single-->

                <!--Start Services Two Single-->
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-inner">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('frontend/assets/images/services/services-v2-img3.jpg') }}"
                                        alt="#">
                                </div>
                                <div class="icon-box">
                                    <span class="icon-agriculture"></span>
                                </div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-bg"
                                    style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape1.png') }});">
                                </div>
                                <h2><a href="arbor-management.html">Soil Marking & <br> Carbo</a></h2>
                                <p>The laying out and care
                                    plot ground devoted
                                    partially or wholly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Two Single-->

                <!--Start Services Two Single-->
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-inner">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('frontend/assets/images/services/services-v2-img4.jpg') }}"
                                        alt="#">
                                </div>
                                <div class="icon-box">
                                    <span class="icon-gardening-1"></span>
                                </div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-bg"
                                    style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape1.png') }});">
                                </div>
                                <h2><a href="arbor-management.html">Soil Marking & <br> Solutions</a></h2>
                                <p>The laying out and care
                                    plot ground devoted
                                    partially or wholly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Two Single-->

                <!--Start Services Two Single-->
                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-inner">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('frontend/assets/images/services/services-v2-img5.jpg') }}"
                                        alt="#">
                                </div>
                                <div class="icon-box">
                                    <span class="icon-pruning-shears"></span>
                                </div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-bg"
                                    style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape1.png') }});">
                                </div>
                                <h2><a href="arbor-management.html">Yard & Garden <br> Decor</a></h2>
                                <p>The laying out and care
                                    plot ground devoted
                                    partially or wholly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Two Single-->

                <!--Start Services Two Single-->
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="services-two__single">
                        <div class="services-two__single-inner">
                            <div class="services-two__single-img">
                                <div class="inner">
                                    <img src="{{ asset('frontend/assets/images/services/services-v2-img6.jpg') }}"
                                        alt="#">
                                </div>
                                <div class="icon-box">
                                    <span class="icon-planting"></span>
                                </div>
                            </div>

                            <div class="services-two__single-content">
                                <div class="services-two__single-content-bg"
                                    style="background-image: url({{ asset('frontend/assets/images/shapes/services-v2-shape1.png') }});">
                                </div>
                                <h2><a href="arbor-management.html">Plant Stands & <br> Trays</a></h2>
                                <p>The laying out and care
                                    plot ground devoted
                                    partially or wholly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Two Single-->
            </div>
        </div>
    </section>
    <!--End Services Two -->

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

    <!--Start Blog Two-->
    <section class="blog-two blog-two--services">
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
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-img">
                            <img src="{{ asset('frontend/assets/images/blog/blog-v2-img1.jpg') }}" alt="#">
                        </div>

                        <div class="blog-two__single-content">
                            <div class="date-box">
                                <h3>27 <br> <span>Nov</span> </h3>
                            </div>
                            <div class="inner">
                                <h2><a href="blog-details.html">Here are the 3 advantages of <br>
                                        landscape maintenance</a></h2>
                                <div class="tagline">
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->

                <!--Start Blog Two Single-->
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <div class="blog-two__single">
                        <div class="blog-two__single-img">
                            <img src="{{ asset('frontend/assets/images/blog/blog-v2-img2.jpg') }}" alt="#">
                        </div>

                        <div class="blog-two__single-content">
                            <div class="date-box">
                                <h3>02 <br> <span>Oct</span> </h3>
                            </div>
                            <div class="inner">
                                <h2><a href="blog-details.html">Complete solution for your land <br>
                                        design and garden design</a></h2>
                                <div class="tagline">
                                    <span>Branding</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Blog Two Single-->
            </div>
        </div>
    </section>
    <!--End Blog Two-->
</x-home>
