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
                        Message History
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header"><b>Message History</b>
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
                            <th style="width: 1%;">#</th>
                            <th style="width: 20%;">Title</th>
                            <th style="width: 20%;">To</th>
                            <th style="width: 20%;">Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($send_histories as $key => $send_history)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $send_history->message ?? '' }}</td>

                                <td>
                                    @foreach ($send_history->to as $to_data)
                                        <span class="badge bg-primary">
                                            {{ $to_data ?? '' }}
                                        </span>
                                    @endforeach
                                </td>

                                <td>
                                    {{ $send_history->created_at->diffForHumans() }}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
