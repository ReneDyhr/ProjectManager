if(localStorage.lat == undefined){
    localStorage.lat = 55.25;
}
if(localStorage.lng == undefined){
    localStorage.lng = 9.49;
}


var styles =
[{
    featureType: "road",
    elementType: "geometry.fill",
    stylers: [{
        color: "#ffffff"
    }, {
        weight: 1.9
    }]
}, {
    featureType: "road.local",
    elementType: "geometry.fill",
    stylers: [{
        color: "#f0f0f0"
    }, {
        weight: 1.4
    }]
}, {
    featureType: "all",
    elementType: "labels.text.fill",
    stylers: [{
        color: "#333333"
    }]
}, {
    featureType: "all",
    elementType: "labels.icon",
    stylers: [{
        hue: "#000000"
    }, {
        saturation: -100
    }, {
        lightness: 0
    }]
}, {
    featureType: "landscape.natural",
    elementType: "geometry",
    stylers: [{
        color: "#d0d0d0"
    }]
}, {
    featureType: "landscape.man_made",
    elementType: "geometry.stroke",
    stylers: [{
        color: "#888888"
    }]
}, {
    featureType: "landscape.man_made",
    elementType: "geometry.fill",
    stylers: [{
        color: "#cccccc"
    }]
}, {
    featureType: "poi",
    elementType: "geometry",
    stylers: [{
        color: "#bbbbbb"
    }]
}, {
    featureType: "poi.attraction",
    elementType: "geometry",
    stylers: [{
        color: "#bbbbbb"
    }]
}, {
    featureType: "poi.business",
    elementType: "geometry",
    stylers: [{
        color: "#bbbbbb"
    }]
}, {
    featureType: "poi.medical",
    elementType: "geometry",
    stylers: [{
        color: "#bbbbbb"
    }]
}, {
    featureType: "poi.park",
    elementType: "geometry",
    stylers: [{
        color: "#bbbbbb"
    }]
}, {
    featureType: "poi.school",
    elementType: "geometry",
    stylers: [{
        color: "#bbbbbb"
    }]
}, {
    featureType: "poi.sports_complex",
    elementType: "geometry.fill",
    stylers: [{
        color: "#bbbbbb"
    }]
}, {
    featureType: "water",
    elementType: "geometry",
    stylers: [{
        color: "#999999"
    }]
}];
