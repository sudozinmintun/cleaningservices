<footer class="theme-dark-bg2">

    <div class="tp-footer-subscribe-area-two position-relative pt-50">
        <div class="container">
            <div class="tp-footer-subscribe-bg-two theme-yellow-bg pt-30 pb-20 z-index pl-60 pr-60">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-4">
                        <div class="tp-footer-subscribe">
                            <h3 class="tp-footer-subscribe-title" style="font-size: 25px;">
                                Join Our Newsletter and Marketing Communication
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="tp-footer-subscribe-form">
                            <form method="POST" action="{{ route('subscribe.submit') }}" class="p-0"
                                id="create-form">
                                @csrf
                                <div class="tp-footer-subscribe-form-field mb-10">
                                    <input type="text" placeholder="Email Address or Phone Number" name="email_phone"
                                        value="{{ old('email_phone') }}" autocomplete="off">
                                    <i class="fal fa-paper-plane"></i>
                                </div>
                                <div class="tp-footer-subscribe-form-btn mb-10">
                                    <button type="submit" class="theme-btn">
                                        <i class="flaticon-enter"></i>
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tp-footer-area-two pt-50 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="tp-footer-widget footer-col-1 mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="tp-footer-info tp-footer-info-three">
                            <h4 class="tp-footer-widget-title mb-35">
                                Our Company
                            </h4>

                            <p class="text-white mb-35">
                                We offer professional cleaning services with a commitment to excellence, ensuring your
                                space is spotless and inviting. Trust our experienced team for reliable and high-quality
                                care.
                            </p>

                            <div class="tp-footer-info-social tp-footer-info-social-three">
                                <a href="#" style="background: #0866FF;"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" style="background: #000000;"><i class="fab fa-twitter"></i></a>
                                <a href="#" style="background: #D304DD;"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="tp-footer-widget footer-col-2 mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <h4 class="tp-footer-widget-title mb-35">Our Services</h4>
                        <ul>
                            <li><a href="#">General Cleaning</a></li>
                            <li><a href="#">Commercial Cleaning</a></li>
                            <li><a href="#">Deep Cleaning</a></li>
                            <li><a href="#">Move In/Move Out Cleaning</a></li>
                            <li><a href="#">Specialized Cleaning</a></li>
                            <li><a href="#">Eco Friendly Cleaning</a></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="tp-footer-widget mb-30 wow fadeInUp" data-wow-delay=".9s">
                        <h4 class="tp-footer-widget-title mb-35">Recent News</h4>
                        <div class="tp-footer-news">
                            @foreach ($posts as $post)
                                <div class="tp-footer-news-single mb-15">
                                    <h6>
                                        <a href="{{ route('blog.show', $post->id) }}">
                                            {!! Str::limit($post->title, 100) !!}
                                        </a>
                                    </h6>
                                    <span>
                                        {{ $post->created_at->diffForHumans() }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="tp-copyright-area-two theme-dark-bg3 z-index pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-copyright tp-copyright-two text-center">
                        <p class="m-0">
                            Copyright ©{{ now()->year }} <span>Cleaning Service</span>. All Rights Reserved Copyright
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>



<!-- Cookie Consent Banner -->
<div id="cookie-consent-banner" class="alert alert-warning" style="display: none;">
    <p>This website uses cookies to ensure you get the best experience.
        <button id="accept-cookies" class="btn btn-primary btn-sm">Accept</button>
        <button id="reject-cookies" class="btn btn-secondary btn-sm">Reject</button>
    </p>
</div>

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreSubscribe', '#create-form') !!}
@endsection
