@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
@endsection

@section('content')
    <div class="st-card w-100" style="height: 550px">
        <div class="st-card__body">
            <div id='map' class="w-100 h-100 m-0"></div>
        </div>
    </div>
    <div class="my-3">
        <button id="find-location" class="btn btn-primary btn-sm form-control">FIND LOCATION</button>
    </div>
@endsection

@section('script')
    <script>
        var mymap = L.map('map').setView([-6.879704, 109.125595], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a> D3 TEKNIK KOMPUTER',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibGl4dGVjaDIwIiwiYSI6ImNrZHl6YzhzMjFtc2oyeW5zNXlsc2FvYmwifQ.7NsPJ2KvcqlM0dC-qBQ6Yw'
        }).addTo(mymap);

        

        @if ($locations)
            @foreach ($locations as $location)
                var marker = L.marker([{{ $location->latitudes }}, {{ $location->longitudes }}]).addTo(mymap);
                marker.bindPopup("<b>Hello, {{ $location->bike->user->name }}!</b><br>{{ $location->bike->bike_name }}")
            @endforeach
        @endif

    </script>
@endsection
