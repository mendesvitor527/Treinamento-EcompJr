<?php


class User{

    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($id, $name, $email, $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function findUser($email, $password){
        $connection = Connection::getConnection();
        $query = "select * from users where email = '{$email}' and password = '{$password}'";
        $result = msqli_query($connection, $query);
        if(mysqli_num_row($result) == 1){
            $user = msqli_fetch_assoc($result);
            return new User($user['id'], $user['name'], $user['email'], $user['password']);
        }
       
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setNome($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

}


?>