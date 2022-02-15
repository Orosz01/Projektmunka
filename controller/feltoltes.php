<?php

$i = 0;
$errors = array();
if(isset($_FILES["fileToUpload"])){
$target_dir = "Termekek/";

$allowd_filetypes =array('image/png','image/jpg','image/jpeg');
foreach($_FILES["fileToUpload"]["name"] as $key => $name){
 $target_file = $target_dir . basename($name);
 
 if (!in_array($_FILES["fileToUpload"]["type"][$key], $allowd_filetypes)){
     $errors[$key][] = "A $name file nem jpg / png / jpeg";
 }
 if(!isset($errors[$key])){
     if (@move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key] , $target_file)){
    $i ++;
            }
            else {
                $errors[$key][] = "Hiba történt a $name file mentésekor";
            }
        }
    }
}
?>
        <?php
        

include 'view/Feltoltes.php';

?>