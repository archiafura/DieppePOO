<?php
define("PATHCONF", "./conf/");
date_default_timezone_set("Europe/Paris");
require_once "./function/classAutoLoader.php";
spl_autoload_register('classAutoLoader');
$test = new Formulaire(PATHCONF, "inscription");
$test->frmCheck();

