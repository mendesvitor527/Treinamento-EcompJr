<?php


class UserController{

    public function check(){
        $user = User::findUser($_POST['email'], $_POST['password']);
        if($user){
            $_SESSION['user'] = $user->name;
        }else{
            $_SESSION['failed'] = True;
        }(
    }

    public static function verifyLogin(){
        $user = User::findUser($_POST['email'], $_POST['password']);
        if($_SESSION['email'] == $user->email && $_SESSION['password'] == $user->password){
            $_SESSION['failed'] = FALSE;
        }else{
            $_SESSION['failed'] = True;
        }
    }

    public static function logout(){
        sessio_start();
        session_destroy();
        header('Location: /Treinamento/home/login');
    }
    
}

?>