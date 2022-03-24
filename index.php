<?php
session_start();
require 'includes/db.inc.php';
require 'modell/user.php';
require 'modell/egyeble.php';
require 'modell/kartyale.php';
require 'modell/penzle.php';
require 'modell/tazole.php';
require 'includes/header.inc.php';

$tanulo = new User;
$egyeb = new Egyeb;
$kartya = new Kartya;
$penz = new Penz;
$tazo = new Tazo;

$page="fooldal";
$category="";
if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}
if(!empty($_REQUEST['action'])) {
	if($_REQUEST['action'] == 'logout') session_unset();
}
if(!empty($_REQUEST['action'])) {
	if($_REQUEST['action'] == 'Penznem') $category=$_REQUEST['action'];
}
if(!empty($_SESSION["F_Id"])){
$menupontok = array('fooldal' => "Főoldal",
                    'termekek' => "Termékek",
                    'feltoltes' => "Feltöltés",
                    'prof' => "Profil",
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

include 'controller/'.$page.'.php';
include 'includes/menu.inc.php';

?>

</body>