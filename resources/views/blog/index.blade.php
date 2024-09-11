@extends('layout.app')
@section('title', 'Blog')
@section('content')

    <section>
        <div class="container pb-4 pt-3 pt-lg-5">

            <div class="row">

                <div class="col-12 py-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Blog
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
                    <div class="blog-posts">
                        @foreach ($posts as $post)
                            <article class="post clearfix mb-30 border-1px">
                                <div class="row">

                                    <div class="col-12 col-md-4">
                                        <a href="{{ route('blog.show', $post->id) }}">
                                            @if ($post->image ?? '')
                                                <img src="{{ asset('images/' . $post->image) }}" alt="Blog image"
                                                    class="img-responsive img-fullwidth">
                                            @else
                                                <img src="{{ asset('images/default-product.jpg') }}" alt="Default image">
                                            @endif
                                        </a>
                                    </div>

                                    <div class="col-12 col-md-8">
                                        <div class="entry-content p-10">
                                            <h4 class="entry-title mb-0">
                                                {{ $post->title ?? '' }}
                                            </h4>

                                            <div class="entry-meta">
                                                <span class="mb-10 text-gray-darkgray">
                                                    <i class="far fa-calendar-check"></i>
                                                    {{ $post->created_at->diffForHumans() }}
                                                </span>
                                            </div>

                                            <p>
                                                {!! Str::limit($post->description, 200) !!}
                                            </p>

                                            <a href="{{ route('blog.show', $post->id) }}" class="btn read-more">
                                                Continue Reading
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        {{ $posts->withQueryString()->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
