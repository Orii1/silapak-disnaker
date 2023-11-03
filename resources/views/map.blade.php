<!DOCTYPE html>
<html lang="en">

<head>


	<!-- leaflet css -->
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
	 integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	 crossorigin="" />

<style>

                  #mapid {
                aspect-ratio: 3/1;
                width: 100%;
                border-radius: 10px;
                z-index: 0;
            }
</style>
</head>


<body>
	 <div id="mapid"></div>


    {{-- <input type="text" name="lat" id="lat" disabled>
    <input type="text" name="lng" id="lng" disabled> --}}

	 <!-- Include Leaflet and other scripts -->
	 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	 crossorigin="">

                    </script>


                   <script>

                         var mymap = ''

        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            //result.innerHTML = "Getting the position information...";
        } else {
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }

        // Define callback function for successful attempt
        function successCallback(position) {
           // result.innerHTML = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
           var latlng = position.coords.latitude + ',' + position.coords.longitude;
        //    alert(latlng);
        //    var lat = document.getElmentById(latlng);
        //     lat.value = position.coords.latitude;

             //$('#lng').val(position.coords.longitude);
            var accuracy = position.coords.accuracy;

            // $('#akuratnya').text('Akurasi Jarak: '+accuracy+ 'meter');
            showMap(position.coords.latitude, position.coords.longitude);
            // showMapFocus(position.coords.latitude, position.coords.longitude);

        }

        // Define callback function for failed attempt
        function errorCallback(error) {
            if(error.code == 1) {
                alert("You've decided not to share your position, but it's OK. We won't ask you again whyyy.");

            } else if(error.code == 2) {
                alert("The network is down or the positioning service can't be reached.");
            } else if(error.code == 3) {
                alert("The attempt timed out before it could get the location data.");
            } else {
            alert("Geolocation failed due to unknown error.");;
            }
        }

         //ambil data gps

        //function showmmap jar

        function showMap(latitude, longitude) {
             //remove map and render the new map
            if (mymap) {
                mymap.remove();
                mymap = undefined
            }

            //make map area
            mymap = L.map("mapid").setView(
                [latitude, longitude],
                15
            );


            //setting maps using api mapbox not google maps, register and get tokens
            L.tileLayer(
                "https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    maxZoom: 25,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery � <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: "mapbox/streets-v11",
                    tileSize: 512,
                    zoomOffset: -1,
                }
            ).addTo(mymap);


            //add marker position with variabel latitude and longitude
            L.marker([
                latitude, longitude
            ])
                .addTo(mymap)
                .bindPopup("Location");
        }

        //***************** end fungsimap*********************************
        //end sub map

                   </script>


</body>

</html>
