@extends('layouts.layoutOne')

@section('title')
Contact Us
@endsection

@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/home/about-bread.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact Us</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


                <!--Get Insurance Four Start-->
                <section class="get-insurance-four">
                    <div class="get-insurance-four__shape-1"
                        style="background-image: url(assets/images/shape.webp);">
                    </div>
                    <div class="get-insurance-four__shape-2 float-bob-y">
                        <img src="assets/images/update-10-02-2023/shapes/get-insurance-four-shape-2.png" alt="">
                    </div>
                    <div class="container">
                        <div class="section-title-three text-left">
                            <div class="section-title-three__sub-title-box">
                                <p class="section-title-three__sub-title">Our Offices</p>
                                <div class="section-title-three__shape"></div>
                            </div>
                            <h2 class="section-title-three__title">Visit Our Offices</h2>
                        </div>
                        <div class="get-insurance-four__main-tab-box tabs-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#head-office" class="tab-btn active-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/united-kingdom.svg" alt="Head Office">
                                                </div>
                                                <div class="text-box">
                                                    <p>Head Office</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#oman" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/oman.svg" alt="Oman">
                                                </div>
                                                <div class="text-box">
                                                    <p>Oman</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#ethiopia" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/ethiopia.svg" alt="Ethiopia">
                                                </div>
                                                <div class="text-box">
                                                    <p>Ethiopia</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#kenya" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/kenya.svg" alt="Kenya">
                                                </div>
                                                <div class="text-box">
                                                    <p>Kenya</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#afghanistan" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/afghanistan.svg" alt="Afghanistan">
                                                </div>
                                                <div class="text-box">
                                                    <p>Afghanistan</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-tab="#singapore" class="tab-btn">
                                            <div class="content-box">
                                                <div class="icon-box">
                                                    <img src="assets/images/country/singapore.svg" alt="Singapore" width="55" height="55">
                                                </div>
                                                <div class="text-box">
                                                    <p>Singapore</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6">
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="head-office">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Head Office</p>
                                                            <h5>5th Floor, 167 - 169 Great Portland St, London W1W 5PF, United Kingdom</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeakintl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="oman">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Oman</p>
                                                            <h5>Al Harm, Barka 320, Oman</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeakintl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="ethiopia">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Ethiopia</p>
                                                            <h5>AG, Grace plaza, Addis Ababa, Ethiopia</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeakintl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="kenya">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Kenya</p>
                                                            <h5>Crescent Business Centre, The Crescent, Nairobi, Kenya</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeakintl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="afghanistan">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Afghanistan</p>
                                                            <h5>3rd Street, Ansari Square, Rahmat Tower, Shahr-e-Naw, Kabul Afghanistan</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeakintl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="singapore">
                                            <div class="get-insurance-four__main-content">
                                                <div class="get-insurance-four__main-content-left">
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Singapore</p>
                                                            <h5>68 CIRCULAR ROAD, #02-01, SINGAPORE 049422</h5>
                                                        </div>
                                                    </div>
                                                    <div class="get-insurance-four__call">
                                                        <div class="get-insurance-four__call-icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="get-insurance-four__call-content">
                                                            <p>Mail us</p>
                                                            <h5>info@broadpeakintl.com</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Get Insurance Four End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__left">
                            <div class="section-title text-center">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Contact us</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h2 class="section-title__title">Get in touch with us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <form action="{{ route('contact.submit') }}" method="post" class="comment-one__form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name *" name="name" value="{{ old('name') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address *" name="email" value="{{ old('email') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Company Name" name="company" value="{{ old('company') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message *" required>{{ old('message') }}</textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

               


@endsection