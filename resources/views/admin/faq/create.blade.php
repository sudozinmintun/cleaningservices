@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card border-top border-0 border-4 border-info">
                <form action="{{ route('manage_faq.store') }}" method="POST" autocomplete="off" id="create-form" role="form">
                    @csrf
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <div>
                                <i class="bx bxs-edit me-1 font-22 text-info"></i>
                            </div>
                            <h5 class="mb-0 text-info">
                                Faq
                            </h5>
                        </div>

                        <hr />

                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Title
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control @error('title') is-invalid @enderror" type="text"
                                    name="title" value="{{ old('title') }}" />
                                @error('title')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                Description
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                                @error('title')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3"></div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreFaq', '#create-form') !!}
@endsection