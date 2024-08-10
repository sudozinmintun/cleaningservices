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
                        Estimate
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header"><b>Estimate</b>

            </div>
            <div class="card-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estimates as $estimate)
                            <tr>
                                <td>{{ $estimate->id }}</td>
                                <td>{{ $estimate->name }}</td>
                                <td>{{ $estimate->email }}</td>
                                <td>{{ $estimate->phone }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-info m-2"
                                            href="{{ route('admin.estimate.view', $estimate->id) }}"><i
                                                class='bi bi-eye'></i></a>
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
