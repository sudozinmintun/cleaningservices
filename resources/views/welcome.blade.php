@extends('layout.app')
@section('title', 'Welcome')
@section('content')
    @include('layout.slider')

    <section class="tp-cta-area-two">
        <div class="tp-cta-area-two-bg">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="tp-cta-two mb-30 wow fadeInUp" data-wow-delay=".2s">
                        <div class="tp-cta-two-icon">
                            <i class="flaticon-network"></i>
                        </div>
                        <div class="tp-cta-two-text fix">
                            <h4 class="tp-cta-two-text-title">
                                <a href="javascript::void(0)">
                                    Expert Cleaner
                                </a>
                            </h4>
                            <p>
                                Providing top-notch cleaning services with a focus on quality and efficiency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="tp-cta-two mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tp-cta-two-icon">
                            <i class="flaticon-happy"></i>
                        </div>
                        <div class="tp-cta-two-text fix">
                            <h4 class="tp-cta-two-text-title">
                                <a href="javascript::void(0)">
                                    Satisfied Services
                                </a>
                            </h4>
                            <p>
                                Dedicated to ensuring complete satisfaction through exceptional service and customer care.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="tp-cta-two mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-cta-two-icon">
                            <i class="flaticon-24-hours-support"></i>
                        </div>
                        <div class="tp-cta-two-text fix">
                            <h4 class="tp-cta-two-text-title">
                                <a href="javascript::void(0)">
                                    Support Center
                                </a>
                            </h4>
                            <p>
                                Offering reliable assistance and solutions to address all your queries and concerns.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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



    <section class="tp-quality-service-area pt-110 bg-gray-light pb-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-55" data-wow-delay=".2s">
                        <h2 class="tp-section-title-two">Guranteed <span>Quality</span> Cleaning <br>Service Everytime</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-35">

                <div class="col-xl-3 col-md-6">
                    <div class="tp-quality mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tp-quality-img">
                            <img src="{{ asset('assets/img/service/service-5.png') }}" class="img-fluid"
                                alt="img not found">
                        </div>
                        <div class="tp-quality-text text-center">
                            <div class="tp-quality-text-icon mb-10">
                                <a href="{{ route('estimate.index') }}">
                                    <i class="flaticon-cleaning tp-quality-text-icon1"></i>
                                    <i class="fal fa-plus tp-quality-text-icon2"></i>
                                </a>
                            </div>
                            <span>Commercial</span>
                            <h4 class="tp-quality-text-title m-0">
                                <a href="{{ route('estimate.index') }}">Window Cleaning</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="tp-quality mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tp-quality-img">
                            <img src="{{ asset('assets/img/service/service-6.png') }}" class="img-fluid"
                                alt="img not found">
                        </div>
                        <div class="tp-quality-text text-center">
                            <div class="tp-quality-text-icon mb-10">
                                <a href="{{ route('estimate.index') }}">
                                    <i class="flaticon-vacuum-cleaner tp-quality-text-icon1"></i>
                                    <i class="fal fa-plus tp-quality-text-icon2"></i>
                                </a>
                            </div>
                            <span>Commercial</span>
                            <h4 class="tp-quality-text-title m-0">
                                <a href="{{ route('estimate.index') }}">
                                    Carpet Cleaning
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="tp-quality mb-30 wow fadeInUp" data-wow-delay="1.1s">
                        <div class="tp-quality-img">
                            <img src="{{ asset('assets/img/service/service-7.png') }}" class="img-fluid"
                                alt="img not found">
                        </div>
                        <div class="tp-quality-text text-center">
                            <div class="tp-quality-text-icon mb-10">
                                <a href="{{ route('estimate.index') }}">
                                    <i class="flaticon-pot tp-quality-text-icon1"></i>
                                    <i class="fal fa-plus tp-quality-text-icon2"></i>
                                </a>
                            </div>
                            <span>Commercial</span>
                            <h4 class="tp-quality-text-title m-0">
                                <a href="{{ route('estimate.index') }}">
                                    Kitchen Cleaning
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="tp-quality mb-30 wow fadeInUp" data-wow-delay="1.4s">
                        <div class="tp-quality-img">
                            <img src="{{ asset('assets/img/service/service-8.png') }}" class="img-fluid"
                                alt="img not found">
                        </div>
                        <div class="tp-quality-text text-center">
                            <div class="tp-quality-text-icon mb-10">
                                <a href="{{ route('estimate.index') }}">
                                    <i class="flaticon-house-cleaning tp-quality-text-icon1"></i>
                                    <i class="fal fa-plus tp-quality-text-icon2"></i>
                                </a>
                            </div>
                            <span>Commercial</span>
                            <h4 class="tp-quality-text-title m-0">
                                <a href="{{ route('estimate.index') }}">
                                    House Cleaning
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tp-quality-btn text-center">
                        <a href="{{ route('estimate.index') }}" class="theme-btn radius-50">
                            Estimate
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="tp-blog-area pt-90 pb-85">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center mb-55 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20">Some Recent Blog</h5>
                        <h2 class="tp-section-title mb-25">Work Together to Create <br>Something Greater</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".4s">

                            <div class="tp-blog-img mb-25">
                                <a href="{{ route('blog.show', $post->id) }}">
                                    @if ($post->image ?? '')
                                        <img src="{{ asset('images/' . $post->image) }}" alt="Blog image"
                                            class="img-responsive img-fullwidth"
                                            style="width: 100%; height: 200px; background-size: cover; object-fit: cover; object-position: center;">
                                    @else
                                        <img src="{{ asset('images/default-product.jpg') }}" alt="Default image"
                                            style="width: 100%; height: 200px; background-size: cover; object-fit: cover; object-position: center;">
                                    @endif
                                </a>
                            </div>

                            <div class="tp-blog-text">
                                <div class="tp-blog-meta mb-10">
                                    <ul>
                                        <li>
                                            <a href="{{ route('blog.show', $post->id) }}">// {{ $post->created_at->diffForHumans() }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="tp-blog-title mb-20">
                                    <a href="{{ route('blog.show', $post->id) }}">
                                        {!! Str::limit($post->title, 30) !!}
                                    </a>
                                </h4>
                                <div class="tp-blog-link">
                                    <a href="{{ route('blog.show', $post->id) }}">
                                        <i class="flaticon-enter"></i> 
                                        Continue Reading
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
