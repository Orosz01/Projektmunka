<?php

include 'includes/db.inc.php';
$loginerorr="";
$loginerrorr="";
$loginEror=""; 
if(isset($_POST['username']) and isset($_POST['pasword']) and isset($_POST['pasword_again']) and isset($_POST['email'])){

    $un = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE username = '".$_POST['username']."'");
    $em = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE email = '".$_POST['email']."'");

    if(mysqli_num_rows($un)) {
       $loginerorr=('Ez a felhasználónév már foglalt');
    }elseif(mysqli_num_rows($em)){
    $loginerrorr=('Ezzel az email címmel már regisztrálva van');
    }elseif($_POST['pasword']!=$_POST['pasword_again']){
        $loginEror= "Nem egyeznek a jelszavak";

    }elseif($loginEror == "" && $loginerorr == "" && $loginerrorr == ""){
    
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
}
include "view/Reg.php"

?>