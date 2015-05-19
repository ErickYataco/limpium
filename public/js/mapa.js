

function initialize() {
    var myLatlng = new google.maps.LatLng(-12.127878, -76.988738);
    var mapOptions = {
        zoom: 18,
        center: myLatlng
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var image = {
        url: '../img/maps/thunderstorm.png',
        // This marker is 20 pixels wide by 32 pixels tall.
        size: new google.maps.Size(40, 52),
        // The origin for this image is 0,0.
        origin: new google.maps.Point(0,0),
        // The anchor for this image is the base of the flagpole at 0,32.
        anchor: new google.maps.Point(0, 52)
    };

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon:image
        //title: 'Hello World!'
    });

    //'<b>No reportado:</b> Juan Perez <a href="#"> ver ficha<a/> <br/>' +
    //'<b>No reportado:</b> Miguel Anastacio <a href="#"> ver ficha<a/>'+

    //'<ul>'+
    //'<li><img src="../img/avatar1.jpg?1403934956"/><b>No reportado:</b> Juan Perez <a href="#"> ver ficha<a/> </li>'+
    //'<li><img src="../img/avatar10.jpg?1403934956"/><b>No reportado:</b> Juan Perez <a href="#"> ver ficha<a/> </li>'+
    //'</ul>'

    marker.info = new google.maps.InfoWindow({
        content:'<ul class="header-nav header-nav-profile">'+
                '<li class="dropdown">'+
                '<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">'+
                '<img src="../img/avatar1.jpg?1403934956" alt="" />'+
                '<span class="profile-info">'+
                'Juan Perez'+
                '<small><b>No reportado </b> </small>'+
                '</span>'+
                '</a>'+
                '</li>'+
                '</ul>'+
                '<ul class="header-nav header-nav-profile">'+
                    '<li class="dropdown">'+
                '<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">'+
                '<img src="../img/avatar1.jpg?1403934956" alt="" />'+
                '<span class="profile-info">'+
                'Miguel Anastacio'+
                '<small><b>No reportado</small>'+
                '</span>'+
                '</a>'+
                '</li>'+
                '</ul>'
    });

    google.maps.event.addListener(marker, 'click', function() {
        marker.info.open(map, marker);
    });

    map.controls[google.maps.ControlPosition.TOP_LEFT].push(
        document.getElementById('legend'));
}

google.maps.event.addDomListener(window, 'load', initialize);