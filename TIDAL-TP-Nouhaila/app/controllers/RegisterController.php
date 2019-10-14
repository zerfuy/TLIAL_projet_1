<?php

/**
 * URL = /register
 */

class Register{
    public function __construct()
    {
        if(isset($_SESSION['TIDAL_USER_ID'])){
            header('location:'.$GLOBALS['project_path'].'/');
            exit;
        }

        include __DIR__ . "/../models/UserModel.php";//on fait appel à UserModel 
        require_once __DIR__ . "/../../vendor/autoload.php";//on fait appel à Autoload pour utiliser SMARTY
        
        $form = ['login'=>'','pass'=>'','fname'=>'','lname'=>''];
        
        $model = new UserModel();
        $smarty = new Smarty();//on fait appel à la class SMARTY
        if(isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['fname']) && isset($_POST['lname'])){
            $form = $_POST;//elle permet 
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];

            $user = $model->register($login,$pass,$fname,$lname);

            switch ($user) {
                case 0:
                    $smarty->assign('error','/Erreur de SGBD - inscription impossible.');
                    break;

                case 1:
                    $smarty->assign('error','/Erreur - login déjà utilisé.');
                    break;

                case 2:
                    $smarty->assign('error','/Erreur - le mot de passe doit contenir au moins 8 charactères dont une majuscule, un chiffre et un charactère spécial.');
                    break;
                
                default:
                    $_SESSION['TIDAL_USER_ID'] = $user['id_User'];
                    $_SESSION['TIDAL_USER_NAME'] = $user['firstname'];
                    header('location:'.$GLOBALS['project_path'].'/');
                    break;
            }
        }
        $smarty->setTemplateDir(__DIR__ . '/../views/');//définir le chemin des templates(Views)
        $smarty->assign('form',$form);
        $smarty->assign('project_path',$GLOBALS['project_path']);
        $smarty->display('RegisterView.tpl');

    }
}

?>