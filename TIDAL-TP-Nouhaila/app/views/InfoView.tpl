
{include file='header.tpl'}

<div class="container">

    <div class="container">
        <h2 class="title"> Sources</h2>
        <div class="container">
        <table>
            <tr>
                <td>
                    <label>Partie SMARTY</label>
                </td>
                <td>
                    <a href="https://github.com/smarty-php/smarty">Source 1 </a> 
                </br>
                    <a href=" https://www.smarty.net/docsv2/fr/">Source 2 </a> 
                </td>
            </tr>
            <tr>
                <td>
                    <label>Partie MVC</label>
                </td>
                <td>
                    <a href="https://github.com/DawidYerginyan/simple-php-mvc">Source 1 </a> 
                </td>
            </tr>
            <tr>
                <td>
                    <label>Partie interface BDD</label>
                </td>
                <td>
                    <a href="https://www.w3schools.com/php/php_mysql_connect.asp">Source 1 </a> 
                </td>
            </tr>
            <tr>
                <td>
                    <label>Partie AJAX</label>
                </td>
                <td>
                    <a href="https://api.jquery.com/jQuery.post/">Source 1 </a> 
                </td>
            </tr>
            <tr>
                <td>
                    <label>Partie PHPDocumentor</label>
                </td>
                <td>
                    <a href="https://packagist.org/packages/phpdocumentor/phpdocumentor">Source 1 </a> 
                </td>
            </tr>
            <tr>
                <td>
                    <label>Partie XML-XSD</label>
                </td>
                <td>
                    <a href="https://www.w3schools.com/xml/schema_simple.asp">Source 1 </a> 
                </td>
            </tr>
            <tr>
                <td>
                    <label>Partie LAMP</label>
                </td>
                <td>
                    <a href="https://medium.com/better-programming/how-to-install-lamp-stack-on-ubuntu-db77ac018116">Source 1 </a> 
                </td>
            </tr>
        </table>
        </div>

        </p>
        {if isset($error)}
        <small class="error">{$error}</small>
        {/if}
    </div>

{include file='footer.tpl'}




