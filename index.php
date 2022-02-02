<?php
session_start();

require 'includes/header.inc.php';

$page="fooldal";

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];
    }
}

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