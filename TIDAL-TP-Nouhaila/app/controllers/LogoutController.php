<?php

/**
 * URL = /logout
 */

class Logout{
    public function __construct()
    {
       session_destroy();
       header('location:'.$GLOBALS['project_path'].'/');
    }
}

?>