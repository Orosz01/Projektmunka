<?php
require '../includes/db.inc.php';
require '../modell/uzik.php';
$uzi = new Uzik();
$uziid=$uzi->uzikle($conn);

$output = array();
if (isset($_POST['action']) && $_POST['action']=="chat"){
    if($uziid){
        for($i=count($uziid)-1;$i>=0;$i--){
            $uzi->set_uzi($uziid[$i],$conn);
            $output[] = array(
                'uzenet' => $uzi->get_username().': '.$uzi->get_uzi().'<br>',
            );
        }
    }
    
echo json_encode($output);
}

?>
