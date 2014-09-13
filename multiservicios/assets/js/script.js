var _multiservicios_ = angular.module("App", []);


_multiservicios_.directive("busqueda", function() {
	return {
		link: function($rootScope, $elm, $attr) {
			$rootScope.Servicios[$attr.attrBusqueda] = angular.element($elm)[0] 
		}
	}
});

_multiservicios_.directive("mapa", function($http) {
	return {
		link: function($rootScope, $elm, $attr) {
			var contenedormapa = angular.element($elm)[0];
			var id = $attr.id;
			var pueblo = $attr.attrPueblo;

			$http
			.get("https://maps.google.com/maps/api/geocode/json?address=" + pueblo + "&sensor=false")
			.success(function(response) {
				var __lat = response.results[0].geometry.location.lat;
				var __lng = response.results[0].geometry.location.lng;
				var ubicacion = new google.maps.LatLng(__lat, __lng)
				var mapOptions = {
					zoom: 11,
					center: ubicacion
				};

				map = new google.maps.Map(document.getElementById(id), mapOptions);

				var alcance = {
					strokeColor: "#FF0000",
					strokeOpacity: 0.8,
					strokeWeight: 2,
					fillColor: "#FF0000",
					fillOpacity: 0.35,
					map: map,
					center: new google.maps.LatLng(__lat, __lng),
					radius: 5000
	    			};

				cityCircle = new google.maps.Circle(alcance);
				
				var marker = new google.maps.Marker({
					position: ubicacion,
					map: map,
					title: "Asistecnic - Multiservicios"
			  	});
				try{google.maps.event.addDomListener(window, "load", initialize)}catch(err){};
			});
		}
	}
});

var controladorPrincipal = function($rootScope, $scope) {
	$rootScope.Servicios = {};

	$scope.buscar = function(abuscar) {
		angular.forEach($rootScope.Servicios, function(value, key) {
			var __elemento__ = angular.element(value);
			var __abuscar__ = abuscar.toLowerCase();

			if(key.indexOf(__abuscar__) > -1){
				__elemento__.removeClass("nomostrar");
			}else{
				__elemento__.addClass("nomostrar");
			}
		});
	}
}