//    AIzaSyAdsNY_b7657tH035mNdXQ7uxhNN1RuGXo
function initMap() {
    var lojaBruna = {
        lat: -23.536237,
        lng: -46.686383
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: lojaBruna,
        zoomControl: true,
        scaleControl: true,
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: lojaBruna,
        map: map
    });

    google.maps.event.addDomListener(window, 'resize', function () {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
}
