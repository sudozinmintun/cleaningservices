<header>
    <div class="tp-header-area">
        <div class="tp-header-top theme-dark-bg pt-20 pb-50 d-none d-xl-block">
            <div class="tp-custom-container">
                <div class="row align-items-center">
                    <div class="col-xxl-4 col-xl-5">
                        <div class="tp-header-top-info">
                            <div class="tp-header-top-info-single pr-40 mr-40 border-right-1">
                                <div class="tp-header-top-info-single-icon mr-10">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="tp-header-top-info-single-text">
                                    <span class="tp-header-top-info-single-label">
                                        Contact Us
                                    </span>
                                    <span class="tp-header-top-info-single-content font-medium">2
                                        Address here.....
                                    </span>
                                </div>
                            </div>

                            <div class="tp-header-top-info-single">
                                <div class="tp-header-top-info-single-icon mr-15">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="tp-header-top-info-single-text">
                                    <span class="tp-header-top-info-single-label">
                                        Email us
                                    </span>
                                    <a href="mailto:info@domain.com">
                                        info@domain.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-2">
                        <div class="header-logo text-center">
                            <a href="{{ route('home') }}">
                                {{-- Demo Logo  --}}
                                <img src="{{ asset('data/logo.png') }}" class="img-fluid" alt="Demo Logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-5">
                        <div class="tp-header-top-info justify-content-end">
                            <div class="tp-header-top-info-single mr-85">
                                <div class="tp-header-top-info-single-icon tp-header-top-info-single-icon-call mr-10">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="tp-header-top-info-single-text">
                                    <span class="tp-header-top-info-single-label">Free Call</span>
                                    <a href="tel:Phone Number Here"
                                        class="tp-header-top-info-single-content font-medium">
                                        Phone Number Here
                                    </a>
                                </div>
                            </div>

                            <div class="tp-header-top-info-single">
                                <div class="tp-header-top-info-single-btn">
                                    <a href="javascript::void(0)" class="yellow-btn">
                                        <i class="fa fa-map"></i>
                                        Google Map
                                        {{-- You can add quotation or company profile pdf file --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tp-header-menu-area tp-transparent-header-menu header-sticky">
            <div class="container">
                <div class="row justify-content-xl-center align-items-center">
                    <div class="col-xl-2 col-8 tp-sticky-column">
                        <div class="tp-sticky-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('data/mobile-logo.png') }}" class="img-fluid" alt="logo not found">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-8 col-4">
                        <div class="tp-main-menu-bg">
                            <div class="tp-main-menu">
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
                                            <a href="{{ route('faq.index') }}">
                                                Faq
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
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 tp-sticky-column-btn">
                        <div class="tp-sticky-btn text-end">
                            <a href="javascript::void(0)" class="theme-btn justify-content-end">
                                <i class="fa fa-map"></i>
                                Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

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
