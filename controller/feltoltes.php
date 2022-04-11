<?php 
if(!isset($_SESSION['F_Id'])){
header("Location:index.php?page=fooldal");
}
$kep="";
$kat="";
$alkat="";
$nev="";
$ar="";
$nemaz="";
$negativ="";
if(isset($_POST['submit'])){
  if(!empty($_POST['Termek_nev']) and !empty($_POST['Ar']) ){
   
    if((isset($_POST['Kat']) and $_POST['Kat']=='egyeb_termekek' ) or (isset($_POST['Kat']) and isset($_POST['Al_Kat']))){
      $i = 0;
      $errors = array();
      if(isset($_FILES['fileToUpload'])){
        if($_POST['Kat']=='penznem' and $_POST['Al_Kat']=='Papir'){
                $target_dir = "Termekek/Penznemek/Papir/";
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
      $allowd_filetypes =array('image/png','image/jpg','image/jpeg');

      foreach($_FILES["fileToUpload"]["name"] as $key => $name){
      $target_file = $target_dir . basename($name);
      
      if($_FILES['fileToUpload']['name'][$key]==""){
        $nemaz="Nem választottál ki képet! <br>";
      }elseif (!in_array($_FILES["fileToUpload"]["type"][$key], $allowd_filetypes)){
          $nemaz = "A $name file nem jpg / png / jpeg<br>";
      }
      if($nemaz==""){
        if(isset($_POST['Kat']) and $_POST['Kat']!="egyeb_termekek" and !empty($_POST['Termek_nev']) and !empty($_POST['Ar'])){
          if (@move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key] , $target_file)){
            $i ++;
            $asd="";
            if($_POST['Kat']=="penznem"){
              $asd='penz_kat';
            }elseif($_POST['Kat']=="kartyak"){
              $asd='kartya_kat';
            }elseif($_POST['Kat']=="tazok"){
              $asd='tazo_kat';
            }
            if(strpos($_POST['Ar'],"-")>=0){
              $negativ="Nem adhatsz meg negatív árat <br>";
            }else{
            $sql = "INSERT INTO ".$_POST['Kat']." (Termek_azonosito,Termek_nev,F_Id,Ar,K_id,kep)
            VALUES ((select T_id from Termekek where main_kat like '".$_POST['Kat']."'),' ".htmlspecialchars($_POST['Termek_nev'])."', ".$_SESSION['F_Id'].",".$_POST['Ar'].",(select id from ".$asd." where nev like '".$_POST['Al_Kat']."'),'" .$target_file."')";
        
            if ($conn->query($sql) === TRUE) {
              header("location:index.php?page=termekek");
            }else{
              echo "Error: " . $sql . "<br>" . $conn->error;
            } 
          }
        }
        }else{
          $errors[$key][] = "Hiba történt a $name file mentésekor<br>";
          
  } 
        }
      }
      }else $kep="Sikerült";
  
  
      $i = 0;
      $errors = array();
      if(isset($_FILES["fileToUpload"])){
        if($_POST['Kat']=='egyeb_termekek'){
          $target_dir = "Termekek/Egyeb_termekek/";
        }
      $allowd_filetypes =array('image/png','image/jpg','image/jpeg');
      foreach($_FILES["fileToUpload"]["name"] as $key => $name){
      $target_file = $target_dir . basename($name);
      if($_FILES['fileToUpload']['name'][$key]==""){
        $nemaz="Nem választottál ki képet!<br>";
      }elseif (!in_array($_FILES["fileToUpload"]["type"][$key], $allowd_filetypes)){
          $nemaz = "A $name file nem jpg / png / jpeg<br>";
      }
      if($nemaz==""){
          if (@move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key] , $target_file)){
          $i ++;
          if(isset($_POST['Kat']) and $_POST['Kat']=="egyeb_termekek" and !empty($_POST['Termek_nev']) and !empty($_POST['Ar'])){
            if(strpos($_POST['Ar'],"-")>=0){
              $negativ="Nem adhatsz meg negatív árat <br>";}
              else{
  $sql = "INSERT INTO egyeb_termekek (Termek_azonosito,Termek_nev,F_Id,Ar,kep)
      VALUES ((select T_id from Termekek where main_kat like '".$_POST['Kat']."'),' ".htmlspecialchars($_POST['Termek_nev'])."', ".$_SESSION['F_Id'].",".$_POST['Ar'].",'". $target_file."')";

      if ($conn->query($sql) === TRUE) {
          header("location:index.php?page=termekek");
                  }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                }
              } else {
                      $errors[$key][] = "Hiba történt a $name file mentésekor<br>";
          }
        } 
      }
      }
    
    }

  }else if(!isset($_POST['Kat'])){
    $kat="Nem választottál ki Kategóriát<br>";
  }else
    $alkat="Nem választottál ki Alkategóriát<br>";
}elseif(empty($_POST['Termek_nev'])){
  $nev="Nem adtad meg a termék nevét<br>";
}else
  $ar="Nem adtad meg a termék árát<br>";
  
}

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
$("#Egyeb_termekek").click(function(){
  $(".hide2").hide();
  $(".hide1").hide();
  $(".hide3").hide();
});
</script>