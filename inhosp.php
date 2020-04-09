<?php include_once('header.php');?>
    <head>
        <title>COVID Current Location</title>
    </head>
  
    <script>

      getLocation()
        var map;
        
       function showLocation(position)
       {
            var lat=position.coords.latitude;
            var lon=position.coords.longitude;
            var myLatLng = {lat:position.coords.latitude, lng:position.coords.longitude};
           
        //    var cords={latitude,longitude};
           document.getElementById("lat").innerHTML=lat;
           document.getElementById("lon").innerHTML=lon;
           map=new google.maps.Map(document.getElementById("map"),
                {
                    center:myLatLng,
                    zoom:5
                });
           

              addMarker({lat: 18.485870 ,lng: 73.905853 });
addMarker({lat: 28.456789 ,lng: 77.072472 });
addMarker({lat: 23.053967 ,lng: 72.603844 });
addMarker({lat: 16.511965 ,lng: 80.633163 });
addMarker({lat: 8.749402 ,lng: 78.168137 });
addMarker({lat: 22.554609 ,lng: 72.967361 });
addMarker({lat: 30.912411 ,lng: 75.819412 });
addMarker({lat: 28.653229 ,lng: 77.308601 });
addMarker({lat: 28.231674 ,lng: 80.862534 });
addMarker({lat: 21.182947 ,lng: 72.831581 });
addMarker({lat: 12.571047 ,lng: 77.001183 });
addMarker({lat: 28.575552 ,lng: 77.262192 });
addMarker({lat: 31.524620 ,lng: 75.902008 });
addMarker({lat: 17.733288 ,lng: 83.275429 });
addMarker({lat: 13.072790 ,lng: 80.234421 });
addMarker({lat: 22.674788 ,lng: 87.827484 });
addMarker({lat: 18.643318 ,lng: 73.756042 });
addMarker({lat: 15.589379 ,lng: 73.816574 });
addMarker({lat: 22.742229 ,lng: 88.051460 });
addMarker({lat: 16.709822 ,lng: 74.227463 });
addMarker({lat: 23.830975 ,lng: 80.407120 });
addMarker({lat: 20.651484 ,lng: 84.629814 });
addMarker({lat: 20.650694 ,lng: 84.631775 });
addMarker({lat: 17.357861 ,lng: 78.557442 });
addMarker({lat: 23.025570 ,lng: 72.527458 });
addMarker({lat: 13.030947 ,lng: 80.171585 });
addMarker({lat: 13.095658 ,lng: 80.206116 });
addMarker({lat: 13.109593 ,lng: 80.246666 });
addMarker({lat: 20.457838 ,lng: 85.871536 });
addMarker({lat: 17.786711 ,lng: 79.026970 });
addMarker({lat: 11.578299 ,lng: 78.753654 });
addMarker({lat: 27.597265 ,lng: 78.045441 });
addMarker({lat: 18.399286 ,lng: 73.769058 });
addMarker({lat: 25.458599 ,lng: 78.615517 });
addMarker({lat: 19.227650 ,lng: 72.840012 });
addMarker({lat: 25.766827 ,lng: 81.414467 });
addMarker({lat: 28.386002 ,lng: 77.307678 });
addMarker({lat: 10.857012 ,lng: 78.691162 });
addMarker({lat: 11.929894 ,lng: 79.824852 });
addMarker({lat: 24.184324 ,lng: 92.533638 });
addMarker({lat: 24.209656 ,lng: 92.679642 });
addMarker({lat: 18.457527 ,lng: 73.867668 });
addMarker({lat: 26.001802 ,lng: 92.848373 });
addMarker({lat: 21.216276 ,lng: 81.323608 });
addMarker({lat: 12.996090 ,lng: 77.569672 });
addMarker({lat: 28.367180 ,lng: 79.430153 });
addMarker({lat: 24.558990 ,lng: 73.722801 });
addMarker({lat: 18.524338 ,lng: 73.843887 });
addMarker({lat: 26.940351 ,lng: 75.769493 });
addMarker({lat: 26.889633 ,lng: 75.839554 });
addMarker({lat: 22.179298 ,lng: 75.586754 });
addMarker({lat: 12.907950 ,lng: 77.565063 });
addMarker({lat: 15.437003 ,lng: 75.015060 });
addMarker({lat: 20.933424 ,lng: 77.761139 });
addMarker({lat: 19.025806 ,lng: 73.041550 });
addMarker({lat: 12.923236 ,lng: 77.518456 });
addMarker({lat: 18.970409 ,lng: 76.753838 });
addMarker({lat: 16.413506 ,lng: 74.050575 });
addMarker({lat: 31.697235 ,lng: 75.788933 });
addMarker({lat: 21.323082 ,lng: 70.441826 });
addMarker({lat: 19.252562 ,lng: 72.980057 });
addMarker({lat: 22.758648 ,lng: 86.201385 });
addMarker({lat: 19.092508 ,lng: 74.749596 });
addMarker({lat: 12.906529 ,lng: 77.585831 });
addMarker({lat: 13.006752 ,lng: 77.561737 });
addMarker({lat: 30.705317 ,lng: 76.725052 });
addMarker({lat: 25.379194 ,lng: 81.877068 });
addMarker({lat: 25.473034 ,lng: 81.878357 });
addMarker({lat: 30.316700 ,lng: 78.099998 });
addMarker({lat: 9.393924 ,lng: 76.578423 });

           //add marker function
        function addMarker(coords){
          var marker= new google.maps.Marker({
         position:coords,
         map:map,
         //icon: 'icon.jpg',
        });
        }
                var markerImage = 'https://mts.googleapis.com/vt/icon/name=icons/spotlight/spotlight-waypoint-a.png&text=A&psize=16&font=fonts/Roboto-Regular.ttf&color=ff333333&ax=44&ay=48&scale=1';

                     var marker=new google.maps.Marker({
                       position:myLatLng,
                       map:map,
                       title:"You are here.",
                       icon: markerImage
                     });
       }
       function errorHandler(err) 
       {
            if(err.code == 1) {
               alert("Error: Access is denied!");
            } else if( err.code == 2) {
               alert("Error: Position is unavailable!");
            }
        }
       function getLocation()
       {



           if(navigator.geolocation)
           {
               var options = {timeout:60000};
               navigator.geolocation.watchPosition(showLocation,errorHandler,options); 
           }
           else
           {
               document.getElementById("error").value="Geolocation is not supported by this browser.";
           }
       }
       
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR99OVy8Uk2h_Y77AAvvhMyPuDeSSkHjM&callback=getLocation"
    async defer></script>

       <div>
        <h5>Your Latitude and Longitude</h5>
        <p id="lat">
        <p id="lon">
        <p id="error">
        <div id="map" style="height: 800px; width: 100% border: 1px solid skyblue;"></div>
    
