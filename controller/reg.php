<?php

include 'includes/db.inc.php';
if(isset($_POST['username']) and isset($_POST['pasword']) and isset($_POST['email'])){

$sql ="INSERT INTO felhasznalok(username, pasword, email)
VALUES ('".mysqli_real_escape_string($conn,$_POST['username'])."','".md5($_POST['pasword'])."','".mysqli_real_escape_string($conn,$_POST['email'])."')";

if($conn->query($sql) == TRUE){
    echo "success";
    header('Location:index.php?page=login');
    }else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
}
include "view/Reg.php"

?>