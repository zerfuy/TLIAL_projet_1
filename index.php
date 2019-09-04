<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title> Ca pique mais c'est bon ! </title>
</head>
<body>

<div id="Sidenav1" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="./index.php" id="linkAccueil">Accueil</a>
  <a href="./Connexion.php" id="linkConnexion">Connexion</a>
  <a href="./Informations.php" id="linkInformations">Informations</a> 
</div>

<main id="main">
  <div id="menubar">
    <span  id="openMenuBtn" onclick="openNav()">&#9776; Menu</span>
  </div>
  <div>

    <div id="headContainer">
        <div id="tri1">
            <h2>Tri par caractéristiques : </h2>
            <div class="grid-container" id="sortingPrice">
                <label>Catégorie : </label>
                <select>
                    <option>opt1...</option>
                </select>
              </div>
        </div>

        <div id="tri2">
            <h2>Recherche par mots clés : </h2>
            <div class="grid-container" id="sortingPrice">
                <input type="text" name="motCle">
                <br>
                <button class="grid-item" type="button" onclick="" id="rechercher">Rechercher</button>
            </div>
        </div>
    </div>
    <br>
  </div>
  <div id="mainsection">

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

    $stmt = $pdo->query("SELECT name FROM keywords");
    while ($row = $stmt->fetch())
    {
        echo nl2br ($row['name'] . "\n");
    }

?>

    
    <div id="mainContainer">
    </div>
  </div>
</main>
  
<footer>
  <div class="row">
    <a> sample </a>
  </div>
</footer>

<script src="js/navMenu.js"></script>
   
</body>
</html> 