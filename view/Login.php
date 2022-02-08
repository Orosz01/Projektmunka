<body class="Lo">
    <form class="Be" actio="index.php?page=login" method="post">
        <?php
        if(isset($loginError) and $loginError!="")
        echo $loginError . "<br>";
        ?>
        <label for="username">Felhasználó név:</label><br>
        <input type="text" class="area" id="username" name="username"><br>
        <label for="password">Jelszó:</label><br>
        <input type="password" class="area" id="password" name="pasword"><br><br>
        <input type="submit" id="submit" value="Bejelentkezés"> 
    </form>
</body>