<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" ng-app="crudApp"><!-- Declarar aplicación agular-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>	CRUD GASTOS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body > <!-- Lógica -->
	<div class="container">
    <div class="row" ng-controller="newController">
      <h1>{{newTitle}}</h1>
      <h2>{{fullname('anabel','canseco')}}</h2>
    </div>
    <div class="col-sm">
      <a href="#!crear" class="btn btn-info" >Crear</a>
    </div>
    <div class="col-sm">
     <a href="#!mostrar" class="btn btn-success">Mostrar</a>
    </div>

  
  <div ng-view >
  	
  </div>
</div>


	<script type="text/javascript" src="<?php echo base_url("node_modules/jquery/dist/jquery.min.js") ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("node_modules/angular/angular.min.js") ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("node_modules/angular-route/angular-route.min.js") ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("_static/custom.js") ?>"></script>
</body>
</html>