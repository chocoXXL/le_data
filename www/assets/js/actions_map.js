
      var markers = [];
      function initMap() {
      
      //myLatlng = {lat: -25.363, lng: 131.044};
      navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
            center: LatLng,
            zoom: 16,
            //mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            //title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
        });
        document.getElementById("le_geo").value = LatLng.lat() +','+ LatLng.lng();
        console.log("Latitude: " + LatLng.lat() + "\r\nLongitude: " + LatLng.lng());
        markers.push(marker);

        //google.maps.event.addListener(marker, "click", function (e) {
            //var infoWindow = new google.maps.InfoWindow();
            //infoWindow.setContent(marker.title);
            //infoWindow.open(map, marker);
        //});
          map.addListener('click', function (e) {
              
              console.log("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                var location = e.latLng;
                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    animation: google.maps.Animation.DROP,
                  });
              DeleteMarkers();

              markers.push(marker);

              map.panTo(location);
              document.getElementById("le_geo").value = e.latLng.lat() +','+ e.latLng.lng();

          });

        });


      };

          function DeleteMarkers() {
              //Loop through all the markers and remove
              for (var i = 0; i < markers.length; i++) {
                  markers[i].setMap(null);
              }
              markers = [];
          };