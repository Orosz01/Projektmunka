<?php

if(isset($_POST['uzi'])){
$q="";
$ro="";
$man="";
$satek="";
$ra="";
if($_POST['mainkat']==1){
    $q="kartyak";
    $man=$kartya;
    $satek="set_kartya";
}else if($_POST['mainkat']==2){
    $q="penznem";
    $man=$penz;
    $satek="set_penz";
}else if($_POST['mainkat']==3){
    $q="tazok";
    $man=$tazo;
    $satek="set_tazo";
}else if($_POST['mainkat']==4){
    $q="egyeb_termekek";
    $man=$egyeb;
    $satek="set_egyeb";
}

$sql="Select email from felhasznalok where F_Id=(SELECT F_Id FROM ".$q." Where Termek_azonosito=".$_POST['mainkat']." and ".$q.".id=".$_POST['termekid'].")";

if(!$result = $conn->query($sql)) echo $conn->error;
if ($result->num_rows > 0) {
 
      
    foreach($result->fetch_assoc() as $key){
        $ra=$key;
    }
    
}


$sql="Select Termek_nev from ".$q." where ".$q.".id=".$_POST['termekid']."";
if(!$result = $conn->query($sql)) echo $conn->error;

if ($result->num_rows > 0) {
    
    $roasdfsd=$man->get_Termek_nev();
    foreach($result->fetch_assoc() as $key);
    $ro=$key;
}
// the message
$msg = $_SESSION['username']. " Szeretne üzletet kötni önnel a/az ".$ro." termékkel kapcsolatban <br> <a href='http://banki13.komarom.net/zsolt/szakdolgozat/index.php'>Az oldalra</a>";
$header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$header .= "From: ".$_SESSION['email'];

// send email
mail( $ra ,"Csere / Üzleti ajánlat",$msg,$header);

}

$egyebid=$egyeb->egyeble($conn);
$kartyaid=$kartya->kartyale($conn);
$penzid=$penz->penzle($conn);
$tazoid=$tazo->tazole($conn);

include "view/Termekek.php"

?>