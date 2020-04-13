<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../model/User.php";
    require_once "../../../controller/UserController.php";
    UserController::verfifyLogin();    
?>

<html>
    <form action="/Treinamento/company/store" method="post">
        <input name="name" placeholder="name">
        <input name="federation" placeholder="federation">          
        <button type="submit"> Cadastrar </button>        
    </form>
</html>