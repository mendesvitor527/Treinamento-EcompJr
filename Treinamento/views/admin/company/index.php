<?php
    require_once "../../../dataBase/Connection.php"
    require_once "../../../model/User.php"
    require_once "../../../controller/UserController.php"
    require_once "../../../model/Company.php"
    require_once "../../../controller/CompanyController.php"
    UserController::verifyLogin();
?>



<a href="/Treinamento/company/edit/ <?php echo $company->getId()?>">
<button>
editar
</button>
</a>

<a href="/Treinamento/company/delete">
<button>
excluir
</button>
</a>

<a href="/Treinamento/company/update">
<button>
atualizar
</button>
</a>


<?php

    $companies = CompanyController::all();
    foreach ($companys as $company) {
        echo $company->getName();
        echo " | ";
        echo $company->getFedartion();
        echo "<br>";
?>
