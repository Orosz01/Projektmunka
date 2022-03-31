<?php

 $uziid=$uzi->uzikle($conn);

    if(isset($_POST['kuld'])){
        if(!empty($_POST['uzi'])){       
    $sql ="INSERT INTO uzenetek(F_Id,uzi) Values (".$_SESSION['F_Id'].",'".mysqli_real_escape_string($conn,$_POST['uzi'])."')";
    if(!$result = $conn->query($sql)) echo $conn->error;
    header("location:index.php?page=fooldal");
        }
    }
    
   include "view/Fooldal.php";
?>