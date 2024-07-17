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
                <h2>Contact</h2>
                <ul class="thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->


    <!--Start Contact Page -->
    <section class="contact-page">
        <div class="container">
            <div class="row">

                <!--Start Contact One Form Contact-->
                <div class="col-xl-8">
                    <div class="contact-one__form contact-one__form--contact">
                        <div class="sec-title">
                            <div class="sec-title__tagline">
                                <h6>Call to Action</h6>
                                <span class="right"></span>
                            </div>
                            <h2 class="sec-title__title">You Can Easily Book Our <br> Appointment</h2>
                        </div>


                        <form id="contact-form" class="default-form2 contact-form-validated" method="post"
                            action="{{ route('contact.store') }}" novalidate="novalidate">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" value="" placeholder="Your Name"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="email" name="email" value="" placeholder="Email Address"
                                            required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Phone" name="telephone">
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-btn">
                                        <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">Book Now</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Contact One Form Contact-->

                <!--Start Contact Page Img-->
                <div class="col-xl-4">
                    <div class="contact-page__img">
                        <img src="{{ asset('frontend/assets/images/resources/contact-page-img.jpg') }}" alt="#">
                    </div>
                </div>
                <!--End Contact Page Img-->

            </div>
        </div>
    </section>
    <!--End Contact Page -->


    <!--Start Contact Page Bottom-->
    <section class="contact-page-bottom">
        <div class="container">
            <div class="row">
                <!--Start Contact Page Bottom Map-->
                <div class="col-xl-6">
                    <div class="contact-page-bottom-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                            class="contact-page__google-map" allowfullscreen></iframe>
                    </div>
                </div>
                <!--End Contact Page Bottom Map-->

                <!--Start Contact Page Bottom Content-->
                <div class="col-xl-6">
                    <div class="contact-page-bottom__content">
                        <div class="sec-title">
                            <div class="sec-title__tagline">
                                <h6>Contact Us</h6>
                                <span class="right"></span>
                            </div>
                            <h2 class="sec-title__title">Get In Touch</h2>
                        </div>
                        <div class="contact-page-bottom__content-img">
                            <img src="{{ asset('frontend/assets/images/resources/contact-page-bottom-img.jpg') }}"
                                alt="#">

                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-phone-call-1"></span>
                                            </div>

                                            <div class="content-box">
                                                <p> Tel : <a href="tel:12345615523">+ 123-4561-5523</a></p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-message"></span>
                                            </div>

                                            <div class="content-box">
                                                <p> Email : <a href="mailto:yourmail@email.com">needhelp@company.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon-placeholder"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Add : Flat 20, Reynolds Neck</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Contact Page Bottom Content-->
            </div>
        </div>
    </section>
    <!--End Contact Page Bottom-->
</x-home>
