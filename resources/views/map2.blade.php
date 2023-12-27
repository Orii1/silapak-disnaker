<!DOCTYPE html>
<html lang="en">

<head>


    <!-- leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <style>
        #mapid {
            aspect-ratio: 1/1;
            width: 100%;
            border-radius: 10px;
            z-index: 0;
        }
    </style>
</head>


<body>
    <div id="mapid"></div>

    <!-- Include Leaflet and other scripts -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>


    <script>
        var mymap = ''
        var latitude = {{$lat}}
        var longitude = {{$lng}}
        //ambil data gps

        showMap(latitude,longitude)
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
                    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    //     '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    //     'Imagery � <a href="https://www.mapbox.com/">Mapbox</a>',
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
