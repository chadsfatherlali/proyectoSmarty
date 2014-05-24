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