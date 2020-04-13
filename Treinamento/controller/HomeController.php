<?php
class HomeController{

    public function login(){
        $user = UserController::verifyLogin();
    }

    public function index(){

    }

}
