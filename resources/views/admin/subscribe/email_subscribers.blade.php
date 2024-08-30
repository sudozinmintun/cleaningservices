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
                        Subscribe Email Users
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <b>Subscribe Email Users</b>
            </div>
            <div class="card-body">
                <style>
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }

                    th,
                    td {
                        padding: 8px;
                        border: 1px solid #ddd;
                        text-align: left;
                    }

                    th {
                        background-color: #f2f2f2;
                        cursor: pointer;
                    }

                    td {
                        cursor: pointer;
                    }

                    tr.selected {
                        background-color: #e0e0e0;
                    }
                </style>

                <form action="{{ route('send.email') }}" method="post" autocomplete="off" id="create-form">
                    @csrf

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Send Mail
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-2">
                                            <label for="inputPassword6" class="col-form-label">
                                                Subject
                                            </label>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" name="subject" placeholder="Subject" class="form-control" value="{{ old('Subject') }}">
                                        </div>
                                    </div>

                                    <div class="row py-3">
                                        <div class="col-2">
                                            <label for="inputPassword6" class="col-form-label">
                                                Message
                                            </label>
                                        </div>
                                        <div class="col-9">
                                            <textarea name="message" class="tinymce-editor">{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="button-addon1" disabled>Send</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table datatable" id="datatable">
                        <thead>
                            <tr>
                                <th style="width: 5%;">
                                    <input type="checkbox" id="selectAll" />
                                    <label for="selectAll">Select All</label>
                                </th>
                                <th style="width: 10%; text-align: center;">Email or Phone</th>
                                <th style="width: 10%; text-align: center;">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribes as $key => $subscribe)
                                <tr title="Select">
                                    <td>
                                        <input type="checkbox" name="selectedData[]" value="{{ $subscribe->email_phone }}"
                                            class="selectItem" />
                                    </td>

                                    <td style="width: 10%; text-align: center;">
                                        {{ $subscribe->email_phone ?? '' }}
                                    </td>

                                    <td style="width: 10%; text-align: center;">
                                        {{ $subscribe->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Send Mail
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\sendEmail', '#create-form') !!}

    <script>
        $('#datatable').DataTable({
            "ordering": false // Disable sorting
        });

        document.addEventListener('DOMContentLoaded', function() {
            var lastChecked = null;
            // Handle "Select All" checkbox
            document.getElementById('selectAll').addEventListener('change', function() {
                var isChecked = this.checked;
                var checkboxes = document.querySelectorAll('.selectItem');
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = isChecked;
                    var row = checkbox.closest('tr');
                    row.classList.toggle('selected', isChecked);
                });
            });

            // Handle row clicks for selection
            document.querySelector('#datatable tbody').addEventListener('click', function(event) {
                var target = event.target;
                var row = target.closest('tr');

                if (!row) return; // Exit if click is not on a row

                var checkbox = row.querySelector('.selectItem');

                if (event.shiftKey && lastChecked) {
                    var rows = Array.from(row.parentNode.children);
                    var start = rows.indexOf(lastChecked);
                    var end = rows.indexOf(row);
                    var range = rows.slice(Math.min(start, end), Math.max(start, end) + 1);

                    range.forEach(function(row) {
                        var checkbox = row.querySelector('.selectItem');
                        checkbox.checked = true;
                        row.classList.add('selected');
                    });
                } else {
                    checkbox.checked = !checkbox.checked;
                    row.classList.toggle('selected', checkbox.checked);
                }

                lastChecked = row; // Update last checked row
                toggleSubmitButton();
            });

            function toggleSubmitButton() {
                var checkboxes = document.querySelectorAll('.selectItem');
                var anyChecked = Array.from(checkboxes).some(function(checkbox) {
                    return checkbox.checked;
                });

                document.getElementById('button-addon1').disabled = !anyChecked;
            }
        });
    </script>
@endsection
