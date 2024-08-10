@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card border-top border-0 border-4 border-info">
                <form action="{{ route('role.store') }}" method="POST" autocomplete="off" id="create-form" role="form">
                    @csrf
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <div>
                                <i class="bx bxs-edit me-1 font-22 text-info"></i>
                            </div>
                            <h5 class="mb-0 text-info">
                                Role
                            </h5>
                        </div>

                        <hr />

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Name
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name') }}" />
                                @error('name')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <small class="text-black fw-semibold d-block" style="font-size: 16px;">
                                    Permission
                                </small>

                                <div class="row">
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-3 col-3">
                                            <div class="form-check form-check-primary mt-3">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $permission->name }}" id="checkbox_{{ $permission->id }}"
                                                    name="permissions[]" />
                                                <label class="form-check-label"
                                                    for="checkbox_{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary px-5">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreRole', '#create-form') !!}
@endsection