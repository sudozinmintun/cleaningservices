<header>
    <div class="tp-header-area-three header-sticky"
        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
        <div class="tp-custom-container">
            <div class="row justify-content-xl-center align-items-center">

                <div class="col-xxl-2 col-xl-3 col-8">
                    <div class="tp-header-logo-three">
                        <a href="{{ route('home') }}">
                            Logo Here
                            {{-- <img src="{{ asset('assets/img/logo/logo-blue.png') }}" class="img-fluid" alt="logo not found"> --}}
                        </a>
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-4">

                    <div class="tp-main-menu tp-main-menu-three">
                        <nav id="tp-mobile-menu">
                            <ul>

                                <li>
                                    <a href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('about.index') }}">
                                        About Us
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('blog.index') }}">
                                        Blog
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        Contact Us
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('estimate.index') }}">
                                        Estimate
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="side-menu-icon d-xl-none text-end">
                        <button class="side-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile menu info -->
<div class="fix">
    <div class="side-info">
        <button class="side-info-close">
            <i class="fa fa-times"></i>
        </button>
        <div class="side-info-content">
            <div class="tp-mobile-menu"></div>
            <div class="contact-infos mb-30">
                <div class="contact-list mb-30">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>
                            <i class="flaticon-pin"></i>
                            Address here
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:">
                                Mail here
                            </a>
                        </li>
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <a href="tel:">
                                Phone number here
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar__menu--social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<!-- mobile menu info -->
