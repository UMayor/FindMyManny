
/*
 * Funcionalidad para mapas
 */


function mapLocation() {
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var chicago = new google.maps.LatLng(37.334818, -121.884886);
        var mapOptions = {
            zoom: 7,
            center: chicago
        };
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        directionsDisplay.setMap(map);
        calcRoute()
    }

    function calcRoute() {
        var start = new google.maps.LatLng(-33.4236662, -70.6141365);
        //var end = new google.maps.LatLng(38.334818, -181.884886);
        var end = new google.maps.LatLng(-33.4232095, -70.6067547);
        /*
var startMarker = new google.maps.Marker({
            position: start,
            map: map,
            draggable: true
        });
        var endMarker = new google.maps.Marker({
            position: end,
            map: map,
            draggable: true
        });
*/
        var bounds = new google.maps.LatLngBounds();
        bounds.extend(start);
        bounds.extend(end);
        map.fitBounds(bounds);
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                directionsDisplay.setMap(map);
            } else {
                alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}
mapLocation();

/*
 * Fin funciones Google Maps API
 */

/*
 * Funciones genericas
 */
    
    $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
          $('[data-toggle="popover"]').popover();
      });

    function passOlvidar(){
        alert("Contraseña enviada por correo electrónico.");
    }

    function updateTextInput(val) {
          document.getElementById('textInput').value = val+" Meses"; 
    }
  
    function mostrarAlert(nom){
        $("."+nom+"_alert").fadeIn();
        setTimeout(function(){
            $("."+nom+"_alert").fadeOut();
          }, 2000);
    }
    
    function deshacer(nom){
        $("."+nom+"_a").fadeIn();
        setTimeout(function(){
            $("."+nom+"_a").fadeOut();
          }, 2000);
    }
    

     
      
        
        
        
        
        