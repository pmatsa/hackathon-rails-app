@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div id="rails-map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

<script>
    var gateways = L.layerGroup();
    var events = L.layerGroup();
    var points_of_interest = L.layerGroup();
    var baseLayers = {};

    // Event Location Icon
    var eventIcon = L.icon({
        iconUrl: 'https://redcase.gr/kmz/settings.png',
        iconSize:     [40, 40],
        iconAnchor:  [20, 20],
        popupAnchor: [-20, -20]
    });

    // Point of Interest Icon
    var pointIcon = L.icon({
        iconUrl: 'https://redcase.gr/kmz/sensor.png',
        iconSize:     [40, 40],
        iconAnchor:  [20, 20],
        popupAnchor:  [-20, -20]
    });
    var mymap = L.map('rails-map').setView([40.6211872, 22.9110078], 8);

    // Base Map Layer from MapBox
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,

        id: 'lex32/ckv3slwqw1m7f14nx1ppn6my2',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibGV4MzIiLCJhIjoiY2tsYXdsb3czMDh3dzJ1bzFnbWhkZzVmYSJ9.mxoSWt1HZy-0pzYg56aXKA'
    }).addTo(mymap);

    // Open Railway Map
    var openrailwaymap = new L.TileLayer('http://{s}.tiles.openrailwaymap.org/standard/{z}/{x}/{y}.png',
        {
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors</a>, Style: <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA 2.0</a> <a href="http://www.openrailwaymap.org/">OpenRailwayMap</a> and OpenStreetMap',
            minZoom: 2,
            maxZoom: 19,
            tileSize: 256
        }).addTo(mymap);

    // Load KMZ Files
    {{--var kmz = L.kmzLayer().addTo(gateways);--}}
    {{--kmz.on('load', function(e) {--}}
    {{--    L.control.addOverlay(e.layer, e.name);--}}
    {{--});--}}

    {{--@for($i=1;$i<=50;$i++)--}}
    {{--    kmz.load('{{ asset('kmz/HATA-KMZ-'.$i.'.kmz') }}')--}}
    {{--@endfor--}}

    let event_locations =   [
        {
            "l_title": "Location 1",
            "l_subtitle": "",
            "l_description": "<ul>\r\n<li>Rruga Siri kodra No 149, 1001 Tirana, Albania</li>\r\n<li>00355 42450250</li>\r\n<li>www.pegasus-united.com</li>\r\n</ul>",
            "l_coox": "39.601111",
            "l_cooy": "22.394167"
        },
        {
            "l_title": "Location 2",
            "l_subtitle": "",
            "l_description": "<ul>\r\n<li>Bahnhofstrasse 22, 9242 Oberuzwil, Switzerland</li>\r\n<li>0041 71 952 27 00</li>\r\n<li>www.innovahealth.ch</li>\r\n</ul>",
            "l_coox": "38.203333",
            "l_cooy": "23.851944"
        }
    ]

    let points_of_interest_locations =   [
        {
            "l_title": "Location 3",
            "l_subtitle": "",
            "l_description": "<ul>\r\n<li>Rruga Siri kodra No 149, 1001 Tirana, Albania</li>\r\n<li>00355 42450250</li>\r\n<li>www.pegasus-united.com</li>\r\n</ul>",
            "l_coox": "37.961111",
            "l_cooy": "23.6625"
        },
        {
            "l_title": "Location 4",
            "l_subtitle": "",
            "l_description": "<ul>\r\n<li>Bahnhofstrasse 22, 9242 Oberuzwil, Switzerland</li>\r\n<li>0041 71 952 27 00</li>\r\n<li>www.innovahealth.ch</li>\r\n</ul>",
            "l_coox": "40.262778",
            "l_cooy": "22.530278"
        }
    ]

    // Events Locations
    let tmp_i = 0;
    let tmp_event_locations = {};
    event_locations.forEach((point) => {

        /* Create Markers */
        tmp_event_locations[tmp_i] = L.marker([point.l_coox, point.l_cooy], {icon: eventIcon}).addTo(events);

        /* Create Popup */
        tmp_event_locations[tmp_i].bindPopup('<p class="map-title">'+point.l_title+'</p><p class="map-subtitle">'+point.l_subtitle+'</p><span class="map-description">'+point.l_description+'</span>');
        tmp_event_locations[tmp_i].on('click', function (e) {
            this.openPopup();
        });

        console.log('<p class="map-title">'+point.l_title+'</p><p class="map-subtitle">'+point.l_subtitle+'</p><span class="map-description">'+point.l_description+'</span>');

        tmp_i++;

    });

    // Sensor Locations
    tmp_i = 0;
    let tmp_points_of_interest_locations = {};
    points_of_interest_locations.forEach((point) => {

        /* Create Markers */
        tmp_points_of_interest_locations[tmp_i] = L.marker([point.l_coox, point.l_cooy], {icon: pointIcon}).addTo(points_of_interest);

        /* Create Popup */
        tmp_points_of_interest_locations[tmp_i].bindPopup('<p class="map-title">'+point.l_title+'</p><p class="map-subtitle">'+point.l_subtitle+'</p><span class="map-description">'+point.l_description+'</span>');
        tmp_points_of_interest_locations[tmp_i].on('click', function (e) {
            this.openPopup();
        });

        console.log('<p class="map-title">'+point.l_title+'</p><p class="map-subtitle">'+point.l_subtitle+'</p><span class="map-description">'+point.l_description+'</span>');

        tmp_i++;

    });

    var overlays = {
        "LoraWan Gateways": gateways,
        "Maintenance Events": events,
        "Point of Interests": points_of_interest
    };

    L.control.layers(baseLayers,overlays).addTo(mymap);

</script>


@endsection
