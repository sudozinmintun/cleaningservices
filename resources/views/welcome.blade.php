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


    <section class="tp-about-area position-relative pt-90 fix">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-md-center">
                <div class="col-xl-5 col-12">
                    <div class="tp-about-img z-index wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/img/about/about.jpg') }}" alt="img not found"
                            style="border: 5px solid #EDF3F1;">
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

                        <div class="row mb-10 py-3 pt-5">

                            <div class="col-sm-12 col-md-6 col-lg-6">
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

                            <div class="col-sm-12 col-md-6 col-lg-6">
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
                                <a href="{{ route('estimate.index') }}">
                                    House Cleaning
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
                                    Dining Room Cleaning
                                </a>
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
                                    Bathroom Cleaning
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
                                    Kitchen Cleaning
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
                                            <a href="{{ route('blog.show', $post->id) }}">//
                                                {{ $post->created_at->diffForHumans() }}</a>
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


    <section class="tp-quality-service-area pt-50 bg-gray-light pb-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-55" data-wow-delay=".2s">
                        <h2 class="tp-section-title-two">Our <span>Working</span> Activities <br>Video</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-35">
                @foreach ($videos as $video)
                    <div class="col-xl-4 col-md-4 col-sm-12 col-lg-4">
                        <div class="tp-quality mb-30 wow fadeInUp" data-wow-delay=".5s">
                            <video width="100%" height="240" controls>
                                <source src="{{ Storage::url($video->video) }}" type="video/mp4">
                                <source src="{{ Storage::url($video->video) }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            <h4 class="tp-quality-text-title m-0">
                                <a href="{{ route('estimate.index') }}">Window Cleaning</a>
                            </h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="tp-blog-area pt-90 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrapper text-center mb-55" data-wow-delay=".2s">
                        <h2 class="tp-section-title-two">Checkout <span>Our</span> Photo <br> Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-35">
                <div id="gallery-container" class="row">
                    @foreach ($initialGalleries as $gallery)
                        <div class="col-xl-3 col-md-3 col-sm-12 col-lg-3">
                            <div class="tp-quality mb-30 wow fadeInUp" data-wow-delay=".5s">
                                <img data-enlargeable class="gallery-image" src="{{ asset('data/gallery/' . $gallery) }}"
                                    alt
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #064E2A; padding: 10px; border-radius: 50px 15px;">
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <button id="load-more" class="btn btn-primary">Load More</button>
                </div>

            </div>
        </div>
    </section>


    <div id="welcomeModal" class="modal fade" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="welcomeModalLabel">
                        Welcome to Our Website!
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <img src="{{ asset('assets/img/IMG_0678.png') }}" alt=""
                        style="width: 100%; height: auto; background-size: cover; object-fit: cover; object-position: center;">

                    <p class="py-2">
                        Trust our premier cleaning service for honest, reliable, and meticulous cleaning. We ensure a
                        spotless environment with our dedicated team and top-quality products. Experience cleanliness you
                        can count on.
                    </p>

                    <p class="py-2">
                        Please fill out the Estimate Form to get our service.
                        <a href="{{ route('estimate.index') }}" style="color: blue">
                            Estimate
                        </a>
                        Or enter your email, and we will contact you back.
                    </p>

                    <form method="POST" action="{{ route('subscribe.submit') }}" class="p-0" id="create-form">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" placeholder="Email Address" name="email_phone"
                                value="{{ old('email_phone') }}" autocomplete="off" class="form-control">

                            <button type="submit" class="theme-btn input-group-text" id="basic-addon2">
                                <i class="flaticon-enter"></i>
                                Subscribe
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        let offset = {{ count($initialGalleries) }}; // Initially loaded images count
        const limit = 8; // How many images to load at once

        document.getElementById('load-more').addEventListener('click', function() {
            fetch(`/load-gallery?offset=${offset}&limit=${limit}`)
                .then(response => response.json())
                .then(data => {
                    const galleryContainer = document.getElementById('gallery-container');

                    data.galleries.forEach(gallery => {
                        const galleryItem = `
                        <div class="col-xl-3 col-md-3 col-sm-12 col-lg-3">
                            <div class="tp-quality mb-30 wow fadeInUp" data-wow-delay=".5s">
                                <img data-enlargeable src="/data/gallery/${gallery}" alt
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #064E2A; padding: 10px; border-radius: 50px 15px;">
                            </div>
                        </div>`;
                        galleryContainer.insertAdjacentHTML('beforeend', galleryItem);
                    });

                    offset += limit; // Update offset for the next load

                    // Optionally, disable Load More button if no more images to load
                    if (data.galleries.length < limit) {
                        document.getElementById('load-more').disabled = true;
                    }
                })
                .catch(error => console.error('Error loading gallery:', error));
        });
    </script>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        function requestUserLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const lat = position.coords.latitude;
                        const lon = position.coords.longitude;
                        sendLocationToServer(lat, lon);
                    },
                    (error) => {
                        console.error("Error getting location: ", error);
                    }
                );
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function sendLocationToServer(lat, lon) {
            const url = "{{ route('storelocation') }}"; // Assuming your route name is 'store.location'

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        latitude: lat,
                        longitude: lon
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Location and address saved successfully:", data);
                })
                .catch(error => {
                    console.error("Error saving location:", error);
                });
        }

        requestUserLocation();
    </script>

@endsection
