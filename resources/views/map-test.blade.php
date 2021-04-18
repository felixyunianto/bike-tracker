<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />

</head>

<body>

    <div id='map' style='width: 400px; height: 300px;'></div>
    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoibGl4dGVjaDIwIiwiYSI6ImNrZHl6YzhzMjFtc2oyeW5zNXlsc2FvYmwifQ.7NsPJ2KvcqlM0dC-qBQ6Yw';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });

    </script>

</body>

</html>
