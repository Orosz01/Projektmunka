<body class="Fe">
    
        <form action="index.php?page=feltoltes" method="post" enctype="multipart/form-data" id="fel">
            <?php
             echo $kep ;
             echo $kat ;
             echo $alkat ;
             echo $nev ; 
             echo $ar ;
            ?>
            <br>
            <br>
        <label for="termeknev">Termék neve:</label><br>
        <input type="text" class="area"  name="Termek_nev"><br>
        <label for="termeknev">Esetleges eladási ár:</label><br>
        <input type="text" class="area"  name="Ar"><br>
        <p>Válaszd ki a terméked kategóriáját</p>

        <input type="radio" id="Penznem" name="Kat" value="penznem">
        <label for="Penznem">Pénznemek</label>
        <input type="radio" id="Kartya" name="Kat" value="kartyak">
        <label for="Kartya">Kártyák</label>
        <input type="radio" id="Tazok" name="Kat" value="tazok">
        <label for="Tazok">Tazók</label>
        <input type="radio" id="Egyeb_termekek" name="Kat" value="egyeb_termekek">
        <label for="Egyeb Termekek">Egyéb Termekek</label><br>

        <div class="hide1">
        <input type="radio" id="money" name="Al_Kat" value="Pengo">
        <label for="Pengo">Pengő</label>
        <input type="radio" id="money" name="Al_Kat" value="Ermek">
        <label for="Erme">Érme</label><br>
        </div>
        <div  class="hide2">
        <input type="radio" id="Kartyak" name="Al_Kat" value="Yu-Gi-Oh">
        <label for="Yu-Gi-Oh">Yu-Gi-Oh</label>
        <input type="radio" id="Kartyak" name="Al_Kat" value="Kungfu Panda">
        <label for="Kungfu Panda">Kungfu Panda</label>
        <input type="radio" id="Kartyak" name="Al_Kat" value="Focis">
        <label for="Focis">Focis</label><br>
        </div>
        <div  class="hide3">
        <input type="radio" id="taz" name="Al_Kat" value="Angry Birds">
        <label for="Angry Birds">Angry Birds</label>
        <input type="radio" id="taz" name="Al_Kat" value="Pokemon">
        <label for="Pokemon">Pokemon</label><br>
        </div>
            Válaszd ki a feltöltendő termék képét:<br>
            <input type="file" name = "fileToUpload[]" id = "fileToUpload" id="uplo"><br>
            <div class="upi"><input type ="submit" value ="Termék feltöltése" name="submit" id="uplo"><br></div>
        </form>
</body>