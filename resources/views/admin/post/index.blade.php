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
            <div class="card-header"><b>Posts</b>
                <div class="float-end">
                    @can('create blog')
                        <a href="{{ route('admin.post.addedit') }}" class="btn btn-primary">Add New</a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                @include('admin.partials.flash')
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <div class="btn-group">
                                        @can('edit blog')
                                            <a class="btn btn-info m-2" href="{{ route('admin.post.addedit', $post->id) }}"><i
                                                    class='bi bi-pen'></i></a>
                                        @endcan
                                        @can('delete blog')
                                            <a class="btn btn-danger m-2" href="{{ route('admin.post.delete', $post->id) }}"><i
                                                    class='bi bi-trash'></i></a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
