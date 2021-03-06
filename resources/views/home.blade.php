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

        

        var greenIcon = L.icon({
            iconUrl: `{!! asset('assets/images/marker2.png') !!}`,
            iconSize: [38, 40],
            shadowSize: [50, 64],
            iconAnchor: [19, 40],
            shadowAnchor: [4, 62],
            popupAnchor: [0, 0]
        })

        var redIcon = L.icon({
            iconUrl: `{!! asset('assets/images/marker1.png') !!}`,
            iconSize: [38, 40],
            shadowSize: [50, 64],
            iconAnchor: [19, 40],
            shadowAnchor: [4, 62],
            popupAnchor: [0, 0]
        })

        var latLngs = [];

        @if($tempLocations)
            @foreach($tempLocations as $bike)
                var latLng = [];
                @if(count($bike->locations) > 0)
                    @foreach ($bike->locations as $key => $location)
                        latLng.push([{{$location->latitudes}}, {{$location->longitudes}}])
                        @if($loop->last)
                            var marker = L.marker([{{ $location->latitudes }}, {{ $location->longitudes }}],{icon : greenIcon}).addTo(mymap);
                        @else
                            var marker = L.marker([{{ $location->latitudes }}, {{ $location->longitudes }}],{icon : redIcon}).addTo(mymap);
                        @endif
                        marker.bindPopup("<b>Hello, {{ $location->bike->user->name }}!</b><br>{{ $location->bike->bike_name }}")
                    @endforeach
                    latLngs.push(latLng)
                @endif
            @endforeach
        @endif
        console.log(latLngs);
        if(latLngs.length > 0){
            var polyline = L.polyline(latLngs, {color: '#ff8080'}).addTo(mymap);

            mymap.fitBounds(polyline.getBounds());
        }
    </script>
@endsection
