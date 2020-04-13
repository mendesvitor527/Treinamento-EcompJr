<?php

namespace model;

class Company{


    private $id;
    private $name;
    private $federation;

    public static function create($name, $federation)
    {
        $connection = Company::getConnection();
        $query = "";
        $result = mysqli_query($connection, $query);
    }

    public function all()
    {
        $connection = Connection::getConnection();
        $query = "select * from companys";
        $result = mysqli_query($connection, $query);
        $companies;
        for($i = 0; $i < mysqli_num_rows($result); $i++)
        {
            $company = mysqli_fetch_assoc($result);
            $companies[$i] = new Company($company['id'], $company['name'], $company['federation']);
        }
        return $companies;
    }

    public function __construct($id, $name, $federation)
    {
        $this->id = $id;
        $this->name = $name;
        $this->federation = $federation;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFederation()
    {
        return $this->federation;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setFederation($federation)
    {
        return $this->federation = $federation;
    }
}

?>