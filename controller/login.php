<?php

if(isset($_POST['username']) and isset($_POST['pasword'])){
  $loginError='';
  if(strlen($_POST['username']) == 0)$loginError .="Nem írtál be felhsználónevet<br>";
  if(strlen($_POST['pasword']) == 0)$loginError .="Nem írtál be jelszót";
  if($loginError == ''){
    $sql="SELECT F_Id FROM felhasznalok WHERE username='".$_POST['username']."'";
    if(!$result = $conn->query($sql)) echo $conn->error;
if ($result->num_rows > 0) {
  if($row = $result->fetch_assoc()) {
    $tanulo->set_user($row['F_Id'], $conn);
   if(md5($_POST['pasword'])==$tanulo->get_pasword()){
     $_SESSION['F_Id']=$row['F_Id'];
     $_SESSION['username']=$tanulo->get_username();
     header('Location:index.php?page=fooldal');
    exit();
    }
   else $loginError.='Érvényetelen jelszó';
  }
}
else $loginError.='Érvénytelen felhasználónév';
  }
}

include "view/Login.php";

?>