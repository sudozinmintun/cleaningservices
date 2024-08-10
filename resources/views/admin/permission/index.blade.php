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
                        Permission
                    </li>
                </ol>
            </nav>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Permission</b>

                        @can('create permission')
                            <div class="float-end">
                                <a href="{{ route('permission.create') }}" class="btn btn-primary">Add New</a>
                            </div>
                        @endcan

                    </div>

                    <div class="card-body">
                        <table class="table datatable mb-0 table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 1%">#</th>
                                    <th scope="col" style="width: 80%">Name</th>
                                    <th scope="col" style="width: 15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permission as $key => $value)
                                    <tr class="row1" data-id="{{ $value->id }}">
                                        <td>
                                            {{ $key + 1 }}
                                        </td>

                                        <td>
                                            {{ $value->name }}
                                        </td>

                                        <td>
                                            <div class="d-flex order-actions">

                                                @can('edit permission')
                                                    <a class="btn btn-info m-2"
                                                        href="{{ route('permission.edit', $value->id) }}">
                                                        <i class='bi bi-pen'></i>
                                                    </a>
                                                @endcan

                                                @can('delete permission')
                                                    <form action="{{ route('permission.destroy', $value->id) }}" method="POST"
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
        </div>
    </div>
@endsection
