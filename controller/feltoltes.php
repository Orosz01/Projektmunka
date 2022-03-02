<?php
$kep="";
$kat="";
$alkat="";
$allowd_filetypes=array();

if(isset($_POST['submit'])){
if((isset($_POST['Kat']) and $_POST['Kat']=='egyeb_termekek' ) or (isset($_POST['Kat']) and isset($_POST['Al_Kat']))){
    $i = 0;
    $errors = array();
    if(isset($_FILES['fileToUpload']) and $_FILES['fileToUpload']!= null){
      $name=$_FILES['fileToUpload']['name'];
      if($_POST['Kat']=='penznem' and $_POST['Al_Kat']=='Pengo'){
        $target_dir = "Termekek/Penznemek/Pengo/";
      }elseif($_POST['Kat']=='penznem' and $_POST['Al_Kat']=='Ermek'){
        $target_dir = "Termekek/Penznemek/Ermek/";
      }elseif($_POST['Kat']=='kartyak' and $_POST['Al_Kat']=='Focis'){
        $target_dir = "Termekek/Kartyak/Focis/";
      }elseif($_POST['Kat']=='kartyak' and $_POST['Al_Kat']=='Kungfu Panda'){
        $target_dir = "Termekek/Kartyak/Kungfu Panda/";
      }elseif($_POST['Kat']=='kartyak' and $_POST['Al_Kat']=='Yu-Gi-Oh'){
        $target_dir = "Termekek/Kartyak/Yu-Gi-Oh/";
      }elseif($_POST['Kat']=='tazok' and $_POST['Al_Kat']=='Pokemon'){
        $target_dir = "Termekek/Tazok/Pokemon/";
      }elseif($_POST['Kat']=='tazok' and $_POST['Al_Kat']=='Angry Birds'){
        $target_dir = "Termekek/Tazok/Angry_Birds/";
      }elseif($_POST['Kat']=='egyeb_termekek'){
        $target_dir = "Termekek/Egyeb_termekek/";
      }

    $target_file = $target_dir . basename($name);
    
    
    if(isset($errors) and $errors==null){
        if (@move_uploaded_file($_FILES['fileToUpload']["tmp_name"], $target_file)){
        $i ++;
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
            VALUES ((select id from Termekek where main_kat like '".$_POST['Kat']."'),' ".$_POST['Termek_nev']."', ".$_SESSION['F_Id'].",".$_POST['Ar'].",(select id from ".$asd." where nev like '".$_POST['Al_Kat']."'),'.$target_file.')";
        
            if ($conn->query($sql) === TRUE) {
        }else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
                }
                else {
                    $errors[] = "Hiba történt a $name file mentésekor";
                }
            }
            
      } else {
      $allowd_filetypes =array('image/png','image/jpg','image/jpeg');
      if (!in_array($_FILES['fileToUpload']["type"][0], $allowd_filetypes)){
        $kep = "A $name  file <br> nem jpg / png vagy jpeg";
    }else
      $kep="Nincs kép kiválasztva" ;
    }
?>
<?php

    $i = 0;
    $errors = array();
    if(isset($_FILES['fileToUpload'])){
      $name=$_FILES['fileToUpload'];
        $target_dir = "Termekek/Egyeb_termekek/";

    $allowd_filetypes =array('image/png','image/jpg','image/jpeg');
    $target_file = $target_dir . basename($name);
    
    if (!in_array($_FILES['fileToUpload']["type"], $allowd_filetypes)){
        $errors[] = "A $name file nem jpg / png / jpeg";
    }
    if(isset($errors)== null){
        if (@move_uploaded_file($_FILES['fileToUpload']["tmp_name"] , $target_file)){
        $i ++;
        if(isset($_POST['Termek_nev']) and isset($_POST['Ar'])){
           $sql = "INSERT INTO egyeb_termekek (Termek_azonosito,Termek_nev,F_Id,Ar,kep)
           VALUES ((select id from Termekek where main_kat like '".$_POST['Kat']."'),' ".$_POST['Termek_nev']."', ".$_SESSION['F_Id'].",".$_POST['Ar'].",'.$target_file.')";

        if ($conn->query($sql) === TRUE) {
    
        }else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }else {
           $errors[] = "Hiba történt a $name file mentésekor";
        }
        }
    } 
    }
    }

}else if(!isset($_POST['Kat'])){
  $kat="Nem választottál ki Kategóriát";
}else
  $alkat="Nem választottál ki Alkategóriát";

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