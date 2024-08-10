@extends('layout.app')
@section('title', 'Contact Us')
@section('content')
    <section class="tp-contact-area pb-120 py-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-10">
                    <div class="section-title-wrapper-two mb-50 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">
                            <a href="{{ route('estimate.index') }}">
                                Get Estimate
                            </a>
                        </h5>

                        <h2 class="tp-section-title heading-color-black">
                            If you Have Any Query, Don’t Hesitate <br>Contact with us
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="row custom-mar-20">
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Address</h4>
                                    <p>
                                        Address here...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Phone</h4>
                                    <a href="tel:">
                                        Phone number here...
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".8s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Email</h4>
                                    <a href="">
                                        info@domain.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="tp-contact-form">
                        <form action="{{ route('contact.store') }}" method="POST" autocomplete="off" id="create-form">
                            @csrf

                            <div class="row custom-mar-20">
                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" placeholder="Enter your name" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="email" placeholder="Enter your email address" name="email">
                                    </div>
                                </div>

                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" placeholder="Enter your subject" name="subject">
                                    </div>
                                </div>

                                <div class="col-md-6 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <input type="text" placeholder="Enter your phone" name="phone">
                                    </div>
                                </div>

                                <div class="col-md-12 custom-pad-20">
                                    <div class="tp-contact-form-field mb-20">
                                        <textarea placeholder="Your Message" name="message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 custom-pad-20">
                                    <div class="tp-contact-form-field">
                                        <button type="submit" class="theme-btn">
                                            <i class="flaticon-enter"></i>
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
