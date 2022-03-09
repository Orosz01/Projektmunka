<?php

$egyebid=$egyeb->egyeble($conn);
$kartyaid=$kartya->kartyale($conn);
$penzid=$penz->penzle($conn);
$tazoid=$tazo->tazole($conn);

include "view/Termekek.php"

?>