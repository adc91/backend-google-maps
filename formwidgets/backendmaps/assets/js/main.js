var marker = new Array;

function inicializar(x, y, zoom, index, mapDiv, custom)
{
    let latlng = new google.maps.LatLng(x, y);

    let myOptions = {
        zoom: zoom,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    let map = new google.maps.Map(document.getElementById(mapDiv + '-div'), myOptions);

    if (custom) {
        latlng = new google.maps.LatLng(x, y);
    } else {
        latlng = new google.maps.LatLng(0, 0);
    }

    marker[index] = new google.maps.Marker({
        position: latlng,        
        map: map
    });

    google.maps.event.addListener(map, 'click', function(event) {
        placeMarker(mapDiv, index, marker, event.latLng);
    });  
}

function placeMarker(mapDiv, index, market, location)
{
    marker[index].setPosition(location);
    var setMapPosition = [marker[index].getPosition().lat(), marker[index].getPosition().lng()];
    $('#' + mapDiv).val(setMapPosition.join(','));
}