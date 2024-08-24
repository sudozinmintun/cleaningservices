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
                        Welcome
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <style>
        /* General Card Styles */
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .card-body .d-flex {
            align-items: center;
        }

        .card-body .text-white {
            color: #333;
        }

        /* Gradient Backgrounds */
        .bg-gradient-cosmic {
            background: linear-gradient(135deg, #6d28d9, #a855f7);
        }

        .bg-gradient-burning {
            background: linear-gradient(135deg, #f43f5e, #f86d8f);
        }

        .bg-gradient-Ohhappiness {
            background: linear-gradient(135deg, #f6d365, #fda085);
        }

        .bg-gradient-moonlit {
            background: linear-gradient(135deg, #3b82f6, #9333ea);
        }

        /* Progress Bar Styles */
        .progress {
            background-color: #f0f0f0;
        }

        .progress-bar {
            height: 4.5px;
        }

        .bg-black {
            background-color: #000;
        }

        .bg-white {
            background-color: #fff;
        }

        .bg-white-2 {
            background-color: #f5f5f5;
        }

        /* Font Size */
        .font-30 {
            font-size: 30px;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .ms-auto {
            margin-left: auto;
        }

        .radius-10 {
            border-radius: 10px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .card-body {
                padding: 15px;
            }
        }
    </style>

    <div class="row">

        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">
                                Total Estimate
                            </p>
                            <h5 class="mb-0 text-white">
                                {{ $totalEstimate ?? 0 }}
                            </h5>
                        </div>
                        <div class="ms-auto text-white">
                            <i class='fa fa-users font-30'></i>
                        </div>
                    </div>
                    <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="card radius-10 overflow-hidden bg-gradient-burning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">
                                Total Post
                            </p>
                            <h5 class="mb-0 text-white">
                                {{ $totalPost ?? 0 }}
                            </h5>
                        </div>
                        <div class="ms-auto text-white">
                            <i class="fa-solid fa-cart-flatbed-suitcase font-30"></i>
                        </div>
                    </div>
                    <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">
                                Total User
                            </p>
                            <h5 class="mb-0 text-white">
                                {{ $totalUser ?? 0 }}
                            </h5>
                        </div>
                        <div class="ms-auto text-white">
                            <i class="fa-solid fa-file-pen font-30"></i>
                        </div>
                    </div>
                    <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">
                                Total Site Visitor
                            </p>
                            <h5 class="mb-0 text-white">
                                {{ $totalVisitorCount ?? 0 }}
                            </h5>
                        </div>
                        <div class="ms-auto text-white">
                            <i class="fa-solid fa-envelope font-30"></i>
                        </div>
                    </div>
                    <div class="progress  bg-white-2 radius-10 mt-4" style="height:4.5px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card radius-10">
        <div class="card-header border-bottom-0 bg-transparent">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h6 class="font-weight-bold mb-2 mb-lg-0">
                        Site Visitor
                    </h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center">
                            Total
                        </th>
                        <th class="text-center">
                            Today
                        </th>
                        <th class="text-center">
                            This Week
                        </th>
                        <th class="text-center">
                            This Month
                        </th>
                        <th class="text-center">
                            This Year
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            {{ number_format($totalVisitorCount) }}
                        </td>
                        <td class="text-center">
                            {{ number_format($todayCount) }}
                        </td>
                        <td class="text-center">
                            {{ number_format($ThisWeek) }}
                        </td>
                        <td class="text-center">
                            {{ number_format($currentMonthCount) }}
                        </td>
                        <td class="text-center">
                            {{ number_format($currentYearCount) }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




    <div class="card radius-10">
        <div class="card-header border-bottom-0 bg-transparent">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h6 class="font-weight-bold mb-2 mb-lg-0">
                        Estimate
                    </h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <canvas style="height:50vh; width:80vw" id="estimateData"></canvas>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const ctx = document.getElementById('estimateData');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($months),
                datasets: [{
                    label: '# Estimate',
                    data: @json($estimateData),
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        });
    </script>
@endsection
