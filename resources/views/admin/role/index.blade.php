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
                        Roles
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header"><b>Roles</b>
                @can('create role')
                    <div class="float-end">
                        <a href="{{ route('role.create') }}" class="btn btn-primary">Add New</a>
                    </div>
                @endcan
            </div>

            <div class="card-body">

                @include('admin.partials.flash')

                <table class="table datatable">

                    <thead>
                        <tr>
                            <th>Id</th>
                            <th style="width: 20%;">Title</th>
                            <th>Permissions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>

                                <td>
                                    @foreach ($role->permissions as $permission)
                                        <span class="badge bg-primary">
                                            {{ $permission->name }}
                                        </span>
                                    @endforeach
                                </td>

                                <td>

                                    <div class="d-flex order-actions">

                                        @can('edit role')
                                            <a class="btn btn-info m-2" href="{{ route('role.edit', $role->id) }}">
                                                <i class='bi bi-pen'></i>
                                            </a>
                                        @endcan

                                        @can('delete role')
                                            <form action="{{ route('role.destroy', $role->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger m-2 ms-3"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                    <i class='bi bi-trash'></i>
                                                </button>
                                            </form>
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
