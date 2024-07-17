<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gardnma || Responsive HTML 5 Template</title>
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('frontend/assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Gardnma HTML 5 Template " />

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nice-select/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/thm-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/slick-slider/slick.css') }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/assets/vendors/language-switcher/polyglot-language-switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/reey-font/stylesheet.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/color-1.css') }}" />

</head>


<body>

    <!-- Start Preloader -->
    {{-- <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="a" class="letters-loading">
                            a
                        </span>
                        <span data-text-preloader="r" class="letters-loading">
                            r
                        </span>
                        <span data-text-preloader="k" class="letters-loading">
                            k
                        </span>
                        <span data-text-preloader="w" class="letters-loading">
                            w
                        </span>
                        <span data-text-preloader="e" class="letters-loading">
                            e
                        </span>
                        <span data-text-preloader="b" class="letters-loading">
                            b
                        </span>
                        <span data-text-preloader="s" class="letters-loading">
                            s
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Preloader -->

    @php
        $alamat = \App\Models\Alamat::all();

    @endphp

    <div class="page-wrapper">
        <!--Start Main Header Two-->
        <header class="main-header main-header-one main-header-two">
            <!--Start Main Header Two Top-->
            @foreach ($alamat as $item)
                <div class="main-header-two__top">
                    <div class="auto-container">
                        <div class="main-header-two__top-inner">
                            <div class="main-header-two__top-left">
                                <ul class="main-header-two__top-contact-info">
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-back-in-time"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Jam Kerja</p>
                                                <h6>{{ $item->jam }}</h6>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-phone-call-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Telepon</p>
                                                <h6><a href="tel:{{ $item->telepon }}">{{ $item->telepon }}</a></h6>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-message"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Send email </p>
                                                <h6><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></h6>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-placeholder"></span>
                                            </div>
                                            <div class="text-box">
                                                <p>Alamat</p>
                                                <h6>{{ $item->alamat }}</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="main-header-two__top-social-links">
                                <div class="title-box">
                                    <h4>Follow Now</h4>
                                </div>

                                <ul class="social-links">
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--End Main Header Two Top-->

            <!--Start Main Header One Bottom-->
            <div class="main-header-one__bottom">
                <div class="main-header-two__bottom-bg"
                    style="background-image: url({{ asset('frontend/assets/images/shapes/main-header-v2-bg.png') }});">
                </div>
                <div class="main-header-one__bottom-inner">
                    <nav class="main-menu main-menu-one">
                        <div class="main-menu__wrapper clearfix">
                            <div class="auto-container">
                                <div class="main-menu__wrapper-inner">
                                    <div class="main-header-one__bottom-left">
                                        <div class="logo-box-one">
                                            <a href="{{ route('home') }}">
                                                <img src="{{ asset('frontend/assets/images/resources/logo-2.png') }}"
                                                    alt="Awesome Logo" title="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="main-header-one__bottom-middle">
                                        <div class="main-menu-box">
                                            <a href="#" class="mobile-nav__toggler">
                                                <i class="fa fa-bars"></i>
                                            </a>

                                            <ul class="main-menu__list">
                                                <li @if (Route::current()->getName() == 'home') class="dropdown current" @endif>
                                                    <a href="{{ route('home') }}">Beranda <span
                                                            class="line"></span></a>

                                                </li>

                                                <li @if (Route::current()->getName() == 'about') class="dropdown current" @endif>
                                                    <a href="{{ route('about') }}">Tentang Kami <span
                                                            class="line"></span></a>
                                                </li>

                                                <li @if (Route::current()->getName() == 'produk') class="dropdown current" @endif>
                                                    <a href="{{ route('produk') }}">Produk Kami <span
                                                            class="line"></span></a>

                                                </li>



                                                <li @if (Route::current()->getName() == 'artikel') class="dropdown current" @endif>
                                                    <a href="{{ route('artikel') }}">Artikel <span
                                                            class="line"></span></a>

                                                </li>
                                                <li @if (Route::current()->getName() == 'contact.create') class="dropdown current" @endif>
                                                    <a href="{{ route('contact.create') }}">Hubungi Kami <span
                                                            class="line"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="main-header-one__bottom-right">
                                        <div class="header-search-box">
                                            <a href="#"
                                                class="main-menu__search search-toggler icon-magnifying-glass">
                                            </a>
                                        </div>
                                        <div class="main-header-one__bottom-right-btn">
                                            <a href="contact.html">Book Appointment</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!--End Main Header Two Bottom-->
        </header>
        <!--End Main Header Two-->

        <div class="stricky-header stricky-header--two stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        {{ $slot }}

        <!--Start Footer One -->
        <footer class="footer-one">
            <div class="footer-one__bg"
                style="background-image: url({{ asset('frontend/assets/images/shapes/footer-v1-shape3.png') }});">
            </div>
            <div class="shape1 float-bob-y"><img
                    src="{{ asset('frontend/assets/images/shapes/footer-v1-shape1.png') }}" alt="#">
            </div>
            <div class="shape2 float-bob-y"><img
                    src="{{ asset('frontend/assets/images/shapes/footer-v1-shape2.png') }}" alt="#">
            </div>
            <!--Start Footer-->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!--Start Footer Widget Single-->
                        <div class="col-xl-5 col-lg-5 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-widget__single">
                                <div class="footer-widget__single-about">
                                    <div class="logo-box">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/images/resources/footer-logo.png') }}"
                                                alt="#"></a>
                                    </div>

                                    <form class="footer-widget__subscribe-box">
                                        <div class="title-box">
                                            <h5>Subsrcibe for Latest Articles and Resources</h5>
                                        </div>
                                        <div class="footer-widget__subscribe-input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                            <button type="submit" class="footer-widget__subscribe-btn">
                                                <span>Go</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End Footer Widget Single-->

                        <!--Start Footer One Right-->
                        <div class="col-xl-7 col-lg-7">
                            <div class="footer-one__right">
                                <div class="row">
                                    <!--Start Footer One Right Single-->
                                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                                        <div class="footer-one__right-single mb50">
                                            <div class="title">
                                                <h2>Our Services</h2>
                                            </div>
                                            <div class="footer-one__right-single-services">
                                                <ul class="footer-one__right-single-list">
                                                    <li><a href="services.html">Lawn Moving</a></li>
                                                    <li><a href="services.html">Hedge Cutting</a></li>
                                                    <li><a href="services.html">Flower Planting</a></li>
                                                    <li><a href="services.html">Working Process</a></li>
                                                    <li><a href="services.html">Garden Restoration</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer One Right Single-->

                                    <!--Start Footer One Right Single-->
                                    <div class="col-xl-3 col-lg-3 wow animated fadeInUp" data-wow-delay="0.3s">
                                        <div class="footer-one__right-single mb50">
                                            <div class="title">
                                                <h2>Links</h2>
                                            </div>
                                            <div class="footer-one__right-single-links">
                                                <ul class="footer-one__right-single-list">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="#">Our History</a></li>
                                                    <li><a href="#">Testimonials</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer One Right Single-->
                                    @foreach ($alamat as $item)
                                        <!--Start Footer One Right Single-->
                                        <div class="col-xl-5 col-lg-5 wow animated fadeInUp" data-wow-delay="0.4s">
                                            <div class="footer-one__right-single">
                                                <div class="title">
                                                    <h2>Contact</h2>
                                                </div>
                                                <div class="footer-one__right-single-contact">
                                                    <p><a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                                                        <br>
                                                        {{ $item->alamat }}
                                                    </p>
                                                    <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!--End Footer One Right Single-->
                                </div>

                                <div class="footer-one__right-bottom wow animated fadeInUp" data-wow-delay="0.1s">
                                    <ul class="social-links">
                                        <li> <a href="#"><span class="icon-twitter"></span></a> </li>
                                        <li> <a href="#"><span class="icon-facebook"></span></a> </li>
                                        <li> <a href="#"><span class="icon-pinterest"></span></a> </li>
                                        <li> <a href="#"><span class="icon-instagram"></span></a> </li>
                                    </ul>

                                    <div class="footer-one__right-bottom-contact">
                                        <div class="icon-box">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        @foreach ($alamat as $item)
                                            <div class="content-box">
                                                <p>Call Anytime</p>
                                                <h4><a href="tel:{{ $item->telepon }}">{{ $item->telepon }}</a></h4>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Footer One Right-->
                    </div>
                </div>
            </div>
            <!--End Footer-->


            <div class="footer-one__bottom">
                <div class="container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p>Copyright © 2023 All Rights Reserved.</p>
                        </div>

                        <ul class="footer-one__bottom-menu">
                            <li><a href="about.html">Terms & Condition</a></li>
                            <li><a href="about.html">Privacy </a></li>
                            <li><a href="about.html">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
        <!--End Footer One-->

    </div>
    <!-- /.page-wrapper -->
    @foreach ($alamat as $item)
        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler">
                    <i class="icon-plus"></i>
                </span>
                <div class="logo-box">
                    <a href="{{ route('home') }}" aria-label="logo image">
                        <img src="{{ asset('frontend/assets/images/resources/mobile-nav-logo.png') }}"
                            alt="" />
                    </a>
                </div>
                <div class="mobile-nav__container"></div>
                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:{{ $item->telepon }}">{{ $item->telepon }}</a>
                    </li>
                </ul>
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>

            </div>
        </div>
    @endforeach
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="icon-down-arrow"></i>
    </a>

    <script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/typed-2.0.11/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/slick-slider/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/progress-bar/knob.js') }}"></script>

    <!-- Template js -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.features-one__carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>

</body>

</html>
