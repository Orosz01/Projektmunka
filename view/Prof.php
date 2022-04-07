<body class="Pro">
    <form class="Prof" action="index.php?page=prof" method="post">
        <?php    
            echo $_SESSION['username'] ."<br>";
          if(isset($_REQUEST['editEmail'])){
              ?>

        <input type="email" id="edi" name="reemail"  value="<?php echo $_SESSION['email'];?>">

        <input type="submit" id="edigo" name="edit" value="Szerkeszt">

        <?php
        }else{
            echo $_SESSION['email']." <a href='?".$_SERVER["QUERY_STRING"]."&editEmail=true'> Edit </a>";
        }
        ?>
    </form>
        <?php
        
            echo"<div class='flex-container'>";
            if ($penzid) {
              foreach($penzid as $penzek) {
                  $penz->set_penz($penzek,$conn);
                  if($penz->get_F_Id()==$_SESSION['F_Id']){
                    echo '<div class="keret"><div>Terméknév:<br> '.$penz->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$penz->get_kep().'"></div><div>Termék ára: <br>  '.$penz->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$penz->get_username().'</div><div><form action="index.php?page=prof" method="post"><input type="submit" id="uzlet" name="delete" value="Termék törlése"><input type="hidden" value="'.$penzek.'" name="termekid"><input type="hidden" value="'.$penz->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                  }
                }
            }

            if ($tazoid) {
                foreach($tazoid as $tazok) {
                    $tazo->set_tazo($tazok,$conn);
                    if($tazo->get_F_Id()==$_SESSION['F_Id']){
                      echo '<div class="keret"><div>Terméknév:<br> '.$tazo->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$tazo->get_kep().'"></div><div>Termék ára: <br>  '.$tazo->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$tazo->get_username().'</div><div><form action="index.php?page=prof" method="post"><input type="submit" id="uzlet" name="delete" value="Termék törlése"><input type="hidden" value="'.$tazok.'" name="termekid"><input type="hidden" value="'.$tazo->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                    }   
                }
            }

            if ($kartyaid) {
                foreach($kartyaid as $kartyak) {
                    $kartya->set_kartya($kartyak,$conn);
                    if($kartya->get_F_Id()==$_SESSION['F_Id']){
                            echo '<div class="keret"><div>Terméknév:<br> '.$kartya->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$kartya->get_kep().'"></div><div>Termék ára: <br>  '.$kartya->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$kartya->get_username().'</div><div><form action="index.php?page=prof" method="post"><input type="submit" id="uzlet" name="delete" value="Termék törlése"><input type="hidden" value="'.$kartyak.'" name="termekid"><input type="hidden" value="'.$kartya->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                    }      
                }
            }

            if ($egyebid) {
                foreach($egyebid as $egyebek) {
                    $egyeb->set_egyeb($egyebek,$conn);
                    if($egyeb->get_F_Id()==$_SESSION['F_Id']){
                            echo '<div class="keret"><div>Terméknév:<br> '.$egyeb->get_Termek_nev().'</div><div class="kozep"><img class="kep" src="'.$egyeb->get_kep().'"></div><div>Termék ára: <br>  '.$egyeb->get_Ar().' Ft</div><div>Tulajdonos neve:<br> '.$egyeb->get_username().'</div><div><form action="index.php?page=prof" method="post"><input type="submit" id="uzlet" name="delete" value="Termék törlése"><input type="hidden" value="'.$egyebek.'" name="termekid"><input type="hidden" value="'.$egyeb->get_Termek_azonosito().'" name="mainkat"></form></div></div>';
                    }                
                }
            }
    echo "</div>";
    ?>
