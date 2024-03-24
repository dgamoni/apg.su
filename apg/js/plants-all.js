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
		{"lat":"56.168497642172774","lng":"36.99878260116577","name" : "\u0417\u0430\u0432\u043e\u0434 \u043d\u043e\u0432\u044b\u0445 \u043f\u043e\u043b\u0438\u043c\u0435\u0440\u043e\u0432 \u00ab\u0421\u0435\u043d\u0435\u0436\u00bb","notShow": false,"url": "\/plants\/zavod-novyih-polimerov-senezh\/","markerColor": 'http://europlast.ru/uploads/Products/product_358/pin1.png',"moscow" : true},
		{"lat":"56.167087916206334","lng":"37.00163647155762","name" : "\u0417\u0430\u0432\u043e\u0434 \u043f\u043e \u043f\u0435\u0440\u0435\u0440\u0430\u0431\u043e\u0442\u043a\u0435 \u043f\u043b\u0430\u0441\u0442\u043c\u0430\u0441\u0441 \u00ab\u041f\u043b\u0430\u0440\u0443\u0441\u00bb","notShow": false,"url": "\/plants\/zavod-po-pererabotke-plastmass-plarus\/","markerColor": 'http://europlast.ru/uploads/Products/product_359/pin1.png',"moscow" : true},
		{"lat":"56.07338063252559","lng":"37.123773541259766","name" : "\u0421\u043e\u043b\u043d\u0435\u0447\u043d\u043e\u0433\u043e\u0440\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": false,"url": "\/plants\/solnechnogorskiy-zavod-evroplast\/","markerColor": 'http://europlast.ru/uploads/Products/product_352/pin1.png',"moscow" : true}
	];
	var markersArray = [
		{"lat":"56.168497642172774","lng":"36.99878260116577","markerColor": '/wp-content/themes/apg/img/maps_pin/pin1.png',"name" : "\u0417\u0430\u0432\u043e\u0434 \u043d\u043e\u0432\u044b\u0445 \u043f\u043e\u043b\u0438\u043c\u0435\u0440\u043e\u0432 \u00ab\u0421\u0435\u043d\u0435\u0436\u00bb","notShow": true,"url": "\/plants\/zavod-novyih-polimerov-senezh\/"},
		{"lat":"56.167087916206334","lng":"37.00163647155762","markerColor": '/wp-content/themes/apg/img/maps_pin/pin1.png',"name" : "\u0417\u0430\u0432\u043e\u0434 \u043f\u043e \u043f\u0435\u0440\u0435\u0440\u0430\u0431\u043e\u0442\u043a\u0435 \u043f\u043b\u0430\u0441\u0442\u043c\u0430\u0441\u0441 \u00ab\u041f\u043b\u0430\u0440\u0443\u0441\u00bb","notShow": true,"url": "\/plants\/zavod-po-pererabotke-plastmass-plarus\/"},
		{"lat":"56.07338063252559","lng":"37.123773541259766","markerColor": '/wp-content/themes/apg/img/maps_pin/pin1.png',"name" : "\u0421\u043e\u043b\u043d\u0435\u0447\u043d\u043e\u0433\u043e\u0440\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": true,"url": "\/plants\/solnechnogorskiy-zavod-evroplast\/"},
		{"lat":"47.1973402","lng":"39.702544999999986","markerColor": '/wp-content/themes/apg/img/maps_pin/pin5.png',"name" : "\u0420\u043e\u0441\u0442\u043e\u0432\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": false,"url": "\/plants\/rostovskiy-zavod-evroplast\/"},
		{"lat":"43.3719194","lng":"131.99285780000002","markerColor": '/wp-content/themes/apg/img/maps_pin/pin6.png',"name" : "\u041f\u0440\u0438\u043c\u043e\u0440\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": false,"url": "\/plants\/primorskiy-zavod-evroplast\/"},
		{"lat":"55.740364","lng":"49.11116889999994","markerColor": '/wp-content/themes/apg/img/maps_pin/pin2.png',"name" : "\u041a\u0430\u0437\u0430\u043d\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": false,"url": "\/plants\/kazanskiy-zavod\/"},
		{"lat":"56.134066","lng":"93.35344029999999","markerColor": '/wp-content/themes/apg/img/maps_pin/pin4.png',"name" : "\u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": false,"url": "\/plants\/krasnoyarskiy-zavod-evroplast\/"},
		{"lat":"59.57047844494104","lng":"30.150111904412825","markerColor": '/wp-content/themes/apg/img/maps_pin/pin0.png',"name" : "\u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": false,"url": "\/plants\/sankt-peterburgskiy-zavod-evroplast\/"},
		{"lat":"56.87526099999999","lng":"60.627144000000044","markerColor": '/wp-content/themes/apg/img/maps_pin/pin3.png',"name" : "\u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433\u0441\u043a\u0438\u0439 \u0437\u0430\u0432\u043e\u0434 \u00ab\u0415\u0432\u0440\u043e\u043f\u043b\u0430\u0441\u0442\u00bb","notShow": false,"url": "\/plants\/ekaterinburgskiy-zavod-evroplast\/"}
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