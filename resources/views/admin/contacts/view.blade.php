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
                        Contact Detail
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Contact Detail
        </div>
        <div class="card-body">
            <hr>
            <div class="row">
                <div class="col">Name</div>
                <div class="col"> {{ $contact->name }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Phone</div>
                <div class="col"> {{ $contact->phone }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Email</div>
                <div class="col"> {{ $contact->email }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Subject</div>
                <div class="col"> {{ $contact->subject }} </div>
                </select>
            </div>

            <hr>
            <div class="row">
                <div class="col">Message</div>
                <div class="col"> {!! $contact->message !!} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Submit Date</div>
                <div class="col"> {{ $contact->created_at->diffForHumans() }}</div>
            </div>

        </div>
    </div>
@endsection
