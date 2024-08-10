@extends('layout.app')
@section('title', 'About Us')
@section('content')

    <div class="tp-page-title-area pt-180 pb-185 position-relative fix"
        data-background="{{ asset('assets/img/breadcrumb-bg-1.png') }}">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title">About <span>Us</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>
                                            About us
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="tp-about-area position-relative pt-120 fix">
        <div class="tp-about-shape">
            <img src="{{ asset('assets/img/about/about-shape-1.jpg') }}" class="img-fluid" alt="img not found">
        </div>

        <div class="container">
            <div class="row justify-content-xl-between justify-content-md-center">
                <div class="col-xl-5 col-12">
                    <div class="tp-about-img z-index wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/about/about.jpg') }}" alt="img not found">
                    </div>
                </div>

                <div class="col-xl-6 col-md-10">
                    <div class="tp-about-text z-index wow fadeInUp" data-wow-delay=".6s">
                        <div class="section-title-wrapper mb-30">
                            <h5 class="tp-section-subtitle common-yellow-shape mb-20">About our Company</h5>
                            <h2 class="tp-section-title">Our Cleaning Service</h2>
                        </div>

                        <p style="font-size: 16px;">
                            Our cleaning services covers every inch of your space. We can freshen up your bathroom,
                            invigorate your kitchen, and restore your bedroom to ensure you have the beautiful and clean
                            home you deserve.We’ll get deep into the corners to remove any dust, germs, and bacteria to
                            deliver a home that is both spotless and healthy. Our Sofa , curtain & mattress cleaning service
                            is a must for all move in and out's of new homes.
                        </p>

                        <div class="row mb-10 py-2">

                            <div class="col-sm-6">
                                <div class="tp-about-service mb-30">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                        <i class="flaticon-business-and-trade"></i>
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15 hover-theme-color">
                                            Commercial Cleaning
                                        </h4>
                                        <p>
                                            Elevate your workspace with our expert commercial cleaning. From offices to
                                            retail stores, we deliver tailored solutions for a spotless, inviting
                                            environment.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="tp-about-service mb-30">
                                    <div class="tp-about-service-icon yellow-circle-shape mb-15">
                                        <i class="flaticon-snowfall"></i>
                                    </div>
                                    <div class="tp-about-service-text">
                                        <h4 class="tp-about-service-text-title mb-15 hover-theme-color">
                                            Specialized Cleaning
                                        </h4>
                                        <p>
                                            Get expert care for carpets, windows, and more. We deliver precise, high-quality
                                            cleaning to keep your space pristine.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tp-feature-area-three pt-120 pb-80 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-45 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">
                            Our Working Process
                        </h5>
                        <h2 class="tp-section-title mb-25 heading-color-black">
                            Excellent Techniques For <br>Effective
                            Cleaning</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay=".4s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="{{ asset('assets/img/icon/feature-bg.png') }}" class="img-fluid" alt="img not found">
                            <i class="flaticon-booking"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20 heading-color-black-with-hover">
                                <a href="javascript::void(0)">
                                    Book Online
                                </a>
                            </h4>
                            <p>
                                Schedule your cleaning service easily with our online booking system.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="{{ asset('assets/img/icon/feature-bg.png') }}" class="img-fluid" alt="img not found">
                            <i class="flaticon-delivery-box"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20 heading-color-black-with-hover">
                                <a href="javascript::void(0)">
                                    Received Data
                                </a>
                            </h4>
                            <p>
                                We confirm your booking and gather details to tailor your service.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay="1s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="{{ asset('assets/img/icon/feature-bg.png') }}" class="img-fluid" alt="img not found">
                            <i class="flaticon-boy"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20 heading-color-black-with-hover">
                                <a href="javascript::void(0)">
                                    Ready Cleaner
                                </a>
                            </h4>
                            <p>
                                Our professional cleaner arrives prepared to tackle your cleaning needs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="tp-feature-three text-center mb-30 wow fadeInUp" data-wow-delay="1.3s">
                        <div class="tp-feature-three-icon mb-30">
                            <img src="{{ asset('assets/img/icon/feature-bg.png') }}" class="img-fluid" alt="img not found">
                            <i class="flaticon-cleaning"></i>
                        </div>
                        <div class="tp-feature-three-text">
                            <h4 class="tp-feature-three-title mb-20 heading-color-black-with-hover">
                                <a href="javascript::void(0)">
                                    Start Cleaning
                                </a>
                            </h4>
                            <p>
                                Sit back and relax while we ensure your space is spotless and refreshed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tp-services-area theme-dark-bg">
        <div class="tp-custom-container">
            <div class="tp-services-bg grey-bg pt-120 pb-90 z-index">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="tp-section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".1s">
                                <h5 class="tp-section-subtitle common-yellow-shape mb-25">
                                    Our Company Statement
                                </h5>
                                <h2 class="tp-section-title">
                                    Our Vision, Mission <br> & Value
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".2s"
                                style="padding: 42px 35px 5px 10px;">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color">
                                        Our Vision
                                    </h4>
                                    <p class="mb-20">
                                        To be the leading provider of cleaning services known for excellence and innovation.
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".4s"
                                style="padding: 42px 35px 5px 10px;">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color">
                                        Our Mission
                                    </h4>
                                    <p class="mb-20">
                                        To provide top-notch cleaning with reliability, professionalism, and customer focus.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="tp-services white-bg mb-30 wow fadeInUp" data-wow-delay=".6s"
                                style="padding: 42px 35px 5px 10px;">
                                <div class="tp-services-icon yellow-circle-shape">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="tp-services-text fix">
                                    <h4 class="tp-services-text-title mb-15 hover-theme-color">
                                        Our Value
                                    </h4>
                                    <p class="mb-20">
                                        Quality, Integrity, Efficiency, and Customer Care.
                                    </p>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
