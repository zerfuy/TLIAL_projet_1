<?php
// index.php?url={var}
$project_path = str_replace('\\', '/', dirname(__FILE__));
$project_path = str_replace($_SERVER["DOCUMENT_ROOT"],"",$project_path);

if(isset($_GET['url'])){ //il voit est ce qu'il y a le paramètre URL dans le lien
    $url = $_GET['url'];//ramène l'URL
    $url = rtrim($url, '/');//enlève les / ajoutées à la fin 
    // a/b/c => $url[0]:a, $url[1]:b ...
    $url = explode('/', $url);//voir fichier WORD
    //
    $controller = ucfirst($url[0]) . "Controller.php";
    // ucfirst : permet de rendre le premier caractèer en majuscule
    if( file_exists("app/controllers/$controller") ){
        // Si le fichier app/controllers/{url}Controller.php exists
        include "app/controllers/$controller"; //on appelle le fichier
        $class = ucfirst($url[0]);
        new $class(); //eg: new Filter(), appel à la classe Filter qui se trouve dans FilterController.php
    }else{
        // Sinon
        echo "Page not found";
    }

}else{
    echo "<a style='display:block;text-align:center;margin-top:1rem' href='$project_path/filter'>Filtrage</a>";
    echo "<a style='display:block;text-align:center;margin-top:1rem' href='$project_path/output'>PhpDocumentor</a>";
    echo "<a style='display:block;text-align:center;margin-top:1rem' href='$project_path/webservices/WS-simple/calculatrice/addition/1/2'>Web Services caculatrice</a>";
    echo "<a style='display:block;text-align:center;margin-top:1rem' href='$project_path/webservices/WS-xml'>Web Services XML</a>";
}