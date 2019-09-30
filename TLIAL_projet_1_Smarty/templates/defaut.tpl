<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<title> Ca pique mais c'est bon ! </title>
</head>
<body>

<div id="Sidenav1" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="?action=defaut" id="linkAccueil">Accueil</a>
  <a href="?action=connexion" id="linkConnexion">Connexion</a>
  <a href="?action=Inscription_Formulaire" id="linkinscription">Inscription</a>
  <a href="?action=information" id="linkInformations">Information</a> 
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
            <div class="grid-container">
                <input type="text" id="motCle" onkeyup="keyWordSearchUpdate();">
                
            </div>
            <div class="row">
                <div class="column">
                    <h2>Suggestions : </h2>
                    <div id="suggestionsDiv" class="column">
                    </div>
                </div>
                
                <div class="column">
                    <h2>Mots clés activés : </h2>
                    <div id="activeKeyWordsDiv" class="column">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
  </div>
  <div id="mainsection">
    <div id="PathosDiv" class="column">
    </div>
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
<script src="js/accueil.js"></script>
   
</body>
</html> 