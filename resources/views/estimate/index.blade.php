@extends('layout.app')
@section('title', 'Estimate')
@section('content')

    <section>
        <div class="container pb-4 pt-3 pt-lg-5">
            <div class="row">

                <div class="col-12 py-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Estimate
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
                    @include('components.alert')
                    <form id="store-form" action="{{ route('estimate.store') }}" method="POST" autocomplete="off">
                        @csrf

                        <style>
                            @media (max-width: 768px) {
                                #progressbar {
                                    flex-direction: column;
                                    /* Stack items vertically on mobile */
                                }

                                #progressbar .nav-link {
                                    text-align: center;
                                    /* Center the text */
                                    padding: 10px;
                                }
                            }
                        </style>

                        <div class="container">
                            <ul id="progressbar" class="nav nav-pills d-flex justify-content-between flex-wrap">
                                <li class="nav-item active" id="step1">
                                    <a class="nav-link">Personal Details</a>
                                </li>

                                <li class="nav-item" id="step2">
                                    <a class="nav-link">Your Property</a>
                                </li>

                                <li class="nav-item" id="step3">
                                    <a class="nav-link">Cleaning Service</a>
                                </li>

                                <li class="nav-item" id="step4">
                                    <a class="nav-link">More Details</a>
                                </li>

                                <li class="nav-item" id="step5">
                                    <a class="nav-link">Complete</a>
                                </li>
                            </ul>
                        </div>

                        <div class="progress mt-3">
                            <div class="progress-bar" role="progressbar"></div>
                        </div>
                        <br>

                        <!-- Step 1 -->
                        <fieldset>
                            <h2 class="text-center">Personal Details</h2>
                            <div class="form-group">
                                <label class="label-font" for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" required>
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <button type="button" class="btn btn-primary next-step" id="step-one-button" disabled>
                                Next Step
                            </button>
                        </fieldset>

                        <!-- Step 2 -->
                        <fieldset>
                            <h2 class="text-center">Your Property</h2>

                            <div class="form-group">
                                <label class="label-font" for="p_type">Type of Property</label>
                                <select name="p_type" class="form-control" required>
                                    <option value="Single">Single Family Home</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Condo">Condo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="no_bed">Number of Bedrooms</label>
                                <input type="text" class="form-control" name="no_bed" id="no_bed" required>
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="no_bath">Number of Bathrooms</label>
                                <input type="text" class="form-control" name="no_bath" id="no_bath" required>
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="f_type">Flooring Type</label>
                                <select name="f_type" class="form-control" required>
                                    <option value="Carpet">Carpet</option>
                                    <option value="Hardwood">Hardwood</option>
                                    <option value="Tile">Tile</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="s_room">Any Special Room</label>
                                <select name="s_room" class="form-control" required>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>

                            <button type="button" name="previous-step" class="btn btn-secondary previous-step">
                                Previous Step
                            </button>

                            <button type="button" class="btn btn-primary next-step" id="step-two-button" disabled>
                                Next Step
                            </button>
                        </fieldset>

                        <!-- Step 3 -->
                        <fieldset>
                            <h2 class="text-center">Cleaning Service</h2>

                            <div class="form-group">
                                <label class="label-font" for="clean_service_period">
                                    How Often Would You Like Cleaning Service
                                </label>
                                <select name="clean_service_period" class="form-control" required
                                    id="clean_service_period">
                                    <option value="Weekly">Weekly</option>
                                    <option value="Bi-Weekly">Bi-Weekly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="One time">One Time Cleaning</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group" id="other_input_group">
                                <label class="label-font" for="clean_service_period_other">Other</label>
                                <input type="text" class="form-control" name="clean_service_period_other">
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="clean_service">
                                    What Specific Cleaning Service Are You Interested In?
                                </label>
                                <div>
                                    <input type="checkbox" name="clean_service[]" value="General Cleaning"
                                        id="GeneralCleaning">
                                    <label for="GeneralCleaning"> General Cleaning </label><br>


                                    <input type="checkbox" name="clean_service[]" value="Commercial Cleaning"
                                        id="CommercialCleaning">
                                    <label for="CommercialCleaning"> Commercial Cleaning </label><br>


                                    <input type="checkbox" name="clean_service[]" value="Deep Cleaning"
                                        id="DeepCleaning">
                                    <label for="DeepCleaning"> Deep Cleaning </label><br>

                                    <input type="checkbox" name="clean_service[]" value="Move In/Move Out Cleaning"
                                        id="MoveInOut">
                                    <label for="MoveInOut"> Move In/Move Out Cleaning </label><br>

                                    <input type="checkbox" name="clean_service[]" value="Specialized Cleaning"
                                        id="Specialized">
                                    <label for="Specialized">Specialized Cleaning</label><br>

                                    <input type="checkbox" name="clean_service[]" value="Eco Friendly Cleaning"
                                        id="Eco">
                                    <label for="Eco">Eco Friendly Cleaning</label><br>

                                    <input type="checkbox" name="clean_service[]" value="Other" id="Other">
                                    <label for="Other">Other</label><br>
                                </div>
                            </div>

                            <div class="form-group" id="clean_service_other">
                                <label class="label-font" for="clean_service_other">Other</label>
                                <input type="text" class="form-control" name="clean_service_other"
                                    id="clean_service_other">
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="pets">Do You Have Pets in the House?</label>
                                <select name="pets" class="form-control" required id="pets">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>

                            <div class="form-group" id="pet_type">
                                <label class="label-font" for="pet_type">Pet Type</label>
                                <input type="text" class="form-control" name="pet_type">
                            </div>


                            <button type="button" name="previous-step" class="btn btn-secondary previous-step">
                                Previous Step
                            </button>

                            <button type="button" class="btn btn-primary next-step">
                                Next Step
                            </button>
                        </fieldset>

                        <!-- Step 4 -->
                        <fieldset>
                            <h2 class="text-center">More Details</h2>
                            <div class="form-group">
                                <label class="label-font" for="allergies_sensitives">
                                    Are There Any Allergies or Sensitives That Our Cleaner Should Be Aware Of?
                                </label>
                                <input type="text" class="form-control" name="allergies_sensitives">
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="present">
                                    Will Someone Be Present During Cleaning Sessions?
                                </label>
                                <input type="text" class="form-control" name="present">
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="access">
                                    How Will Our Team Access the Property?
                                </label>
                                <select name="access" class="form-control" required>
                                    <option value="Key">Key</option>
                                    <option value="Lockbox">Lockbox</option>
                                    <option value="Be Home">Be Home</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="attension">
                                    Are There Any Specific Areas or Items You Want Our Team to Pay Extra Attention To?
                                </label>
                                <input type="text" class="form-control" name="attension">
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="request">
                                    Do You Have Any Additional Requests or Preferences Related to Cleaning Service?
                                </label>
                                <input type="text" class="form-control" name="additional_request">
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="hear">
                                    How Did You Hear About Us?
                                </label>
                                <input type="text" class="form-control" name="hear">
                            </div>

                            <div class="form-group">
                                <label class="label-font" for="extra">
                                    Is There Anything Else You'd Like to Share or Ask Regarding Cleaning Service?
                                </label>
                                <input type="text" class="form-control" name="extra">
                            </div>

                            <button type="button" name="previous-step" class="btn btn-secondary previous-step">
                                Previous Step
                            </button>

                            <button type="button" class="btn btn-primary next-step">
                                Final Step
                            </button>
                        </fieldset>

                        <!-- Step 5 -->
                        <fieldset>
                            <div class="finish text-center">
                                <h2>
                                    <strong>
                                        FINISHED
                                    </strong>
                                </h2>

                                <p>
                                    If the information you have filled out is correct, please click the "Save" button.
                                </p>
                            </div>

                            <div class="d-flex justify-content-center gap-2 mt-3">
                                <button type="button" name="previous-step" class="btn btn-secondary previous-step">
                                    Previous Step
                                </button>

                                <button type="submit" class="btn btn-primary">
                                    <i class="flaticon-enter"></i>
                                    Save
                                </button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </section>


@endsection


@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEstimate', '#store-form') !!}


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const fields = ['name', 'phone', 'email'];
            const nextStepButton = document.getElementById('step-one-button');

            const checkFormValidity = () => {
                nextStepButton.disabled = fields.some(id => !document.getElementById(id).value.trim());
            };

            fields.forEach(id => document.getElementById(id).addEventListener('input', checkFormValidity));


            const stpe_two_fields = ['no_bed', 'no_bath'];
            const nextStepTwoButton = document.getElementById('step-two-button');
            const stpeTwoCheckFormValidity = () => {
                nextStepTwoButton.disabled = stpe_two_fields.some(id => !document.getElementById(id).value
                    .trim());
            };
            stpe_two_fields.forEach(id => document.getElementById(id).addEventListener('input',
                stpeTwoCheckFormValidity));
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const steps = document.querySelectorAll('fieldset');
            const progressBar = document.querySelector('.progress-bar');
            const progressItems = document.querySelectorAll('#progressbar li');
            const totalSteps = steps.length;
            let currentStep = 0;

            function showStep(stepIndex) {
                steps.forEach((step, index) => {
                    step.style.display = index === stepIndex ? 'block' : 'none';
                });

                // Update the progress bar width
                progressBar.style.width = `${(stepIndex / (totalSteps - 1)) * 100}%`;

                // Update the active state on progress items
                progressItems.forEach((item, index) => {
                    item.classList.toggle('active', index <= stepIndex);
                });
            }

            function handleNavigation(event) {
                if (event.target.classList.contains('next-step')) {
                    if (currentStep < totalSteps - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                } else if (event.target.classList.contains('previous-step')) {
                    if (currentStep > 0) {
                        currentStep--;
                        showStep(currentStep);
                    }
                }
            }

            document.querySelectorAll('.next-step, .previous-step').forEach(button => {
                button.addEventListener('click', handleNavigation);
            });

            showStep(currentStep);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectElement = document.getElementById('clean_service_period');
            var otherInputGroup = document.getElementById('other_input_group');

            // Toggle visibility based on the current selection
            selectElement.addEventListener('change', function() {
                otherInputGroup.style.display = (selectElement.value === 'Other') ? 'block' : 'none';
            });

            // Initialize visibility on page load
            otherInputGroup.style.display = (selectElement.value === 'Other') ? 'block' : 'none';
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var otherCheckbox = document.getElementById('Other');
            var otherInputGroup = document.getElementById('clean_service_other');

            // Toggle visibility based on checkbox status
            otherCheckbox.addEventListener('change', function() {
                otherInputGroup.style.display = otherCheckbox.checked ? 'block' : 'none';
            });

            // Initialize visibility on page load
            otherInputGroup.style.display = otherCheckbox.checked ? 'block' : 'none';
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var selectElement = document.getElementById('pets');
            var pet_type = document.getElementById('pet_type');

            // Toggle visibility based on the current selection
            selectElement.addEventListener('change', function() {
                pet_type.style.display = (selectElement.value === 'Yes') ? 'block' : 'none';
            });

            // Initialize visibility on page load
            pet_type.style.display = (selectElement.value === 'Yes') ? 'block' : 'none';
        });
    </script>

@endsection
