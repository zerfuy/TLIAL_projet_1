
{include file='header.tpl'}

<div class="container">
    <h2>List Pathologie</h2>

    <form class="form" action="{$project_path}/filter" method="post" id="filterForm"><!-- Post permet de ne pas afficher dans l'URL -->
       
        <!--Tapper le nom de méridien  -->
        <input name="nom" value="" id="nom" placeholder="Le nom de méridien">
        <!-- categories -->
        <select name="category" id="category">
            <option value="0">Selectioner la categorie</option>
            {foreach from=$categories item=$cat key=$index}
                <option value="{$cat.name}">{$cat.name}</option>
            {/foreach}
        </select>
        <!-- le bouton recherche 
        <button type="submit">Recherche</button>-->
    </form>
    <!-- le résultat de la recherche qui représente le tableau, on peut le voir dans FilterResult.tpl  -->
    <div id="result">
        {include file="FilterResult.tpl"}
    </div>
  </div>
  <script src="{$project_path}/public/js/filter.js"></script>

{include file='footer.tpl'}




