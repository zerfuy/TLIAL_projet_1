<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link id ="pagestyle" href="{$project_path}/public/css/style.css" rel="stylesheet" type="text/css" />
<title> Ca pique mais c'est bon ! </title>
<!-- On appelle la biliotheque JQUERY (Bibliotheque de JS)  -->
<script src="{$project_path}/public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="navbar">
  <a href="{$project_path}/" class="{if !isset($smarty.get.url)}active{/if}">Accueil</a>
  <a title="recherche par mots clés" href="{$project_path}/search" class="{if isset($smarty.get.url) && $smarty.get.url == 'search'}active{/if}">Recherche</a>
  <a href="{$project_path}/filter" class="{if isset($smarty.get.url) && $smarty.get.url == 'filter'}active{/if}">Pathologie</a>
  <a href="{$project_path}/info" class="{if isset($smarty.get.url) && $smarty.get.url == 'info'}active{/if}">Informations</a> 

  {if isset($smarty.session.TIDAL_USER_ID)}
  <a href="{$project_path}/logout">déconnexion</a>
  {else}
  <a href="{$project_path}/register" class="{if isset($smarty.get.url) && $smarty.get.url == 'register'}active{/if}">Inscription</a>
  <a href="{$project_path}/login" class="{if isset($smarty.get.url) && $smarty.get.url == 'login'}active{/if}">Connexion</a>
  {/if}


  <!-- AAA CSS handling  -->
  <script>
    $(document).ready(function(){
    $('#mode').click(function(){
    if(document.getElementById('pagestyle').getAttribute('href')=="{$project_path}/public/css/style.css"){
    $('#mode').attr('value','Normal')
    document.getElementById('pagestyle').setAttribute('href','{$project_path}/public/css/styleAAA.css')
    }
    else
    {
    $('#mode').attr('value','AAA')
    document.getElementById('pagestyle').setAttribute('href','{$project_path}/public/css/style.css')
    }
    })
    });
  </script>
  <input type=button id="mode" title="Button to switch color Mode" class="btn btn-primary" value="AAA" >  </div>

</div>
{if isset($smarty.session.TIDAL_USER_ID)}
<p class="user-name">
{if $smarty.now|date_format:"%H" > 4 && $smarty.now|date_format:"%H" < 18}
Bonjour
{else}
Bonsoir
{/if}

<b>{$smarty.session.TIDAL_USER_NAME}</b> vous êtes connecté!</p>
{/if}

