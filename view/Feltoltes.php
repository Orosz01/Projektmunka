<body class="Fe">
<?php
$i = 0;
$errors = array();
if(isset($_FILES["fileToUpload"])){
echo '<pre>';
print_r($_FILES['fileToUpload']);
echo '<pre>';
$target_dir = "uploads/";

$allowd_filetypes =array('image/png','image/jpg','image/jpeg');
foreach($_FILES["fileToUpload"]["name"] as $key => $name){
 $target_file = $target_dir . basename($name);
 
 if (!in_array($_FILES["fileToUpload"]["type"][$key], $allowd_filetypes)){
     $errors[$key][] = "A $name file nem jpg / png vagy jpeg";
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
?>
        <?php
        if($i > 0) echo "$i fájl feltöltve <br>";
        if($errors){
            foreach($errors as $error){
                foreach($error as $errorMsg){
                    echo "$errorMsg <br>";
                }
            }
        }
        ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="termeknev">Termék neve:</label><br>
        <input type="text" class="ter_nev"  name="Termek_nev"><br>
        <p>Válaszd ki a terméked kategoriáját</p>
          <input type="radio" id="" name="Kat" value="Penznem">
          <label for="Penznem">Penznem</label>
          <input type="radio" id="" name="Kat" value="Kartya">
          <label for="Kartya">Kártyák</label>
          <input type="radio" id="" name="Kat" value="Tazok">
          <label for="Tazok">Tazók</label>
          <input type="radio" id="" name="Kat" value="Egyeb dolgok">
          <label for="Egyeb Dolgok">Egyeb Dolgok</label><br>
            Válaszd ki a feltöltendő termék képét:
            <input type="file" name = "fileToUpload[]" id = "fileToUpload" multiple>
            <input type ="submit" value ="Upload Image" name="submit">
        </form>

</body>