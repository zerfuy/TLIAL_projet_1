<?php


class FilterModel{

    private $conn = null;

    public function __construct(){ //permet de se connecter avec la BD
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $this->conn = new PDO("mysql:host=$servername;dbname=tli", $username, $password,    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    
    }

    public function getPathologies($nom = '',$caracts = "0", $codes){//permet de récupérer les données de patho dans la BD
        
        $query = "SELECT *  FROM patho,meridien  WHERE meridien.code = patho.mer"; // requête 
        if($nom != "") $query .= " AND meridien.nom LIKE '%$nom%'"; // Si filtrer par nom 
        $nom = "%".$nom."%";
        $strcodes = "";
        if($codes != 0){
            foreach ($codes as $val) {
                $strcodes .= "'";
                $strcodes .= $val;
                $strcodes .= "'";
                $strcodes .= ", ";
            }
            $strcodes = substr($strcodes, 0, -2);
            $query .= " AND patho.type in ($strcodes) ";
        }
        
        if($caracts != "0") $query .= " AND patho.desc LIKE '%$caracts%'";
        $query .= " limit 20";
        $caracts = "%".$caracts."%";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['caracts'=>$caracts, 'strcodes'=>$strcodes, 'nom'=>$nom]);
        $pathologies = $stmt->fetchAll();

        return $pathologies;

    }
}


?>