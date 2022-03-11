<body class="Te">
  <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php?page=termekek&action=Penznem">Pénznemek</a>
        <a href="index.php?page=termekek&action=Tazok">Tazók</a>
        <a href="index.php?page=termekek&action=Kartyak">Kártyák</a>
        <a href="index.php?page=termekek&action=Egyeb_Termekek">Egyéb termékek</a>
      </div>
      <div style="font-size:30px;cursor:pointer" id="oldalsav" onclick="openNav()">&#9776; Termékek</div>
      <?php 
       echo"<div class='flex-container'>";

        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Penznem"){
          if ($penzid) {
            foreach($penzid as $penzek) {
                $penz->set_penz($penzek,$conn);
                  if(empty($_SESSION['F_Id'])){
                    echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().'</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div></div>';
                  }else
                        echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().'</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
              
            }
          }
         }
         }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Tazok"){
          if ($tazoid) {
          
            foreach($tazoid as $tazok) {
                $tazo->set_tazo($tazok,$conn);
                if(empty($_SESSION['F_Id'])){
                  echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().'</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div></div>';
                }else
                   
                        echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().'</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
                
            
            }
          }

        }
        }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Kartyak"){
          if ($kartyaid) {
          
            foreach($kartyaid as $kartyak) {
                $kartya->set_kartya($kartyak,$conn);
                if(empty($_SESSION['F_Id'])){
                  echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().'</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div></div>';
                }else
                   
                        echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().'</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
               
            }
          }
        }
        }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Egyeb_Termekek"){
          if ($egyebid) {
         
            foreach($egyebid as $egyebek) {
                $egyeb->set_egyeb($egyebek,$conn);
                if(empty($_SESSION['F_Id'])){
                  echo '<div class="keret"><div>Terméknév: <br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().'</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div></div>';
                }else
                   
                        echo '<div class="keret"><div>Terméknév: <br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().'</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
               
            }
          
         }
        }
        }
        echo"</div>";
      ?>
      <?php 
          if(!isset($_REQUEST['action'])){
          echo"<div class='flex-container'>";

          foreach($penzid as $penzek) {
            $penz->set_penz($penzek,$conn);
            if(empty($_SESSION['F_Id'])){
              echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().'</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>'.$penz->get_Ar().'</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
          }

          foreach($tazoid as $tazok) {
            $tazo->set_tazo($tazok,$conn);
            if(empty($_SESSION['F_Id'])){
              echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().'</div><div>Tulajdonos neve:<br> '.$tazo->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().'</div><div>Tulajdonos neve:<br> '.$tazo->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
          }
          foreach($kartyaid as $kartyak) {

            $kartya->set_kartya($kartyak,$conn);
            if(empty($_SESSION['F_Id'])){
              echo  '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().'</div><div>Tulajdonos neve:<br>'.$kartya->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().'</div><div>Tulajdonos neve:<br>'.$kartya->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
          }
          foreach($egyebid as $egyebek) {

            $egyeb->set_egyeb($egyebek,$conn);
            if(empty($_SESSION['F_Id'])){
              echo '<div class="keret"><div>Terméknév:<br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().'</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().'</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div><div><form><input type="submit" id="uzlet" name="uzi" value="Üzlet kötés"></form></div></div>';
          }

          echo"</div>";
        }
?>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "160px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0px";
        }
      </script>

</body>