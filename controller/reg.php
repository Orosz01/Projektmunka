<?php
$hosszu="";
if(isset($_SESSION['F_Id'])){
    header("Location:index.php?page=fooldal");
    }
include 'includes/db.inc.php';
$felhasznalonev="";
$email="";
$jelszo=""; 
$ures="";
if(isset($_POST['reg'])){
if(!empty($_POST['username']) and !empty($_POST['pasword']) and !empty($_POST['pasword_again']) and !empty($_POST['email'])){
    if(strlen($_POST['username'])>21){
    $hosszu="A megadott felhasználónév túl hosszú<br>";
    }
    $un = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE username = '".$_POST['username']."'");
    $em = mysqli_query($conn, "SELECT * FROM felhasznalok WHERE email = '".$_POST['email']."'");

    if(mysqli_num_rows($un)) {
       $felhasznalonev=('Ez a felhasználónév már foglalt<br>');
    }elseif(mysqli_num_rows($em)){
    $email=('Ezzel az email címmel már regisztrálva van');
    }elseif($_POST['pasword']!=$_POST['pasword_again']){
        $jelszo= "Nem egyeznek a jelszavak<br>";

    }elseif($jelszo == "" && $felhasznalonev == "" && $email == ""){
        if(strlen($_POST['username'])<21){
        
        $sql ="INSERT INTO felhasznalok(username, pasword, email)
        VALUES ('".htmlspecialchars(mysqli_real_escape_string($conn,$_POST['username']))."','".md5($_POST['pasword'])."','".htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']))."')";

        if($conn->query($sql) == TRUE){
            echo "success";
            header('Location:index.php?page=login');
        }else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
}
}else
$ures="Nem töltötted ki a mezőt/mezőket";
}
include "view/Reg.php";

?>