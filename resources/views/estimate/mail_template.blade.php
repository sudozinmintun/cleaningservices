<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimate Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .details p {
            margin-bottom: 10px;
        }

        .details strong {
            font-weight: bold;
        }

        .submission-date {
            font-style: italic;
        }

        .box {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .row {
            margin-bottom: 10px;
        }

        .row div {
            display: inline-block;
            vertical-align: top;
        }

        .row .col {
            width: 45%;
            font-weight: bold;
        }

        .row .col:last-child {
            width: 50%;
            font-weight: normal;
        }

        hr {
            border: 0;
            border-top: 1px solid #eee;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Estimate Form Submission</h1>

        <div class="details">
            <div class="row">
                <div class="col">Name</div>
                <div class="col">{{ $estimate->name ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Phone</div>
                <div class="col">{{ $estimate->phone ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Email</div>
                <div class="col">{{ $estimate->email ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Type of Property</div>
                <div class="col">{{ $estimate->p_type ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Number of Bedrooms</div>
                <div class="col">{{ $estimate->no_bed ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Number of Bathrooms</div>
                <div class="col">{{ $estimate->no_bath ?? '-' }}</div>
            </div>


            <hr>

            <div class="row">
                <div class="col">Flooring Type</div>
                <div class="col">{{ $estimate->f_type ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Any Special Room</div>
                <div class="col">{{ $estimate->s_room ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">How Often Would You Like Cleaning Service</div>
                <div class="col">{{ $estimate->clean_service_period ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Other</div>
                <div class="col">{{ $estimate->clean_service_period_other ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">What Specific Cleaning Service Are You Interested In?</div>
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
                <div class="col">{{ $estimate->clean_service_other ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Do You Have Pets in the House?</div>
                <div class="col">{{ $estimate->pets ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Pet Type</div>
                <div class="col">{{ $estimate->pet_type ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Are There Any Allergies or Sensitivities That Our Cleaner Should Be Aware Of?</div>
                <div class="col">{{ $estimate->allergies_sensitives ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Will Someone Be Present During Cleaning Sessions?</div>
                <div class="col">{{ $estimate->present ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">How Will Our Team Access the Property?</div>
                <div class="col">{{ $estimate->access ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Are There Any Specific Areas or Items You Want Our Team to Pay Extra Attention To?
                </div>
                <div class="col">{{ $estimate->attension ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Do You Have Any Additional Requests or Preferences Related to Cleaning Service?
                </div>
                <div class="col">{{ $estimate->request ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">How Did You Hear About Us?</div>
                <div class="col">{{ $estimate->hear ?? '-' }}</div>
            </div>

            <hr>

            <div class="row">
                <div class="col">Is There Anything Else You'd Like to Share or Ask Regarding Cleaning Service?</div>
                <div class="col">{{ $estimate->extra ?? '-' }}</div>
            </div>
        </div>
    </div>
</body>

</html>
