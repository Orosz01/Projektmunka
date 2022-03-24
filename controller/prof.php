<?php

if(isset($_POST['delete'])){
    if($_POST['mainkat']==4){
        $egyeb->set_egyeb($_POST['termekid'],$conn);
        if($_SESSION['F_Id']==$egyeb->get_F_Id()){
            $sql="DELETE FROM `egyeb_termekek` WHERE id=".$egyeb->get_id();
            $conn->query($sql);
            header("location:index.php?page=prof");
        }
    }elseif($_POST['mainkat']==1){
        $kartya->set_kartya($_POST['termekid'],$conn);
        if($_SESSION['F_Id']==$kartya->get_F_Id()){
            $sql="DELETE FROM `kartyak` WHERE id=".$kartya->get_id();
            $conn->query($sql);
            header("location:index.php?page=prof");
        }
    }elseif($_POST['mainkat']==3){
        $tazo->set_tazo($_POST['termekid'],$conn);
        if($_SESSION['F_Id']==$tazo->get_F_Id()){
            $sql="DELETE FROM `tazok` WHERE id=".$tazo->get_id();
            $conn->query($sql);
            header("location:index.php?page=prof");
        }
    }elseif($_POST['mainkat']==2){
        $penz->set_penz($_POST['termekid'],$conn);
        if($_SESSION['F_Id']==$penz->get_F_Id()){
            $sql="DELETE FROM `penznem` WHERE id=".$penz->get_id();
            $conn->query($sql);
            header("location:index.php?page=prof");
        }
    }
}

    if(isset($_POST['edit'])){
        $sql="UPDATE felhasznalok SET email='".$_POST['reemail']."' where F_Id =".$_SESSION['F_Id'];
        $conn->query($sql);
        $_SESSION['email']=$_POST['reemail'];
        header("location:index.php?page=prof");
    }

$egyebid=$egyeb->egyeble($conn);
$kartyaid=$kartya->kartyale($conn);
$penzid=$penz->penzle($conn);
$tazoid=$tazo->tazole($conn);

include "view/Prof.php"

?>