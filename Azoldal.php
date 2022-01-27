<?php
session_start();
$menupontok = array('Fooldal' => "Főoldal",
                    'Termekek' => "Ülésrend",
                    'Belepes' => "Belépés",
                    'Regisztracio' => "Regisztráció");
$title = $menupontok[$page];
?>