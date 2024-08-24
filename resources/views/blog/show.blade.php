@extends('layout.app')
@section('title', 'Blog')
@section('content')

    <section class="blog-details-area pt-50 pb-70">
        <div class="container">
            <div class="tp-custom-container-box">
                <div class="row">

                    <div class="col-lg-9">
                        <div class="blog__details--wrapper mr-50 mb-50">
                            <div class="ablog ablog-4 mb-55">

                                <div class="ablog__img wow fadeInUp">
                                    @if ($post->image)
                                        <img src="{{ asset('images/' . $post->image) }}" alt="Blog image"
                                            class="img-responsive img-fullwidth"
                                            style="width: 100%; height: 300px; object-position: center; background-size: cover; object-fit: cover;">
                                    @endif
                                </div>

                                <div class="ablog__text ablog__text4">

                                    <div class="ablog__meta ablog__meta4">
                                        <ul>
                                            <li>
                                                <i class="far fa-calendar-check"></i>
                                                {{ $post->created_at->diffForHumans() }}
                                            </li>
                                        </ul>
                                    </div>

                                    <h3 class="entry-title mb-0">
                                        {{ $post->title ?? '' }}
                                    </h3>

                                    <p>
                                        {!! $post->description ?? '' !!}
                                    </p>


                                    <div class="share-buttons">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                            target="_blank" class="btn btn-facebook">
                                            <i class="fab fa-facebook-f"></i> Share
                                        </a>


                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}"
                                            target="_blank" class="btn btn-facebook">
                                            <i class="fa-brands fa-x-twitter"></i> Share
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3">
                        <div class="ablog__sidebar mb-50">
                            <div class="widget mb-45 wow fadeInUp">
                                <h3 class="sidebar__widget--title mb-30">Recent Posts </h3>

                                @foreach ($recent_posts as $recent_post)
                                    <div class="sidebar--widget__post mb-20">

                                        <div class="sidebar__post--thumb">
                                            <a href="{{ route('blog.show', $post->id) }}">
                                                @if ($recent_post->image ?? '')
                                                    <div class="post__img"
                                                        data-background="{{ asset('images/' . $recent_post->image) }}">
                                                    </div>
                                                @else
                                                    <div class="post__img"
                                                        data-background="{{ asset('images/default-product.jpg') }}">
                                                    </div>
                                                @endif
                                            </a>
                                        </div>

                                        <div class="sidebar__post--text">
                                            <h4 class="sidebar__post--title">
                                                <a href="{{ route('blog.show', $post->id) }}">
                                                    {{ $recent_post->title ?? '' }}
                                                </a>
                                            </h4>
                                            <span>
                                                {{ $recent_post->created_at->diffForHumans() }}
                                            </span>
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
