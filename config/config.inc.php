<?php

/* FRANQUIA DO DO SITE */

define ('TITULO', 'Painel Administrativo');

/* CONEÇÃO COM O BANCO DE DADOS */
define('USUARIO','root');
define('SENHA','');
define('BANCO_DE_DADOS','crud_php');
define('LOCAL','localhost');
/** AUTOLOAD DE CLASSE */
function __autoload ($Classe){
    require __DIR__ . '/crud/'. $Classe . '.class.php';

}