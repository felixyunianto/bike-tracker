@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css">
@endsection
@section('content')
    <div class="table-responsive">
        <table id="location-table" class="table table-stripped table-hover display nowrap" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Sepeda</th>
                    <th>Warna</th>
                    <th>Pemilik</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($locations as $location)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $location->bike_name }}</td>
                        <td>{{ $location->bike_color }}</td>
                        <td>{{ $location->user->name }}</td>
                        <td>{{ $location->lastLocation[0]->latitudes }}</td>
                        <td>{{ $location->lastLocation[0]->longitudes }}</td>
                        <td>
                            <a target="_blank" href="http://maps.google.com/maps?q=loc:{{$location->lastLocation[0]->latitudes}},{{$location->lastLocation[0]->longitudes}}" class="btn btn-primary btn-sm">Lihat Lokasi</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#location-table').DataTable({})
        })
    </script>
@endsection
