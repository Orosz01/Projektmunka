<body class="Re">
    <form class="Regi" action="index.php?page=reg" method="post" value="reg">
        <?php
        echo $jelszo;
        echo $felhasznalonev;
        echo $email;
        echo $hosszu;
        echo $ures;
        ?>
        <span id = "message" > </span>
        <br>
        <br>
        <label for="username">Felhasználó név:</label><br>
        <input type="text" class="area" id="username" name="username"><br>
        <label for="password">Jelszó:</label><br>
        <input type="password" class="area" id="password" name="pasword"><br>
        <label for="password_again">Jelszó újra:</label><br>
        <input type="password" class="area" id="password_again" name="pasword_again"><br>
        <label for="email">Email:</label><br>
        <input type="email" class="area" id="email" name="email"><br><br>
        <input type="submit" name="reg" id="sub" value="Regisztrál"> 
        <script>
            document.getElementById('password_again').oninput=document.getElementById('password').oninput=function (){
                if( document.getElementById('password').value != document.getElementById('password_again').value ){
                    document.getElementById('message').innerHTML="A jelszók nem egyeznek!";
                }else document.getElementById('message').innerHTML="";
            }
		</script>
    </form>

