<?php 

require_once "../vendor/autoload.php";
require_once "database.php";
require_once "core/config.php";
require_once "core/Controller.php";
require_once "core/App.php";


$app = new App($url);
define('INC_ROOT', dirname(__DIR__));
define('ASSET_ROOT',
    'http://'.$_SERVER['HTTP_HOST'].
    str_replace(
        $_SERVER['DOCUMENT_ROOT'],
        '',
        str_replace('\\', '/', INC_ROOT).'/public'
    )
);

echo ASSET_ROOT;

?>