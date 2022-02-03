<body class="Te">
  <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="P">Pénznemek</a>
        <a href="T">Tazók</a>
        <a href="K">Kártyák</a>
        <a href="E">Egyéb termékek</a>
      </div>
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Termékek</span>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "200px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0px";
        }
      </script>
</body>