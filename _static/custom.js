angular.module('crudApp',['ngRoute'])
.config(['$routeProvider',function($routeProvider) {
	$routeProvider
    .when('/crear', {
        templateUrl: '../application/views/crud/crear.html',
        controller: 'crearController'
    })
	.when('/mostrar', {
        templateUrl: '../application/views/crud/mostrar.html',
        controller: 'mostrarController'
    })
    .when('/editar', {
        templateUrl: '../application/views/crud/editar.html',
        controller: 'crudController'
    })
    .otherwise({
        redirectTo: "/"
    });
}])
.controller('crudController', ['$scope', function($scope){
	$scope.title = "Bienvenidos a su control de gastos";

	
}])
.controller('crearController', ['$scope','$http', function($scope, $http){
    $scope.tituloCrear = "Bienvenidos a crear nuevo";

    $scope.config = {
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    };

    $scope.crear = function () {
        
        console.log($scope.form);
        $http.post('Gastos/guardar', $scope.form, $scope.config)
        .then(function(response){
            console.log(response.data);
            $scope.message = response.data.message;
            $scope.class = response.data.class;

        }).catch(function(response){
            console.log('Error:'  + response);
        })
    }
    
}])
.controller('mostrarController', ['$scope','$http', function($scope,$http){
    
    $scope.mostrarTitulo = "Mostrar Listado de Gastos";
    
    function mostrar(){
        //Método get.
        $http.get('Gastos/mostrar')
        .then(function(r){
            $scope.gastos = r.data
        }).catch(function(r){
            console.log('Error:'  + r.data);
        });  
   }
   //
   mostrar();

   $scope.editar = function(object){
    $scope.descripcion = object.descripcion;
     $scope.form = object;
    }

    $scope.actualizar = function (){
        //Petición
        console.log($scope.form);
    }

}])
.controller('newController', ['$scope', function($scope){
	//$scopes es un objeto de angularjs usado globalmente entre el controlador y la vista
	$scope.newTitle ="Nuevo título";
	$scope.fullname = function (firstname, lastname){
		 return firstname +' ' + lastname;
	}
}])