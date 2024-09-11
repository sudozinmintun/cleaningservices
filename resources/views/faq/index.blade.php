@extends('layout.app')
@section('title', 'Asked Question')
@section('content')
    <section>
        <div class="container pb-4 pt-3 pt-lg-5">
            <div class="container">
                <div class="row">

                    <div class="col-12 py-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Asked Question
                                </li>
                            </ol>
                        </nav>
                    </div>


                    <div class="col-xl-12 col-lg-12">
                        <div class="tp-faqs-right mt-10 pb-45">
                            <div class="tp-faq-text">
                                <div class="accordion" id="accordionExample">

                                    @foreach ($faqs as $key => $faq)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingId_{{ $key }}">
                                                <button class="accordion-button {{ $key == 0 ? '' : 'collapsed' }} "
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne__{{ $key }}" aria-expanded="true"
                                                    aria-controls="collapseOne__{{ $key }}">
                                                    {{ $faq->title ?? '' }}
                                                </button>
                                            </h2>


                                            <div id="collapseOne__{{ $key }}"
                                                class="accordion-collapse collapse @if ($key == 0) show @endif"
                                                aria-labelledby="headingId_{{ $key }}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    {!! $faq->description ?? '' !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    @endsection
