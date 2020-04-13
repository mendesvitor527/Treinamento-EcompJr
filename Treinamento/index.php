<?php 

    require_once "Router.php";
    require_once "dataBase/Connection.php";
    require_once "model/User.php";
    require_once "model/Company.php";
    require_once "controller/UserController.php";
    require_once "controller/HomeController.php";
    require_once "controller/CompanyController.php";

    $router = new Router();
    $router->start($_GET);