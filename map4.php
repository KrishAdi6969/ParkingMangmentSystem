<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Display navigation directions</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
  <link href="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.js"></script>
  <style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    .marker {
      border: none;
      border-radius: 50%;
      width: 10px;
      height: 10px;
      background-color: #d00;
      cursor: pointer;
    }
    .popup {
      width: 200px;
      height: 100px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .popup a {
      display: block;
      width: 100px;
      height: 30px;
      background-color: #d00;
      color: #fff;
      text-align: center;
      line-height: 30px;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.3.1/mapbox-gl-directions.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.3.1/mapbox-gl-directions.css" type="text/css">
  <div id="map"></div>

  <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FuaS0xMSIsImEiOiJjbHZtbjgzeHcwM29zMmlvNG5nbW8wZW15In0.ZXcSMrGNGwCpUrshXE6Jrw';
    const map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v12',
      center: [-79.4512, 43.6568],
      zoom: 13
    });

    // Add geolocation control to the map
    const geolocate = new mapboxgl.GeolocateControl({
      positionOptions: {
        enableHighAccuracy: true
      },
      trackUserLocation: true,
      showUserLocation: true,
      showAccuracyCircle: false
    });
    map.addControl(geolocate);

    map.on('load', function() {
      // Wait for the map to finish loading before initializing the Directions plugin.
      map.addControl(
        new MapboxDirections({
          accessToken: mapboxgl.accessToken,
          unit: 'metric'
        }),
        'top-left'
      );

      // Set the user's location as the starting point for the directions.
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var start = [position.coords.longitude, position.coords.latitude];
          map.setCenter(start);
          map.setZoom(15);

          // Add a marker at the user's location
          new mapboxgl.Marker()
            .setLngLat(start)
.addTo(map);

          // Add three markers in Coimbatore
          new mapboxgl.Marker()
            .setLngLat([76.9625, 10.9881])
            .setPopup(new mapboxgl.Popup().setHTML('<h3>1</h3>'))
            .addTo(map);

          new mapboxgl.Marker()
            .setLngLat([76.901891, 10.900751])
            .setPopup(new mapboxgl.Popup().setHTML(`
              <div class="popup">
                <h3>AB1 PARKING</h3>
                <a href="your_car.php">Book Now</a>
              </div>
            `))
            .addTo(map);

          new mapboxgl.Marker()
            .setLngLat([76.89779, 10.906621])
            .setPopup(new mapboxgl.Popup().setHTML(`
              <div class="popup">
                <h3>AB3 PARKING</h3>
                <a href="your_car.php">Book Now</a>
              </div>
            `))
            .addTo(map);

          // Set the destination for the directions.
          map.getSource('directions').setData({
            type: 'Feature',
            properties: {},
            geometry: {
              type: 'LineString',
              coordinates: [start, [76.9625, 10.9881], [76.9833, 11.0167], [76.9477, 10.9868]]
            }
          });
        });
      }
    });
  </script>

</body>
</html>