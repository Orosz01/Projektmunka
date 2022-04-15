<?php
if(isset($_POST['uzi'])){
    $kat="";
    $termek="";
    $main="";
    $satek="";
   $celemail=""; 
    if($_POST['mainkat']==1){
    $kat="kartyak";
       $main=$kartya;
        $satek="set_kartya";
        }else if($_POST['mainkat']==2){
    $kat="penznem";
       $main=$penz;
        $satek="set_penz";
        }else if($_POST['mainkat']==3){
    $kat="tazok";
       $main=$tazo;
        $satek="set_tazo";
        }else if($_POST['mainkat']==4){
    $kat="egyeb_termekek";
       $main=$egyeb;
        $satek="set_egyeb";
        }

    $sql="Select email from felhasznalok where F_Id=(SELECT F_Id FROM ".$kat." Where Termek_azonosito=".$_POST['mainkat']." and ".$kat.".id=".$_POST['termekid'].")";
    if(!$result = $conn->query($sql)) echo $conn->error;
    if ($result->num_rows > 0) {
        foreach($result->fetch_assoc() as $key){
           $celemail=$key;
        }
        
    }

    $sql="Select Termek_nev from ".$kat." where ".$kat.".id=".$_POST['termekid']."";
    if(!$result = $conn->query($sql)) echo $conn->error;

    if ($result->num_rows > 0) {
        
    $termekasd=$man->get_Termek_nev();
        foreach($result->fetch_assoc() as $key);
    $termek=$key;
    }
    // the message
    $msg = $_SESSION['username']. " Szeretne üzletet kötni önnel a/az ".$termek." termékkel kapcsolatban <br> <a href='http://banki13.komarom.net/zsolt/szakdolgozat/index.php'>Az oldalra</a>";
    $header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    $header .= "From: ".$_SESSION['email'];

    // send email
    mail($celemail ,"Csere / Üzleti ajánlat",$msg,$header);
}
$egyebid=$egyeb->egyeble($conn);
$kartyaid=$kartya->kartyale($conn);
$penzid=$penz->penzle($conn);
$tazoid=$tazo->tazole($conn);
include "view/Termekek.php"
?>