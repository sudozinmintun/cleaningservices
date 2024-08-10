@extends('layout.admin')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Posts
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $id ? 'Edit' : 'Add' }} Post
            </div>
            <div class="card-body">
                @include('admin.partials.flash')
                @if (!empty($id))
                    <div class="alert alert-info">
                        Select Featured Image only when need to be updated
                    </div>
                @endif
                <form action="{{ $id ? route('admin.post.edit') : route('admin.post.add') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="tinymce-editor">{!! $post->description ?? '' !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="password">Featured Image</label>
                        <input type="file" class="form-control" name="image" value="">
                    </div>

                    <input type="submit" name="save" value="Save" class="mt-3 btn btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection
