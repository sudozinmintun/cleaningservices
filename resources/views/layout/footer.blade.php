<footer class="theme-dark-bg2">
    <div class="tp-footer-area-two pt-160 pb-70">
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
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google"></i></a>
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
