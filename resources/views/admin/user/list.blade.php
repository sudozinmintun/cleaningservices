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
                        Users
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-header"><b>Users</b>
                @can('create user')
                    <div class="float-end">
                        <a href="{{ route('admin.user.addedit') }}" class="btn btn-primary">Add New</a>
                    </div>
                @endcan
            </div>
            <div class="card-body">
                @include('admin.partials.flash')
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>User id</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        @can('edit user')
                                            <a class="btn btn-info m-2" href="{{ route('admin.user.addedit', $user->id) }}"><i
                                                    class='bi bi-pen'></i></a>
                                        @endcan
                                        @can('delete user')
                                            <a class="btn btn-danger m-2" href="{{ route('admin.user.delete', $user->id) }}"><i
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
