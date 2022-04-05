<body class="Fo">
    <h1>Üdv a gyűjtőknek szánt keresekedő oldalon </h1>
    <p>Remélem megtalálod azt amit keresel vagy épp meg tudsz válni valamitől ami már nem fontos számodra, s ezzel gyarapítod mások gyűjteményét.</p>

    <?php
    if(isset($_SESSION['F_Id'])){
    ?>

    
    <form action="index.php?page=fooldal" method="post" enctype="multipart/form-data" id="alchat">
            <?php
                $a=0;
                echo '<div id="uzik" style="overflow:scroll">';
                
                if($uziid){
                    for($i=count($uziid)-1;$i>=0;$i--){
                        $uzi->set_uzi($uziid[$i],$conn);
                        echo $uzi->get_username().': '.$uzi->get_uzi().'<br>';
                    }
                }
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
</body>
