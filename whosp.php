<?php include_once('header.php');?>

  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  

    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 37.9643 ,lng: -91.8318},
          zoom: 4
        });
        
        addMarker({lat: 47.668243 ,lng: -122.379852 });
addMarker({lat: 33.923801 ,lng: -118.241600 });
addMarker({lat: 37.368431 ,lng: -122.079506 });
addMarker({lat: 39.296318 ,lng: -76.592941 });
addMarker({lat: 33.121456 ,lng: -117.119720 });
addMarker({lat: 44.022705 ,lng: -92.467369 });
addMarker({lat: 41.503201 ,lng: -81.621277 });
addMarker({lat: 37.434498 ,lng: -122.171501 });
addMarker({lat: 42.362400 ,lng: -71.069206 });
addMarker({lat: 38.668037 ,lng: -121.313622 });
addMarker({lat: 34.066242 ,lng: -118.445328 });
addMarker({lat: 29.707998 ,lng: -95.397522 });
addMarker({lat: 29.709541 ,lng: -95.398605 });
addMarker({lat: 45.721867 ,lng: -122.648132 });
addMarker({lat: 40.883884 ,lng: -74.055984 });
addMarker({lat: 38.938431 ,lng: -92.327881 });
addMarker({lat: 40.710255 ,lng: -74.005058 });
addMarker({lat: 25.791466 ,lng: -80.212547 });
addMarker({lat: 40.778259 ,lng: -73.958092 });
addMarker({lat: 40.601517 ,lng: -73.961067 });
addMarker({lat: 40.945873 ,lng: -73.890671 });
addMarker({lat: 40.629234 ,lng: -74.026077 });
addMarker({lat: 40.764275 ,lng: -73.962799 });
addMarker({lat: 40.607059 ,lng: -73.960144 });
addMarker({lat: 40.734291 ,lng: -73.849434 });
addMarker({lat: 40.734310 ,lng: -73.849510 });
addMarker({lat: 40.689747 ,lng: -73.982346 });
addMarker({lat: 40.741997 ,lng: -73.986107 });
addMarker({lat: 40.689743 ,lng: -73.982368 });
addMarker({lat: 40.692696 ,lng: -73.993584 });
addMarker({lat: 40.742531 ,lng: -73.985489 });
addMarker({lat: 40.604092 ,lng: -74.473358 });
addMarker({lat: 33.926914 ,lng: -117.439392 });
addMarker({lat: 39.136597 ,lng: -84.505058 });
addMarker({lat: 38.548733 ,lng: -121.759155 });
addMarker({lat: 33.739876 ,lng: -84.512581 });
addMarker({lat: 32.338581 ,lng: -86.196114 });
addMarker({lat: 33.021221 ,lng: -96.766281 });
addMarker({lat: 29.790632 ,lng: -95.718979 });
addMarker({lat: 40.910172 ,lng: -73.780045 });
addMarker({lat: 40.873272 ,lng: -74.012093 });
addMarker({lat: 40.641621 ,lng: -73.956734 });
addMarker({lat: 40.625568 ,lng: -73.918320 });
addMarker({lat: 40.652225 ,lng: -74.006104 });
addMarker({lat: 41.707874 ,lng: -72.798370 });
addMarker({lat: 37.755634 ,lng: -122.403748 });
addMarker({lat: 40.508026 ,lng: -74.635674 });
addMarker({lat: 41.980419 ,lng: -88.063766 });
addMarker({lat: 40.442532 ,lng: -79.960175 });
addMarker({lat: 35.200500 ,lng: -89.788216 });
addMarker({lat: 43.065041 ,lng: -70.789078 });
addMarker({lat: 36.316433 ,lng: -95.629295 });
addMarker({lat: 39.214550 ,lng: -76.886368 });
addMarker({lat: 39.680668 ,lng: -80.849915 });
addMarker({lat: 42.317123 ,lng: -88.274437 });
addMarker({lat: 42.655693 ,lng: -73.803856 });
addMarker({lat: 30.443605 ,lng: -91.090599 });
addMarker({lat: 32.253006 ,lng: -110.880989 });
addMarker({lat: 30.660294 ,lng: -96.351074 });
        //addMarker({lat:22.6998697,lng:88.39098349999999});
        //add marker function
        function addMarker(coords){
          var marker= new google.maps.Marker({
         position:coords,
         map:map,
         //icon: 'icon.jpg',
        });
        }

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR99OVy8Uk2h_Y77AAvvhMyPuDeSSkHjM&callback=initMap"
    async defer></script>


 