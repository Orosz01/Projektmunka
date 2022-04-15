<body id="Fo">
    
    <h1>Üdv a gyűjtőknek szánt keresekedő oldalon </h1>
    <p>Remélem megtalálod azt amit keresel vagy épp meg tudsz válni valamitől ami már nem fontos számodra, s ezzel gyarapítod mások gyűjteményét.</p>

    <?php
    if(isset($_SESSION['F_Id'])){
    ?>
    <form action="index.php?page=fooldal" method="post" enctype="multipart/form-data" id="alchat">
            <?php
                $a=0;
                echo '<div id="uzik" style="overflow:scroll">';
                echo '</div>';
            ?>
          <div id="bevit">
        <input type="textarea" class="chat" name="uzi">
        <input type="submit" id="chati" name="kuld" value="Küld"> 
         </div>
    </form>
    
    <?php
    }
    ?>
    <script>
        load_chat();
        function gorgetes(){
            var iHeight = $("#uzik").prop("scrollHeight");
            $(document).ready(function() {
                document.getElementById("uzik").scrollTop =iHeight;
            });
        }
        function load_chat(){
            $.ajax({
                url:"controller/chatlekeres.php",
                method:"POST",
                data:{action:'chat'},
                dataType:"JSON",
                success:function(data)
                {
                    var szoveg="";
                    for(i=0;i<data.length;i++){
                        szoveg+=data[i]['uzenet'];
                    }
                    $("#uzik").html(szoveg);
                    gorgetes();
                }  
            })
        }
        setInterval(load_chat,3000);
        </script>

