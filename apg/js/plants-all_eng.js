var map;
var marker;
var info_window;

function gmap_initialize_inner(id, zoomIn, coordLat, coordLng) {
	var point1 = new google.maps.LatLng(coordLat, coordLng);
	// var point1 = new google.maps.LatLng(61.1970166, 75.5634774, 3);
	var myOptions = {
		zoom: 12,
		center: point1,
		// mapTypeId: google.maps.TravelMode.DRIVING,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE,
			position: google.maps.ControlPosition.LEFT_CENTER
		}
	};
	map = new google.maps.Map(document.getElementById(id), myOptions);
}

function gmap_initialize(id, zoomIn, centerLat, centerLong, whell) {
	var point1 = new google.maps.LatLng(centerLat, centerLong, zoomIn);
	var myOptions = {
		zoom: zoomIn,
		center: point1,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true,
		zoomControl: true,
		scrollwheel: false,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE,
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		styles: [{
			"featureType": "water",
			"elementType": "all",
			"stylers": [{
				"hue": "#e9ebed"
			}, {
				"saturation": -78
			}, {
				"lightness": 67
			}, {
				"visibility": "simplified"
			}]
		}, {
			"featureType": "landscape",
			"elementType": "all",
			"stylers": [{
				"hue": "#ffffff"
			}, {
				"saturation": -100
			}, {
				"lightness": 100
			}, {
				"visibility": "simplified"
			}]
		}, {
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [{
				"hue": "#bbc0c4"
			}, {
				"saturation": -93
			}, {
				"lightness": 31
			}, {
				"visibility": "simplified"
			}]
		}, {
			"featureType": "poi",
			"elementType": "all",
			"stylers": [{
				"hue": "#ffffff"
			}, {
				"saturation": -100
			}, {
				"lightness": 100
			}, {
				"visibility": "off"
			}]
		}, {
			"featureType": "road.local",
			"elementType": "geometry",
			"stylers": [{
				"hue": "#e9ebed"
			}, {
				"saturation": -90
			}, {
				"lightness": -8
			}, {
				"visibility": "simplified"
			}]
		}, {
			"featureType": "transit",
			"elementType": "all",
			"stylers": [{
				"hue": "#e9ebed"
			}, {
				"saturation": 10
			}, {
				"lightness": 69
			}, {
				"visibility": "on"
			}]
		}, {
			"featureType": "administrative.locality",
			"elementType": "all",
			"stylers": [{
				"hue": "#2c2e33"
			}, {
				"saturation": 7
			}, {
				"lightness": 19
			}, {
				"visibility": "on"
			}]
		}, {
			"featureType": "road",
			"elementType": "labels",
			"stylers": [{
				"hue": "#bbc0c4"
			}, {
				"saturation": -93
			}, {
				"lightness": 31
			}, {
				"visibility": "on"
			}]
		}, {
			"featureType": "road.arterial",
			"elementType": "labels",
			"stylers": [{
				"hue": "#bbc0c4"
			}, {
				"saturation": -93
			}, {
				"lightness": -2
			}, {
				"visibility": "simplified"
			}]
		}]
	};
	map = new google.maps.Map(document.getElementById(id), myOptions);
	if (centerLat !== '' && centerLong !== '') {
		map.setCenter({
			lat: centerLat,
			lng: centerLong
		});
	}
}



function gen_moscow_map(moscowArray){
	var retHtmlString = '';
	if (moscowArray.length > 0){
		for (var j = 0; j < moscowArray.length; j++) {
			retHtmlString+= '<p><strong><a href="' + moscowArray[j].url + '" style="color: #029bb5">' + moscowArray[j].name + '</a></strong></p>';
		}
	}
	return retHtmlString;
}

function gmap_add_marker(c,moscowArray) {
	var a = new google.maps.LatLng(c.lat, c.lng);

	if (c.notShow == false) {

		var b = new google.maps.Marker({
			position: a,
			map: map,
			title: c.name,
			icon: c.markerColor,
			animation: google.maps.Animation.DROP,
		});

		google.maps.event.addListener(b, "click", function() {
			if (info_window) {
				info_window.close()
			}
			if (c.notShow == false) {

				if(typeof(moscowArray) !== 'undefined'){
					var moscowValues = gen_moscow_map(moscowArray);
					info_window = new google.maps.InfoWindow({
						content: '<div class="map_info_window" style="width: 300px">' + moscowValues + '</div>'
					});
				}else{
					info_window = new google.maps.InfoWindow({
						content: '<div class="map_info_window" style="width: 250px"><p><strong><a href="' + c.url + '" style="color: #029bb5">' + c.name + '</a></strong></p></div>'
					});
				}
			} else if (c.notShow == true) {
				info_window = new google.maps.InfoWindow({
					content: '<div class="map_info_window"><p><strong>' + c.name + '</strong></p><p></p></div>'
				});
			}

			google.maps.event.addListener(info_window, 'domready', function() {
				$(".sliderLink2").on('click', function(event) {
					event.preventDefault();
					var galDir = $(this).attr('href');
				});
			});

			info_window.open(map, b);

		});

	}

};







///////////////////////////////////
var centerLat = '';
var centerLong  = '';

function init() {

	gmap_initialize('factoryBox',3,54.3554639,83.3235818,true);

/*---------------------*/
	var markersArrayMoscow = [
		{"lat":"56.168497642172774","lng":"36.99878260116577","name" : "Senege New Polymer Plant","notShow": false,"url": "\/eng\/plants\/senege-new-polymer-plant\/","markerColor": 'http://europlast.ru/uploads/Products/product_369/pin1.png',"moscow" : true},
		{"lat":"56.167087916206334","lng":"37.00163647155762","name" : "Plarus Plastic Recycling Plant","notShow": false,"url": "\/eng\/plants\/plarus-plastic-recycling-plant\/","markerColor": 'http://europlast.ru/uploads/Products/product_368/pin1.png',"moscow" : true},
		{"lat":"56.07338063252559","lng":"37.123773541259766","name" : "Europlast Plant in Solnechnogorsk","notShow": false,"url": "\/eng\/plants\/europlast-plant-in-solnechnogorsk\/","markerColor": 'http://europlast.ru/uploads/Products/product_367/pin1.png',"moscow" : true},
	];
	var markersArray = [
		{"lat":"56.168497642172774","lng":"36.99878260116577","markerColor": 'http://europlast.ru/uploads/Products/product_369/pin1.png',"name" : "Senege New Polymer Plant","notShow": true,"url": "\/eng\/plants\/senege-new-polymer-plant\/"},
		{"lat":"56.167087916206334","lng":"37.00163647155762","markerColor": 'http://europlast.ru/uploads/Products/product_368/pin1.png',"name" : "Plarus Plastic Recycling Plant","notShow": true,"url": "\/eng\/plants\/plarus-plastic-recycling-plant\/"},
		{"lat":"56.07338063252559","lng":"37.123773541259766","markerColor": 'http://europlast.ru/uploads/Products/product_367/pin1.png',"name" : "Europlast Plant in Solnechnogorsk","notShow": true,"url": "\/eng\/plants\/europlast-plant-in-solnechnogorsk\/"},
		{"lat":"47.1973402","lng":"39.702544999999986","markerColor": 'http://europlast.ru/uploads/Products/product_366/pin5.png',"name" : "Europlast Plant in Rostov","notShow": false,"url": "\/eng\/plants\/europlast-plant-in-rostov\/"},
		{"lat":"43.3719194","lng":"131.99285780000002","markerColor": 'http://europlast.ru/uploads/Products/product_365/pin6.png',"name" : "Europlast Plant in Primorsky Territory","notShow": false,"url": "\/eng\/plants\/europlast-plant-in-primorsky-territory\/"},
		{"lat":"55.740364","lng":"49.11116889999994","markerColor": 'http://europlast.ru/uploads/Products/product_364/pin2.png',"name" : "Europlast Plant in Kazan","notShow": false,"url": "\/eng\/plants\/europlast-plant-in-kazan\/"},
		{"lat":"56.134066","lng":"93.35344029999999","markerColor": 'http://europlast.ru/uploads/Products/product_363/pin4.png',"name" : "Europlast Plant in Krasnoyarsk","notShow": false,"url": "\/eng\/plants\/europlast-plant-in-krasnoyarsk\/"},
		{"lat":"59.57047844494104","lng":"30.150111904412825","markerColor": 'http://europlast.ru/uploads/Products/product_362/pin0.png',"name" : "Europlast Plant in St. Petersburg","notShow": false,"url": "\/eng\/plants\/europlast-plant-in-st-petersburg\/"},
		{"lat":"56.87526099999999","lng":"60.627144000000044","markerColor": 'http://europlast.ru/uploads/Products/product_361/pin3.png',"name" : "Europlast Plant in Ekaterinburg","notShow": false,"url": "\/eng\/plants\/europlast-plant-in-ekaterinburg\/"}
	];
/*---------------------*/



	if (markersArray.length > 0){
		for (var i = 0; i < markersArray.length; i++) {
			gmap_add_marker(markersArray[i]);
		}
	}

	if (typeof(markersArrayMoscow) !== 'undefined'){
		if (markersArrayMoscow.length > 0){
			for (var j = 0; j < markersArrayMoscow.length; j++) {
				if (j == 0){
					gmap_add_marker(markersArrayMoscow[j],markersArrayMoscow);
				}
			}
		}
	}

}

init();