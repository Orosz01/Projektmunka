<body class="Fe">
        <form action="index.php?page=feltoltes" method="post" enctype="multipart/form-data" id="fel">
        <label for="termeknev">Termék neve:</label><br>
        <input type="text" class="area"  name="Termek_nev"><br>
        <label for="termeknev">Esetleges eladási ár:</label><br>
        <input type="text" class="area"  name="Ar"><br>
        <p>Válaszd ki a terméked kategóriáját</p>
        <input type="radio" id="" name="Kat" value="Penznem">
        <label for="Penznem">Pénznemek</label>
        <input type="radio" id="" name="Kat" value="Kartya">
        <label for="Kartya">Kártyák</label>
        <input type="radio" id="" name="Kat" value="Tazok">
        <label for="Tazok">Tazók</label>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Egyéb Dolgok</label><br>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Pengő</label>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Érme</label><br>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Yu-Gi-Oh</label>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Kungfu Panda</label>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Focis</label><br>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Angry Birds</label>
        <input type="radio" id="" name="Kat" value="Egyeb dolgok">
        <label for="Egyeb Dolgok">Pokemon</label><br>

            Válaszd ki a feltöltendő termék képét:<br>
            <input type="file" name = "fileToUpload[]" id = "fileToUpload" id="uplo"><br>
            <div class="upi"><input type ="submit" value ="Kép feltöltése" name="submit" id="uplo"><br></div>
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