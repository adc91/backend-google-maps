$(function(){
  
  var map;
  var marker;

  function inicializar(x, y, zoom, custom) {
    var latlng = new google.maps.LatLng(x, y);

    var myOptions = {
      zoom: zoom,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map"), myOptions);

    if(custom)
      latlng = new google.maps.LatLng(x, y);
    else
      latlng = new google.maps.LatLng(0, 0);

    marker = new google.maps.Marker({
      position: latlng,        
      map: map
    }); 

    google.maps.event.addListener(map, 'click', function(event) {
      placeMarker(event.latLng);
    }); 
  }

  function placeMarker(location) {
    marker.setPosition(location);

    var setMapPosition = [marker.getPosition().lat(), marker.getPosition().lng()];
    
    $("#" + inputLatLngID).val(setMapPosition.join(','));
  }

  var getMapPosition = $("#" + inputLatLngID).val().split(',');
  
  inicializar(getMapPosition[0], getMapPosition[1], 15, true);
});