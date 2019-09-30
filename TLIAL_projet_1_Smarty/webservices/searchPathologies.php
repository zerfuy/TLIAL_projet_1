<?php
        $host = '127.0.0.1';
        $db   = 'tli';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
             $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        
        $pathos = [];

        if ($_GET['activeKeyWords'] == "") {
            if ($_GET['type'] == ""){
                echo (json_encode($pathos));
                return;
            }
        } else {
            $s = explode( ',', $_GET['activeKeyWords']);
            $t = "";
            $count = count($s);

            foreach($s as $v){
                $t = $t . "'" . $v . "'";
                if (--$count > 0) {
                    $t = $t . ", ";
                }
            }
        }

        
        if ($_GET['type'] == "" && $_GET['activeKeyWords'] != ""){
            $stmt = $pdo->query("SELECT idp, mer, type, 'desc' FROM patho WHERE idp in (
                                    SELECT idp from symptpatho WHERE idS in (
                                        SELECT idS from symptome WHERE idS in (
                                            SELECT idS from keysympt where idK in(
                                                SELECT idK from keywords WHERE name in (" .$t. ")))))");
        } else if ($_GET['type'] != "" && $_GET['activeKeyWords'] != "") {
            $stmt = $pdo->query("SELECT idp, mer, type, 'desc' FROM patho WHERE type LIKE " . $_GET['type'] . " AND idp in (
                                    SELECT idp from symptpatho WHERE idS in (
                                        SELECT idS from keysympt where idK in(
                                                SELECT idK from keywords WHERE name in (" .$t. ")))))");
        } else if ($_GET['type'] != "" && $_GET['activeKeyWords'] == "") {
            $stmt = $pdo->query("SELECT idp, mer, type, 'desc' FROM patho WHERE type LIKE " . $_GET['type'] . " AND idp in (
                                    SELECT idp from symptpatho WHERE idS in (
                                        SELECT idS from symptome WHERE idS in (
                                            SELECT idS from keysympt)))");
        }

        while ($row = $stmt->fetch()){
            array_push($pathos, $row);
        }

        echo (json_encode($pathos));
?>