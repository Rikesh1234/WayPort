<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAP</title>
    <link rel="stylesheet" href="map.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
     integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
     crossorigin=""/>
     
     <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@v0.78.0/dist/L.Control.Locate.min.css" />  

     <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
     integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
     crossorigin=""></script>

    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@v0.78.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

     <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@3.0.8/dist/esri-leaflet.js"
  integrity="sha512-E0DKVahIg0p1UHR2Kf9NX7x7TUewJb30mxkxEm2qOYTVJObgsAGpEol9F6iK6oefCbkJiA4/i6fnTHzM6H1kEA=="
  crossorigin=""></script>

<!-- Load Esri Leaflet Geocoder from CDN -->
<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.css"
  integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
  crossorigin="">
<script src="https://unpkg.com/esri-leaflet-geocoder@3.1.3/dist/esri-leaflet-geocoder.js"
  integrity="sha512-mwRt9Y/qhSlNH3VWCNNHrCwquLLU+dTbmMxVud/GcnbXfOKJ35sznUmt3yM39cMlHR2sHbV9ymIpIMDpKg4kKw=="
  crossorigin=""></script>
</head>
<body>
    <?php include_once('header.php'); ?>
    <section>
        <h1>Route</h1>
        <div class="container">
            <div class="left">

            </div>
        <div class="contains">
    <div id="map"></div>
    
    </div>
</div>
    <div class="contains">
    <button class="next">Request</button>
    </div>
  
    
</section>
    

    
</body>
<script type="module" >
    
    var map = L.map('map');
    map.setView([51.505, -0.09], 7);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19
}).addTo(map);



navigator.geolocation.watchPosition(success,error);


let marker,circle,zoomed;
var popup = L.popup();

function success(pos){
    const lat=pos.coords.latitude;
    const lng=pos.coords.longitude;
    
    
    // console.log(document.getElementById('lat').innerHTML);
    // document.getElementById('lat').innerHTML=lat;
    const accuracy=pos.coords.accuracy;
    let res;
    reverseGeocode({lat: pos.coords.latitude, lon: pos.coords.longitude})
      .then(res => {
        console.log('Reverse geocoding result', res.display_name);
    //     let postal_code,administrative_area_level_1,locality;
    //     res.forEach(function(element){
    //   element.address_components.forEach(function(element2){
    //     element2.types.forEach(function(element3){
    //       switch(element3){
    //         case 'postal_code':
    //           postal_code = element2.long_name;
    //           break;
    //         case 'administrative_area_level_1':
    //           state = element2.long_name;
    //           break;
    //         case 'locality':
    //           city = element2.long_name;
    //           break;
    //       }
    //     })
    //   });
    // });

    // console.log(postal_code+" "+administrative_area_level_1+" "+state+" "+city);
        if(marker){
        map.removeLayer(marker);
        map.removeLayer(circle);
        
    
    }
    


    popup
        .setLatLng({lat,lng})
        .setContent(res.display_name)
        .openOn(map);
        
    circle=L.circle([lat,lng,{radius:accuracy}]).addTo(map);
    marker=L.marker([lat,lng]).addTo(map).bindPopup(popup).openPopup();
    marker.on('click',function(e){
    console.log(e.latlng.lat);
});
    if(!zoomed){
    zoomed=map.fitBounds(circle.getBounds());
    }
    });

}

function error(err){
    if(err.code===1){
        alert("Please allow location access");
    }else{
        alert("Cannot get current location");
    }
}




function onMapClick(e) {
    const lat=e.latlng.lat;
    const lng=e.latlng.lng;
    
    // document.getElementById('lat').innerHTML=lat.toString();
    const accuracy=e.latlng.accuracy;
    let res;
    reverseGeocode({lat: e.latlng.lat, lon: e.latlng.lng})
      .then(res => {
        console.log('Reverse geocoding result', res);
        if(marker){
        map.removeLayer(marker);
        map.removeLayer(circle);
        
    }
    


    popup
        .setLatLng(e.latlng)
        .setContent(res.display_name)
        .openOn(map);

    circle=L.circle([lat,lng,{radius:accuracy}]).addTo(map);
    marker=L.marker([lat,lng]).addTo(map).bindPopup(popup).openPopup();
    marker.on('click',function(e){
    console.log(e.latlng.lat); 
});
    if(!zoomed){
    zoomed=map.fitBounds(circle.getBounds());
    }
    });
    
    


}
function reverseGeocode(params) {
    params.format = 'json';
    var url = new URL("https://nominatim.openstreetmap.org/reverse");
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));
    return fetch(url, {method: 'GET'}).then(res => res.json());
  }
  
map.on('click', onMapClick);



// var searchLayer = L.featureGroup().addTo(map);

// var title = new L.Control();

// var baseMaps = {
// 	'OSM Standard': basemap_0
// };
// // Leaflet Search
// L.Control.geocoder().addTo(map);


// var searchLayer = L.featureGroup().addTo(map);
// map.addControl( new L.Control.Search({layer: searchLayer}) );  

//  var geocoder = L.Control.geocoder({
//   defaultMarkGeocode: false
// })
//   .on('markgeocode', function(e) {
    
//     const lat=e.latlng.lat;
//     const lng=e.latlng.lng;
    
//     // document.getElementById('lat').innerHTML=lat.toString();
//     const accuracy=e.latlng.accuracy;
//     let res;
//     reverseGeocode({lat: e.latlng.lat, lon: e.latlng.lng})
//       .then(res => {
//         console.log('Reverse geocoding result', res);
//         if(marker){
//         map.removeLayer(marker);
//         map.removeLayer(circle);
        
//     }
    


//     popup
//         .setLatLng(e.latlng)
//         .setContent(res.display_name)
//         .openOn(map);

//     circle=L.circle([lat,lng,{radius:accuracy}]).addTo(map);
//     marker=L.marker([lat,lng]).addTo(map).bindPopup(popup).openPopup();
//     marker.on('click',function(e){
//     console.log(e.latlng.lat); 
// });
//     if(!zoomed){
//     zoomed=map.fitBounds(circle.getBounds());
//     }
//     }).addTo(map);
//   })
//   .addTo(map);
L.Control.geocoder().addTo(map);
L.control.locate().addTo(map);



</script>

</html>