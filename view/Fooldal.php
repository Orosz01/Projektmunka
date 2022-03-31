<body class="Fo">
    
    <h1>Üdv a gyűjtőknek szánt keresekedő oldalon </h1>
    
    <p>Remélem megtalálod azt amit keresel vagy épp meg tudsz válni valamitől ami már nem fontos számodra, s ezzel gyarapítod mások gyűjteményét.</p>
    <?php
    if(isset($_SESSION['F_Id'])){
    ?>
    <form action="index.php?page=fooldal" method="post" enctype="multipart/form-data" id="alchat">
            <?php
                $sql="";
                if($uziid){
                    foreach($uziid as $uzik) {
                        $uzi->set_uzi($uzik,$conn);
                echo '<div id="uzik">'.$uzi->get_username().','.$uzi->get_uzi().'</div>';
                    }
                }
            ?>
        <input type="textarea" class="chat" name="uzi">
        <input type="submit" id="chati" name="kuld" value="Küld"> 
    </form>
    <?php
    }
    ?>
</body>
