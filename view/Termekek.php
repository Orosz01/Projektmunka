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
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Penznem"){
          if ($penzid) {
            foreach($penzid as $penzek) {
                $penz->set_penz($penzek,$conn);
                
                        echo '<div class="keret"><div>'.$penz->get_Termek_nev().'</div><div><img class="kepek" src="'.$penz->get_kep().'"><div>'.$penz->get_Ar().'</div><div>'.$penz->get_username().'</div></div></div>';
              
            }
          }
         }
         }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Tazok"){
          if ($tazoid) {
          
            foreach($tazoid as $tazok) {
                $tazo->set_tazo($tazok,$conn);
               
                   
                        echo '<div class="keret"><div>'.$tazo->get_Termek_nev().'</div><div><img class="kepek" src="'.$tazo->get_kep().'"><div>'.$tazo->get_Ar().'</div><div>'.$tazo->get_username().'</div></div></div>';
                
            
            }
          }

        }
        }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Kartyak"){
          if ($kartyaid) {
          
            foreach($kartyaid as $kartyak) {
                $kartya->set_kartya($kartyak,$conn);
                
                   
                        echo '<div class="keret"><div>'.$kartya->get_Termek_nev().'</div><div><img class="kepek" src="'.$kartya->get_kep().'"><div>'.$kartya->get_Ar().'</div><div>'.$kartya->get_username().'</div></div></div>';
               
            }
          }
        }
        }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Egyeb_Termekek"){
          if ($egyebid) {
         
            foreach($egyebid as $egyebek) {
                $egyeb->set_egyeb($egyebek,$conn);
               
                   
                        echo '<div class="keret"><div>'.$egyeb->get_Termek_nev().'</div><div><img class="kepek" src="'.$egyeb->get_kep().'"><div>'.$egyeb->get_Ar().'</div><div>'.$egyeb->get_username().'</div></div></div>';
               
            }
          
         }
        }
        }
      ?>
      <?php 
          if(!isset($_REQUEST['action'])){
          echo"<div class='flex-container'>";

          foreach($penzid as $penzek) {
            $penz->set_penz($penzek,$conn);
                    echo '<div class="keret"><div>'.$penz->get_Termek_nev().'</div><div><img class="kepek" src="'.$penz->get_kep().'"><div>'.$penz->get_Ar().'</div><div>'.$penz->get_username().'</div></div></div>';
          }

          foreach($tazoid as $tazok) {
            $tazo->set_tazo($tazok,$conn);
                    echo '<div class="keret"><div>'.$tazo->get_Termek_nev().'</div><div><img class="kepek" src="'.$tazo->get_kep().'"><div>'.$tazo->get_Ar().'</div><div>'.$tazo->get_username().'</div></div></div>';
          }
          foreach($kartyaid as $kartyak) {

            $kartya->set_kartya($kartyak,$conn);
                    echo '<div class="keret"><div>'.$kartya->get_Termek_nev().'</div><div><img class="kepek" src="'.$kartya->get_kep().'"><div>'.$kartya->get_Ar().'</div><div>'.$kartya->get_username().'</div></div></div>';
          }
          foreach($egyebid as $egyebek) {

            $egyeb->set_egyeb($egyebek,$conn);
                    echo '<div class="keret"><div>'.$egyeb->get_Termek_nev().'</div><div><img class="kepek" src="'.$egyeb->get_kep().'"><div>'.$egyeb->get_Ar().'</div><div>'.$egyeb->get_username().'</div></div></div>';
          }

          echo"</div>";
        }
?>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "200px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0px";
        }
      </script>

</body>