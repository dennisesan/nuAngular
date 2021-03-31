<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" ng-app="miApp"><!-- Declarar aplicación agular-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> CRUD GASTOS</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body > <!-- Lógica -->
  <div class="container" ng-controller="miControlador">
    <p ng-bind="titulo"></p>
    {{subtitulo}}<br>
    <span ng-bind="titulo"></span>

    <input type="text" ng-model="nombre">
    {{nombre}}

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>




  <script type="text/javascript" src="<?php echo base_url("node_modules/jquery/dist/jquery.min.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("node_modules/angular/angular.min.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("node_modules/angular-route/angular-route.min.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("_static/example.js") ?>"></script>
</body>
</html>