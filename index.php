<?php

define("PATHCONF", "./conf/");
date_default_timezone_set('Europe/Paris');

require_once "./classes/inscription.php";


require_once "./function/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

require_once "./classes/Log.php";
spl_autoload_register('Log');



$inscr = new inscription();

echo $inscr->input('nom');
echo $inscr->input('pseudo');
echo $inscr->submit();



/*
define('INI_FILE', 'inscription.ini');

$ini = parse_ini_file(INI_FILE);
$pseudo = isset($ini['Pseudo']) ? trim($ini['Pseudo']) : '';
$id = isset($ini['Id']) ? trim($ini['Id']) : '';
$option = isset($ini['Option']) ? trim($ini['Option']) : '';
?>

<form method="post" action="updates.php">
    Id : <input type="text" name="id" value="<?php echo $id; ?>" />
    <br />
    Pseudo : <input type="text" name="id" value="<?php echo $pseudo; ?>" />
    <br/>
    Option : <input type="text" name="id" value="<?php echo $option; ?>" />
    <br />
    <input type="submit" name="submit" value="Valider" />
</form>

*/


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


