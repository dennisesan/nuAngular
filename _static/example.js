
//primera parte para declarar angular.
angular.module('miApp', [])
.controller('miControlador', ['$scope', function($scope){
	$scope.subtitulo = 'Hola mundo';
}])
