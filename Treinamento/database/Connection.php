<?php

abstract class Connection{
    private static $connection;
    
    public static function getConnection(){
        if(!self::$connection){
            self::$connection = mysqli_connect("localhost", "root", "", "treinamento");
        }
        return self::$connection;
    }

}