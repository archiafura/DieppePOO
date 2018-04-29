<?php

define("PATHCONF", "./conf/");
date_default_timezone_set('Europe/Paris');

require_once "./function/classAutoLoader.php";
spl_autoload_register('classAutoLoader');




$test = new Form(PATHCONF, "inscription");
$test->frmGenerate();




$toto = new Querie();
$who = new Querie();

if($result = $toto->selectMethod("SELECT * FROM t_admin")) {

    Debug::dump($result);
}

else{
    echo"erreur";
}

if($what = $who->selectMethod("SELECT ADMNAME FROM t_admin")) {
    Debug::dump($what);
}

else{
    echo"erreur";
}

/* idée avant corrigé


require_once "./classes/Form.php";

$presentation = new Form();
$presentation-> nom = "Isabel";
$presentation-> prenom = "VILTARD";
$presentation-> password = "123456";
$presentation-> method = "post";

*/


