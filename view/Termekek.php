<body class="Te">
  <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php?page=termekek&action=Penznem">Pénznemek</a>
        <a href="index.php?page=termekek&action=Tazok">Tazók</a>
        <a href="index.php?page=termekek&action=Kartyak">Kártyák</a>
        <a href="index.php?page=termekek&action=Egyeb_Dolgok">Egyéb termékek</a>
      </div>
      <span style="font-size:30px;cursor:pointer" id="oldalsav" onclick="openNav()">&#9776; Termékek</span>
      <?php 
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Penznem"){
          }
          }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Tazok"){
          }
          }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Kartyak"){
          }
          }
        if (isset($_REQUEST['action'])){
        if($_REQUEST['action']=="Egyeb_dolgok"){
          }
          }
      ?>

          <span>
            
          </span>

      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "200px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0px";
        }
      </script>

</body>