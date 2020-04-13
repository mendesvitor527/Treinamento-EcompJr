<?php

class CompanyController{
    public function index(){
        header("Location : /Treinamento/views/admin/company/index.php")
    }

    public function create(){
        header("Location : /Treinamento/views/admin/company/create.php");
    }

    public function store(){
        $company = Company::create($_POST)
        header("Location : /Treinamento/views/admin/company/edit.php");
    }

    public function edit($id){
        $company = Company::getConnection();
        header("Location : /Treinamento/views/admin/company/edit.php");
    }
//atualiza a pagina
    public function update($id){
        header("Location : /Treinamento/views/admin/company/update.php");
    }

    public function delete($id){

        header("Location : /Treinamento/views/admin/company/delete.php");
    }

    public static function all(){
        $companies = Company::all();
    }

}
?>