<body class="Te">
  <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php?page=termekek&action=Penznem">Pénznemek</a>
        <a href="index.php?page=termekek&action=Papir" class="alkat">Papír</a>
        <a href="index.php?page=termekek&action=Ermek" class="alkat">Érmék</a>
        <a href="index.php?page=termekek&action=Tazok">Tazók</a>
        <a href="index.php?page=termekek&action=Angry_Birds" class="alkat">Angry Birds</a>
        <a href="index.php?page=termekek&action=Pokemon" class="alkat">Pokemon</a>
        <a href="index.php?page=termekek&action=Kartyak">Kártyák</a>
        <a href="index.php?page=termekek&action=Focis" class="alkat">Focis</a>
        <a href="index.php?page=termekek&action=Yu-Gi-Oh" class="alkat">Yu-Gi-Oh</a>
        <a href="index.php?page=termekek&action=Kungfu_Panda" class="alkat">Kungfu Panda</a>
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
                    echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar(). ' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div></div>';
                  }else
                        echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$penzek.'" name="termekid"><input type="hidden" value="'.$penz->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                }
            }
          }
         }
         if (isset($_REQUEST['action'])){
          if($_REQUEST['action']=="Papir"){
            if ($penzid) {
              foreach($penzid as $penzek) {
                  $penz->set_penz($penzek,$conn);
                  if($penz->get_K_id()==2){
                    if(empty($_SESSION['F_Id'])){
                      echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div></div>';
                    }else
                          echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$penzek.'" name="termekid"><input type="hidden" value="'.$penz->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
              }
            }
            }
           }
           }
           if (isset($_REQUEST['action'])){
            if($_REQUEST['action']=="Ermek"){
              if ($penzid) {
                foreach($penzid as $penzek) {
                    $penz->set_penz($penzek,$conn);
                    if($penz->get_K_id()==1){
                      if(empty($_SESSION['F_Id'])){
                        echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div></div>';
                      }else
                            echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$penzek.'" name="termekid"><input type="hidden" value="'.$penz->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                }
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
                  echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div></div>';
                }else
                   
                        echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$tazok.'" name="termekid"><input type="hidden" value="'.$tazo->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
            }
          }
        }
        }
        if (isset($_REQUEST['action'])){
          if($_REQUEST['action']=="Angry_Birds"){
            if ($tazoid) {
              foreach($tazoid as $tazok) {
                  $tazo->set_tazo($tazok,$conn);
                  if($tazo->get_K_id()==2){
                  if(empty($_SESSION['F_Id'])){
                    echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div></div>';
                  }else
                     
                          echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$tazok.'" name="termekid"><input type="hidden" value="'.$tazo->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
              }
            }
          }
          }
          }
          if (isset($_REQUEST['action'])){
            if($_REQUEST['action']=="Pokemon"){
              if ($tazoid) {
                foreach($tazoid as $tazok) {
                    $tazo->set_tazo($tazok,$conn);
                    if($tazo->get_K_id()==1){
                    if(empty($_SESSION['F_Id'])){
                      echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div></div>';
                    }else
                       
                            echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$tazo->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$tazok.'" name="termekid"><input type="hidden" value="'.$tazo->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                }
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
                  echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div></div>';
                }else
                        echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$kartyak.'" name="termekid"><input type="hidden" value="'.$kartya->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
            }
          }
        }
        }
        if (isset($_REQUEST['action'])){
          if($_REQUEST['action']=="Focis"){
            if ($kartyaid) {
              foreach($kartyaid as $kartyak) {
                  $kartya->set_kartya($kartyak,$conn);
                  if($kartya->get_K_id()==3){
                  if(empty($_SESSION['F_Id'])){
                    echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div></div>';
                  }else
                          echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$kartyak.'" name="termekid"><input type="hidden" value="'.$kartya->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
              }
            }
          }
          }
          }
          if (isset($_REQUEST['action'])){
            if($_REQUEST['action']=="Yu-Gi-Oh"){
              if ($kartyaid) {
                foreach($kartyaid as $kartyak) {
                    $kartya->set_kartya($kartyak,$conn);
                    if($kartya->get_K_id()==1){
                    if(empty($_SESSION['F_Id'])){
                      echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div></div>';
                    }else
                            echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$kartyak.'" name="termekid"><input type="hidden" value="'.$kartya->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                }
              }
            }
            }
            }
            if (isset($_REQUEST['action'])){
              if($_REQUEST['action']=="Kungfu_Panda"){
                if ($kartyaid) {
                  foreach($kartyaid as $kartyak) {
                      $kartya->set_kartya($kartyak,$conn);
                      if($kartya->get_K_id()==2){
                      if(empty($_SESSION['F_Id'])){
                        echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div></div>';
                      }else
                              echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$kartyak.'" name="termekid"><input type="hidden" value="'.$kartya->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                  }
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
                  echo '<div class="keret"><div>Terméknév: <br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div></div>';
                }else
                        echo '<div class="keret"><div>Terméknév: <br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$egyebek.'" name="termekid"><input type="hidden" value="'.$egyeb->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
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
              echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>'.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$penzek.'" name="termekid"><input type="hidden" value="'.$penz->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
          }

          foreach($tazoid as $tazok) {
            $tazo->set_tazo($tazok,$conn);
            if(empty($_SESSION['F_Id'])){
              echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$tazo->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára:<br> '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$tazo->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$tazok.'" name="termekid"><input type="hidden" value="'.$tazo->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
          }
          foreach($kartyaid as $kartyak) {

            $kartya->set_kartya($kartyak,$conn);
            if(empty($_SESSION['F_Id'])){
              echo  '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$kartya->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára:<br> '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br>'.$kartya->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$kartyak.'" name="termekid"><input type="hidden" value="'.$kartya->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
          }
          foreach($egyebid as $egyebek) {

            $egyeb->set_egyeb($egyebek,$conn);
            if(empty($_SESSION['F_Id'])){
              echo '<div class="keret"><div>Terméknév:<br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div></div>';
            }else
                    echo '<div class="keret"><div>Terméknév:<br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>'.$egyeb->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div><div><form action="index.php?page=termekek" method="post"><input type="submit" id="uzlet" name="uzi" value="Üzleti ajánlat tétel"><input type="hidden" value="'.$egyebek.'" name="termekid"><input type="hidden" value="'.$egyeb->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
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