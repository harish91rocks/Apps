var locations = [
    {
        "lat": "17.415054",
        "lng": "78.457588",
        "html": "<div><b>India</b><br/><b>Axelta Systems Pvt.Ltd</b><br/><span>H.No : 6-3-571/a/12,</span><br><span>2nd Floor, Suhana Rockdale,</span><br><span>Somajiguda, Khairatabad</span><br><span>Hyderabad - 500082.</span><br><span>Telangana. India</span><br><span class='glyphicon glyphicon-earphone text-success'> </span> <a href='tel:+919908112221'>+91-9908112221</a><br><span class='glyphicon glyphicon-earphone text-success'> </span> <a href='tel:+919949923705'>+91-9949923705</a></div>",
        "html-target": "#address_india"
    },
    {
        "lat": "36.06186",
        "lng": "-94.170568",
        "html": "<div><b>United States</b><br/><b>Axelta Systems Pvt.Ltd</b><br/><span>707 W Treadwell st, Apt #6,<span><br/> Fayetteville,<br/>Arkansas, 72701<br/><span class='glyphicon glyphicon-earphone text-success'> </span> <a href='tel:+(201) 885-0929'>(201) 885-0929</a></div>",
        "html-target": "#address_us"
    },
    {
        "lat": "53.8509799",
        "lng": "-1.5327171",
        "html": "<div><b>United Kingdom</b><br><b>Axelta Systems Pvt.Ltd</b><br><span>107, Ingledew Court,</span><br><span>Leeds LS17 8TY</span><br><span>UK</span><br></div>",
        "html-target": "#address_uk"
    }
];
var styles = [
    {
        stylers: [
            {hue: "#0f0"},
            {saturation: -50},
            {"invert_lightness": false}
        ]
    }
];
var mapContainer = document.getElementById('contact_us_google_map');
//if (screen.width > 767) {
//    loadGoogleMap();
//} else {
//    $(mapContainer).hide();
//}
loadGoogleMap();
function loadGoogleMap() {
    $.getScript("http://maps.google.com/maps/api/js?libraries=geometry&sensor=false&language=en", function () {
        var markers = [];
        var map = new google.maps.Map(mapContainer, {
            zoom: 8,
            center: new google.maps.LatLng(17.4808, 78.3895), //(25, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        //map.setOptions({styles: styles});
        for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i]["lat"], locations[i]["lng"]),
                map: map
            });
            markers.push(marker);
            if (screen.width > 767) {
                new google.maps.InfoWindow({content: getMarkerHtml(i)}).open(map, markers[i]);
            }
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                var infowindow = new google.maps.InfoWindow();
                return function () {
                    geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'latLng': marker.position}, function () {
                        infowindow.setContent(getMarkerHtml(i));
                        infowindow.open(map, marker);
                    });
                };
            })(marker, i));
        }
        mapFitBounds();
        function getMarkerHtml(i) {
            var html = locations[i]['html'], $target = $(locations[i]["html-target"]);
            if ($target.length === 1) {
                html = $target.html();
            }
            return html;
        }
        function mapFitBounds() {
            map.fitBounds(markers.reduce(function (bounds, marker) {
                return bounds.extend(marker.getPosition());
            }, new google.maps.LatLngBounds()));
        }
        window.onresize = function () {
            mapFitBounds();
        };
        $(mapContainer).css('position', 'relative');
        $overlay = $('<div></div>');
        $overlay.css({'position': 'absolute', 'left': 0, 'top': 0, 'right': 0, 'bottom': 0, 'z-index': 1000});
        $overlay.appendTo($(mapContainer));
        $overlay.click(function () {
            $overlay.hide();
        });
        $('body').click(function (e) {
            if (!$(e.target).is($(mapContainer)) && $(e.target).closest($(mapContainer)).length === 0) {
                $overlay.show();
            }
        });
    });
}