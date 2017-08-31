/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
            //Neckarsulm
            // var myLatLng = {lat:49.191694, lng:9.224556}
                    
function initMap() {
        var uluru = {lat:49.191694, lng:9.224556};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
          var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
  }
function geocoding(){
    var address = document.getElementById("myaddress").value;
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'address': address}, function(results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
            alert(latitude + ' ' + longitude );
        } 
    }); 
}



