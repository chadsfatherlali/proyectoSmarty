var ok = "#f2ffff";
var ko = "#ffe3e3";
var _texto = /^[^\d]+$/;
var _telefono = /^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/;
var _email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var _vacio = /^[^]+$/;
var _multiservicios_ = angular.module("App", []);

_multiservicios_.directive("busqueda", function() {
	return {
		link: function($rootScope, $elm, $attr) {
			$rootScope.Servicios[$attr.attrBusqueda] = angular.element($elm)[0] 
		}
	}
});

_multiservicios_.directive("solotexto", function() {
	return {
		require: "ngModel",
		link: function(scope, elm, attrs, ctrl) {
			ctrl.$parsers.unshift(function(viewValue) {
				if (_texto.test(viewValue)) {
					ctrl.$setValidity("solotexto", true);
					elm.css("background", ok);
					
					return viewValue;
				} else {
					ctrl.$setValidity("solotexto", false);
					elm.css("background", ko);
				  	
				  	return undefined;
				}
			});
		}
	};
});

_multiservicios_.directive("telefono", function() {
	return {
		require: "ngModel",
		link: function(scope, elm, attrs, ctrl) {
			ctrl.$parsers.unshift(function(viewValue) {
				if (_telefono.test(viewValue)) {
					ctrl.$setValidity("telefono", true);
					elm.css("background", ok);

					return viewValue;
				} else {
					ctrl.$setValidity("telefono", false);
					elm.css("background", ko);

					return undefined;
				}
			});
		}
	};
});

_multiservicios_.directive("email", function() {
	return {
		require: "ngModel",
		link: function(scope, elm, attrs, ctrl) {
			ctrl.$parsers.unshift(function(viewValue) {
				if (_email.test(viewValue)) {
					ctrl.$setValidity("email", true);
					elm.css("background", ok);

					return viewValue;
				} else {
					ctrl.$setValidity("email", false);
					elm.css("background", ko);

					return undefined;
				}
			});
		}
	};
});

_multiservicios_.directive("vacio", function() {
	return {
		require: "ngModel",
		link: function(scope, elm, attrs, ctrl) {
			ctrl.$parsers.unshift(function(viewValue) {
				if (_vacio.test(viewValue)) {
					ctrl.$setValidity("vacio", true);
					elm.css("background", ok);

					return viewValue;
				} else {
					ctrl.$setValidity("vacio", false);
					elm.css("background", ko);

					return undefined;
				}
			});
		}
	};
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
					center: ubicacion,
					scrollwheel: false,
    					navigationControl: false,
    					mapTypeControl: false,
    					scaleControl: false,
    					draggable: false
				};

				map = new google.maps.Map(document.getElementById(id), mapOptions);

				// var alcance = {
				// 	strokeColor: "#FF0000",
				// 	strokeOpacity: 0.8,
				// 	strokeWeight: 2,
				// 	fillColor: "#FF0000",
				// 	fillOpacity: 0.35,
				// 	map: map,
				// 	center: new google.maps.LatLng(__lat, __lng),
				// 	radius: 5000
	   //  			};

				// cityCircle = new google.maps.Circle(alcance);
				
				// var marker = new google.maps.Marker({
				// 	position: ubicacion,
				// 	map: map,
				// 	title: "Asistecnic - Multiservicios"
			 //  	});
				try{google.maps.event.addDomListener(window, "load", initialize)}catch(err){};
			});
		}
	}
});

var controladorPrincipal = function($rootScope, $scope, $http) {
	$scope.ShowMenu = false;
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

	$scope.enviarInfo = function($element) {
		var form = $scope.formContacto;

		if(form.nombre.$dirty
		&& form.nombre.$valid
		&& form.telefono.$dirty
		&& form.telefono.$valid
		&& form.email.$dirty
		&& form.email.$valid
		&& form.mensaje.$dirty
		&& form.mensaje.$valid) {
			$http(
				{
					method: "GET", 
					url: "rest/contacto_rest",
					params: {"datos": $scope.user}
				}
			).
    		success(function(data, status, headers, config) {
      			alert("Se envio el correo correctamente, gracias");
    		}).
    		error(function(data, status, headers, config) {
    			alert("Se produjo un error por favor intente más tarde.")
    		});
		}
		else {
			alert("Por favor revise el formulario");
		}
	}
}