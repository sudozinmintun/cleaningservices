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
                        Estiamte Details
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Estiamte Details</div>
        <div class="card-body">
            <hr>
            <div class="row">
                <div class="col">Name</div>
                <div class="col"> {{ $estimate->name }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Phone</div>
                <div class="col"> {{ $estimate->phone }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Email</div>
                <div class="col"> {{ $estimate->email }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">Type of property</div>
                <div class="col"> {{ $estimate->p_type }} </div>
                </select>
            </div>

            <hr>
            <div class="row">
                <div class="col">Number of bedroom/bathroom</div>
                <div class="col"> {{ $estimate->no_bed_bath }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Flooring Type</div>
                <div class="col"> {{ $estimate->f_type }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Any Special Room</div>
                <div class="col"> {{ $estimate->s_room }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">How often would you like Cleaning Service</div>
                <div class="col"> {{ $estimate->clean_service_period }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">Other</div>
                <div class="col"> {{ $estimate->clean_service_period_other }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">What Specific cleaning service are you interested in?</div>
                <div class="col">
                    @if (!empty($estimate->clean_service))
                        @php
                            $clean_service = implode('<br>', json_decode($estimate->clean_service, true));
                            echo $clean_service;
                        @endphp
                    @else
                    @endif
                </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">Other</div>
                <div class="col"> {{ $estimate->clean_service_other }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">Do you have pets in house?</div>
                <div class="col"> {{ $estimate->pets }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Pet type</div>
                <div class="col"> {{ $estimate->pet_type }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">Are there any allergies or sensitives that our cleaner should be aware of?</div>
                <div class="col"> {{ $estimate->allergies_sensitives }} </div>
            </div>

            <hr>
            <div class="row">
                <div class="col">Will someone be present during cleaning sessions</div>
                <div class="col"> {{ $estimate->present }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">How will our team access the property</div>
                <div class="col"> {{ $estimate->access }} </div>

            </div>


            <hr>
            <div class="row">
                <div class="col">Are there any spefic areas or items you want our team to pay extra attension to</div>
                <div class="col"> {{ $estimate->attension }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">Do you have any addition request or prefrences related to cleaing service</div>
                <div class="col"> {{ $estimate->request }} </div>
            </div>


            <hr>
            <div class="row">
                <div class="col">How did you hear about us?</div>
                <div class="col"> {{ $estimate->hear }} </div>

            </div>

            <hr>
            <div class="row">
                <div class="col">Is there anything else you'd like to share or ask regrading cleaning service</div>
                <div class="col"> {{ $estimate->extra }} </div>

            </div>

        </div>
    </div>
@endsection
