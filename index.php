<?php
define('ROOT', dirname(__FILE__).'/');
require ("classes/base.class.php");
$main_page = 'home';
header('Content-Type: text/html; charset=utf-8');
include (file_exists(ROOT . "pages/$mode.php"))? (ROOT . "pages/$mode.php"): (ROOT . "pages/404.php"); //For new updates