<?php


class FilterModel{

    private $conn = null;

    public function __construct(){ //permet de se connecter avec la BD
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $this->conn = new PDO("mysql:host=$servername;dbname=tli", $username, $password,    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    
    }

    public function getPathologies($nom = '',$type = "0",$caracts = "0"){//permet de récupérer les données de patho dans la BD
        
        $query = "SELECT *  FROM patho,meridien  WHERE meridien.code = patho.mer"; // requête 

        if($nom != "") $query .= " AND meridien.nom LIKE '%$nom%'"; // Si filtrer par nom 
        if($type != "0") $query .= " AND patho.type = '$type'";
        if($caracts != "0") $query .= " AND patho.desc LIKE '%$caracts%'";

        $stmt = $this->conn->query($query);
        $pathologies = $stmt->fetchAll();

        return $pathologies;

    }
}


?>