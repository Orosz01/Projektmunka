<?php
if(isset($_POST['uzi'])){
// the message
$msg = $_SESSION['username']. " Szeretne üzletet kötni önnel a/az ".$_SESSION['Termek_nev']."-el kapcsolatban ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$header = "From: ".$_SESSION['email'];

// send email
mail( "detari.klaudia.2017ice@bankitatabanya.hu" ,"Csere / Üzleti ajánlat",$msg,$header);
}

$egyebid=$egyeb->egyeble($conn);
$kartyaid=$kartya->kartyale($conn);
$penzid=$penz->penzle($conn);
$tazoid=$tazo->tazole($conn);

include "view/Termekek.php"

?>