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
                        Site Visitor
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <b>Site Visitor</b>
            </div>
            
            <div class="card-body">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>IP Address</th>
                            <th>Devices</th>
                            <th>Platform</th>
                            <th>Browser</th>
                            <th>Address</th>
                            <th>Map</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitors as $key => $visitor)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $visitor->ip ?? '-' }}</td>
                                <td>{{ $visitor->devices ?? '-' }}</td>
                                <td>{{ $visitor->platform ?? '-' }}</td>
                                <td>{{ $visitor->browser ?? '-' }}</td>
                                <td>{{ $visitor->address ?? '-' }}</td>
                                <td>
                                    @if ($visitor->latitude && $visitor->longitude)
                                        <div id="map-{{ $visitor->id }}" style="height: 200px; width: 200px;"></div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const map{{ $visitor->id }} = L.map('map-{{ $visitor->id }}').setView([{{ $visitor->latitude }},
                                                    {{ $visitor->longitude }}
                                                ], 13);
                                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                    maxZoom: 19,
                                                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                                }).addTo(map{{ $visitor->id }});

                                                L.marker([{{ $visitor->latitude }}, {{ $visitor->longitude }}]).addTo(map{{ $visitor->id }})
                                                    .bindPopup('Location: {{ $visitor->address }}')
                                                    .openPopup();
                                            });
                                        </script>

                                        <a href="https://www.google.com/maps?q={{ $visitor->latitude }},{{ $visitor->longitude }}"
                                            target="_blank">Google</a>
                                        |
                                        <a href="https://www.openstreetmap.org/?mlat={{ $visitor->latitude }}&mlon={{ $visitor->longitude }}#map=13/{{ $visitor->latitude }}/{{ $visitor->longitude }}"
                                            target="_blank">Open Street</a>
                                    @else
                                        <p>Location not available</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
