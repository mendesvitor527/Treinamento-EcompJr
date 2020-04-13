<?php 
    require_once "../../dataBase/Connection.php";
    require_once "../../model/User.php";
    require_once "../../controller/UserController.php";
    UserController::verifyLogin();
    echo "Olá ".$_SESSION['user'];
?>
<a href="/Treinamento/user/logout">Sair</a>

<br>
<br>
<div>
    <a href="/Treinamento/company/index">Listar empresas</a>
    <a href="/Treinamento/company/create">Cadastrar empresa</a>
</div>