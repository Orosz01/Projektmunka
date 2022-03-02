<?php
    if(isset($_POST['Kat']) and $_POST['Kat']!="egyeb_termekek" and isset($_POST['Termek_nev']) and isset($_POST['Ar'])){
      $asd="";
      if($_POST['Kat']=="penznem"){
        $asd='penz_kat';
      }elseif($_POST['Kat']=="kartyak"){
        $asd='kartya_kat';
      }elseif($_POST['Kat']=="tazok"){
        $asd='tazo_kat';
      }
    $sql = "INSERT INTO ".$_POST['Kat']." (Termek_azonosito,Termek_nev,F_Id,Ar,K_id,kep)
    VALUES ((select id from Termekek where main_kat like '".$_POST['Kat']."'),' ".$_POST['Termek_nev']."', ".$_SESSION['F_Id'].",".$_POST['Ar'].",(select id from ".$asd." where nev like '".$_POST['Al_Kat']."'),'fgd')";

    if ($conn->query($sql) === TRUE) {
    
    $i = 0;
    $errors = array();
    if(isset($_FILES["fileToUpload"])){
    $target_dir = "Termekek/";

    $allowd_filetypes =array('image/png','image/jpg','image/jpeg');
    foreach($_FILES["fileToUpload"]["name"] as $key => $name){
    $target_file = $target_dir . basename($name);
    
    if (!in_array($_FILES["fileToUpload"]["type"][$key], $allowd_filetypes)){
        $errors[$key][] = "A $name file nem jpg / png / jpeg";
    }
    if(!isset($errors[$key])){
        if (@move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key] , $target_file)){
        $i ++;
                }
                else {
                    $errors[$key][] = "Hiba történt a $name file mentésekor";
                }
            }
        }
      } 
    }else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
?>
<?php
if(isset($_POST['Kat']) and $_POST['Kat']=="egyeb_termekek" and isset($_POST['Termek_nev']) and isset($_POST['Ar'])){
 $sql = "INSERT INTO egyeb_termekek (Termek_azonosito,Termek_nev,F_Id,Ar,kep)
    VALUES ((select id from Termekek where main_kat like '".$_POST['Kat']."'),' ".$_POST['Termek_nev']."', ".$_SESSION['F_Id'].",".$_POST['Ar'].",'fgd')";

    if ($conn->query($sql) === TRUE) {
    
    $i = 0;
    $errors = array();
    if(isset($_FILES["fileToUpload"])){
    $target_dir = "Termekek/";

    $allowd_filetypes =array('image/png','image/jpg','image/jpeg');
    foreach($_FILES["fileToUpload"]["name"] as $key => $name){
    $target_file = $target_dir . basename($name);
    
    if (!in_array($_FILES["fileToUpload"]["type"][$key], $allowd_filetypes)){
        $errors[$key][] = "A $name file nem jpg / png / jpeg";
    }
    if(!isset($errors[$key])){
        if (@move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key] , $target_file)){
        $i ++;
                }
                else {
                    $errors[$key][] = "Hiba történt a $name file mentésekor";
                }
            }
        }
      } 
    }else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
        <?php
        

include 'view/Feltoltes.php';

?>
<script>
  $(".hide1").hide();
  $(".hide2").hide();
  $(".hide3").hide();

  $("#Penznem").click(function(){
  $(".hide1").show();
  $(".hide2").hide();
  $(".hide3").hide();
});
$("#Kartya").click(function(){
  $(".hide2").show();
  $(".hide1").hide();
  $(".hide3").hide();
});
$("#Tazok").click(function(){
  $(".hide3").show();
  $(".hide2").hide();
  $(".hide1").hide();
});
</script>