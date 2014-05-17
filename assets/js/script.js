var _multiservicios_ = angular.module("App", []);

_multiservicios_.directive("busqueda",function() {
	return {
		link: function($rootScope, $elm, $attr) {
			$rootScope.Servicios[$attr.attrBusqueda] = angular.element($elm)[0] 
		}
	}
});

var controladorPrincipal = function($rootScope, $scope) {
	$rootScope.Servicios = {};

	$scope.buscar = function(abuscar) {
		var re = new RegExp(abuscar,"gi");

		angular.forEach($rootScope.Servicios, function(value, key) {
			if(abuscar.match(key)){
				console.log("DEV:", key);
			}
		});
	}
}