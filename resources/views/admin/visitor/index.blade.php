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
                        Site Visitor
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <b>Site Visitor</b>
            </div>

            <div class="card-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>IP Address</th>
                            <th>Devices</th>
                            <th>Platform</th>
                            <th>Browser</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitors as $key => $visitor)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $visitor->ip ?? '-' }}</td>
                                <td>{{ $visitor->devices ?? '-' }}</td>
                                <td>{{ $visitor->platform ?? '-' }}</td>
                                <td>{{ $visitor->browser ?? '-' }}</td>
                                <td>{{ $visitor->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
