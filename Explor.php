<!DOCTYPE html>
<html>
<head>
    <title>India Flight Routes Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="stylesheet" href="./dist/css/jsvectormap.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="./dist/js/jsvectormap.min.js"></script>
    <style>
        #map {
            height: 500px;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <?php
    include 'Connection.php';

    // Query the schedule table
    $sql = "SELECT departure_place, arrival_place FROM schedule";
    $result = $conn->query($sql);

    // Prepare the route data
    $routes = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $departure = $row["departure_place"];
            $arrival = $row["arrival_place"];

            // Convert the departure and arrival places to coordinates
            $departureCoords = getCoordinates($departure);
            $arrivalCoords = getCoordinates($arrival);

            // Add the route to the routes array
            $routes[] = [
                "departureCoords" => $departureCoords,
                "arrivalCoords" => $arrivalCoords,
                "departure" => $departure,
                "arrival" => $arrival
            ];
        }
    }

    // Helper function to convert place names to coordinates
    // (You may need to implement this function using a geocoding service)
    function getCoordinates($place) {
        // ...
        // Return [latitude, longitude] for the given place
    }

    $conn->close();
    ?>

    <script src="./dist/maps/world.js"></script>
    <script src="./dist/maps/world-merc.js"></script>

    <script>
        // Initialize the map
        var map = new jsVectorMap({
            map: 'world',
            selector: '#map',
            backgroundColor: 'transparent',
            draggable: true,
            zoomButtons: true,
            zoomOnScroll: true,
            zoomOnScrollSpeed: 3,
            zoomMax: 12,
            zoomMin: 1,
            zoomAnimate: true,
            showTooltip: true,
            zoomStep: 1.5,
            bindTouchEvents: true,
            lineStyle: {
                stroke: '#808080',
                strokeWidth: 1,
                strokeLinecap: 'round'
            },
            regionsSelectable: false,
            regionsSelectableOne: false,
            markersSelectable: true,
            markersSelectableOne: true,
            markerStyle: {
                initial: {
                    r: 7,
                    fill: '#374151',
                    fillOpacity: 1,
                    stroke: '#FFF',
                    strokeWidth: 5,
                    strokeOpacity: .5
                },
                hover: {
                    fill: '#3cc0ff',
                    cursor: 'pointer'
                },
                selected: {
                    fill: 'blue'
                },
                selectedHover: {}
            },
            markerLabelStyle: {
                initial: {
                    fontFamily: 'Verdana',
                    fontSize: 12,
                    fontWeight: 500,
                    cursor: 'default',
                    fill: '#374151'
                },
                hover: {
                    cursor: 'pointer'
                },
                selected: {},
                selectedHover: {}
            },
            regionStyle: {
                initial: {
                    fill: '#e3eaef',
                    fillOpacity: 1,
                    stroke: 'none',
                    strokeWidth: 0,
                    strokeOpacity: 1
                },
                hover: {
                    fillOpacity: .7,
                    cursor: 'pointer'
                },
                selected: {
                    fill: '#000'
                },
                selectedHover: {}
            },
            regionLabelStyle: {
                initial: {
                    fontFamily: 'Verdana',
                    fontSize: '12',
                    fontWeight: 'bold',
                    cursor: 'default',
                    fill: '#35373e'
                },
                hover: {
                    cursor: 'pointer'
                }
            },
            onRegionClick: function(event, code) {
                // Handle region click events
            },
            onMarkerClick: function(event, markerIndex) {
                // Handle marker click events
            },
            onMarkerSelected: function(code, isSelected, selectedMarkers) {
                // Handle marker selection events
            },
            onRegionTooltipShow: function(tooltip, code) {
                // Customize region tooltips
            },
            onMarkerTooltipShow: function(tooltip, index) {
                // Customize marker tooltips
            }
        });

        // Get the route data from the PHP code
        var routes = <?php echo json_encode($routes); ?>;

        // Add markers for each route
        routes.forEach(route => {
            map.addMarker(route.departure, {
                name: route.departure,
                coords: route.departureCoords,
                label: route.departure,
                offset: [15, 10]
            });

            map.addMarker(route.arrival, {
                name: route.arrival,
                coords: route.arrivalCoords,
                label: route.arrival,
                offset: [15, 10]
            });

            // Add lines between departure and arrival markers
            map.addLines([{
                from: route.departure,
                to: route.arrival
            }]);
        });

        // Update the map size on window resize
        window.addEventListener('resize', () => {
            map.updateSize();
        });
    </script>
</body>
</html>