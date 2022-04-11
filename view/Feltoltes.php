<body class="Fe">
    
        <form action="index.php?page=feltoltes" method="post" enctype="multipart/form-data" id="fel">
            <?php
             echo $kep ;
             echo $kat ;
             echo $alkat ;
             echo $nev ; 
             echo $ar ;
             echo $nemaz ;
             echo $negativ ;
            ?>
            <br>
            <br>
        <label for="termeknev">Termék neve:</label><br>
        <input type="text" class="area"  name="Termek_nev"><br>
        <label for="termeknev">Esetleges eladási ár:</label><br>
        <input type="number" class="area"  name="Ar"><br>
        <p>Válaszd ki a terméked kategóriáját</p>

        <input type="radio"  id="Penznem" name="Kat" value="penznem">
        <label for="Penznem" class="gombok">Pénznemek</label>
        <input type="radio"  id="Kartya" name="Kat" value="kartyak">
        <label for="Kartya" class="gombok">Kártyák</label>
        <input type="radio"  id="Tazok" name="Kat" value="tazok">
        <label for="Tazok" class="gombok">Tazók</label>
        <input type="radio"  id="Egyeb_termekek" name="Kat" value="egyeb_termekek">
        <label for="Egyeb Termekek" class="gombok">Egyéb Termékek</label><br>

        <div class="hide1">
        <p class="luk">Válaszd ki a terméked al-kategóriáját</p>
        <input type="radio"  id="money" name="Al_Kat" value="Papir">
        <label for="Pengo" class="gombok">Papír</label>
        <input type="radio"  id="money" name="Al_Kat" value="Ermek">
        <label for="Erme" class="gombok">Érme</label><br>
        </div>
        <div  class="hide2">
        <p class="luk">Válaszd ki a terméked al-kategóriáját</p>
        <input type="radio"  id="Kartyak" name="Al_Kat" value="Yu-Gi-Oh">
        <label for="Yu-Gi-Oh" class="gombok">Yu-Gi-Oh</label>
        <input type="radio"  id="Kartyak" name="Al_Kat" value="Kungfu Panda">
        <label for="Kungfu Panda" class="gombok">Kungfu Panda</label>
        <input type="radio"  id="Kartyak" name="Al_Kat" value="Focis">
        <label for="Focis" class="gombok">Focis</label><br>
        </div>
        <div  class="hide3">
        <p class="luk">Válaszd ki a terméked al-kategóriáját</p>
        <input type="radio"  id="taz" name="Al_Kat" value="Angry Birds">
        <label for="Angry Birds" class="gombok">Angry Birds</label>
        <input type="radio"  id="taz" name="Al_Kat" value="Pokemon">
        <label for="Pokemon" class="gombok">Pokemon</label><br>
        </div>
            Válaszd ki a feltöltendő termék képét:<br>
            <input type="file" name = "fileToUpload[]" id = "fileToUpload" id="uplo"><br>
            <div class="upi"><input type ="submit" value ="Termék feltöltése" name="submit" id="uplo"><br></div>
        </form>
