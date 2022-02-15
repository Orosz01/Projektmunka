<body class="Fe">
        <form action="index.php?page=feltoltes" method="post" enctype="multipart/form-data" id="fel">
        <label for="termeknev">Termék neve:</label><br>
        <input type="text" class="area"  name="Termek_nev"><br>
        <p>Válaszd ki a terméked kategoriáját</p>
          <input type="radio" id="" name="Kat" value="Penznem">
          <label for="Penznem">Pénznemek</label>
          <input type="radio" id="" name="Kat" value="Kartya">
          <label for="Kartya">Kártyák</label>
          <input type="radio" id="" name="Kat" value="Tazok">
          <label for="Tazok">Tazók</label>
          <input type="radio" id="" name="Kat" value="Egyeb dolgok">
          <label for="Egyeb Dolgok">Egyéb Dolgok</label><br>
            Válaszd ki a feltöltendő termék képét:<br>
            <input type="file" name = "fileToUpload[]" id = "fileToUpload" id="uplo">
            <input type ="submit" value ="Kép feltöltése" name="submit" id="uplo"><br>
        <?php
            if($i > 0) echo " A termék feltöltve<br>";
            if($errors){
                foreach($errors as $error){
                    foreach($error as $errorMsg){
                        echo "$errorMsg <br>";
                    }
                }
            }
        ?>
        </form>

</body>