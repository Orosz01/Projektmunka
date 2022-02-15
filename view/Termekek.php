<body class="Te">
  <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php?page=termekek&action=Penzem">Pénznemek</a>
        <a href="T">Tazók</a>
        <a href="K">Kártyák</a>
        <a href="E">Egyéb termékek</a>
      </div>
      <span style="font-size:30px;cursor:pointer" id="oldalsav" onclick="openNav()">&#9776; Termékek</span>
      <?php 
        if (isset($_REQUEST['action'])){
          if($_REQUEST['action']=="Penzem"){
            ?>
              
            <?php
          } 
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