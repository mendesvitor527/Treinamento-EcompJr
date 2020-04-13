<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../model/User.php";
    require_once "../../../controller/UserController.php";
    UserController::verfifyLogin();    
?>

<html>
    <form action="/Treinamento/company/udpate" method="post">
        <input name="name" value="<?php echo $company->getName()?>" placeholder="name">
        <input name="federation" value="<?php echo $company->getFedaration()?>" placeholder="federation">          
        <button type="submit"> Deletar </button>
    </form>
</html>