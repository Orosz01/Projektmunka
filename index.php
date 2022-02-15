<?php
session_start();
require 'includes/db.inc.php';
require 'modell/user.php';
require 'includes/header.inc.php';
$tanulo = new User;

$page="fooldal";

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}
if(!empty($_REQUEST['action'])) {
	if($_REQUEST['action'] == 'logout') session_unset();
}
if(!empty($_SESSION["F_Id"])){
$menupontok = array('fooldal' => "Főoldal",
                    'termekek' => "Termékek",
                    'feltoltes' => "Feltöltés",
                    'logout' => "Kijelentkezés");
}else
$menupontok = array('fooldal' => "Főoldal",
                    'termekek' => "Termékek",
                    'login' => "Bejelentkezés",
                    'reg' => "Regisztráció");
$title = $menupontok[$page];
?>

<body>
<?php

include 'includes/menu.inc.php';
include 'controller/'.$page.'.php';

?>

</body>