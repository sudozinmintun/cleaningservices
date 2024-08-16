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
                        Video
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <b>Video</b>
                <div class="float-end">
                    @can('create blog')
                        <a href="{{ route('video.create') }}" class="btn btn-primary">Add New</a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Video</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $key => $video)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $video->title }}</td>
                                <td>
                                    <video width="320" height="100" controls>
                                        <source src="{{ Storage::url($video->video) }}" type="video/mp4">
                                        <source src="{{ Storage::url($video->video) }}" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </td>
                                <td>
                                    @can('delete faq')
                                        <form action="{{ route('video.destroy', $video->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger m-2 ms-3"
                                                onclick="return confirm('Are you sure you want to delete this item?')">
                                                <i class='bi bi-trash'></i>
                                            </button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
