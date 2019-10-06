
{include file='header.tpl'}

<div class="container">
    <h2>List Pathologie</h2>

    <div class="container">
        <h3 class="title"> A propos</h3>
        <p>
            Site consacré à la médecine par accuponcture.
            Contact : 
            Tel : 06 66 66 66 66
            Mail : ex.ample@gmail.com
        </p>
        {if isset($error)}
        <small class="error">{$error}</small>
        {/if}
    </div>

{include file='footer.tpl'}




