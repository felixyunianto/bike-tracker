@extends('layouts.app')

@section('head')
    {{-- <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' /> --}}

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
@endsection

@section('content')
    <div id='map' class="w-100 h-75"></div>
    <div class="my-3">
        <button id="btn-add-marker" class="btn btn-primary btn-sm form-control">ADD MARKER</button>
    </div>
@endsection

@section('script')
    <script>
        var mymap = L.map('map').setView([-6.879704, 109.125595], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            id: 'mapbox.streets'
        }).addTo(mymap);

        var myIcon = L.icon({
            iconUrl: "{{ asset('assets/images/placeholder.png') }}",
            iconSize: [40, 40],
            iconAnchor: [40, 40],
            popupAnchor: [40, 40],
            // shadowUrl: "{{ asset('assets/images/placeholder.png') }}",
            shadowSize: [40, 40],
            shadowAnchor: [40, 40]
        });

        const btnAddMarker = document.querySelector("#btn-add-marker");
        console.log(btnAddMarker);

        btnAddMarker.addEventListener('click', function() {
            // mymap.setLatLng([-6.86747395, 109.137942239308])
            let marker = L.marker([-6.86747395, 109.137942239308], {
                icon: myIcon
            }).addTo(mymap).bindPopup("<b>Hello world!</b><br />I am Paris.")
            mymap.flyTo([-6.86747395, 109.137942239308], 13)
        });

    </script>
@endsection
