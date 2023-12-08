

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mediaqueries.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet "href="../css/signupstyle.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    
    <script type="text/javascript" src="jquery.js"></script>
      
</head>
<body>
    <main class="bg-image">
        <section id="login">

        <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="email" name="email" id="ilogin" placeholder="Insert your email" autocomplete="email" required minlength="5" maxlength="30" class='texts'>
                        <label for="ilogin">Login</label>
                    </div>
                    <div>
                        <div class="campo">
                            <i class="material-icons">key</i>
                            <input type="password" name="senha" id="isenha" placeholder="Insert your password" autocomplete="current-password" required minlength="8" class='texts'>
                            <label for="isenha">Senha</label><br/>
                        </div>
                        <input type="submit" value="Login" id="sub">
                        <img id="orpng" src="../imagens/or.png" alt="">
                        <button id="signupbutton"><a href="signup.php">Sign up</a></button>
                        <a href="pag1.html" id="esqueci">Forgot your password?</a>
        </section>

    </main>

    <script>

        function closePopup() {
        document.getElementById("javascript2").style.display = "none";
    
        //if (window.matchMedia("(max-width: 601px)").matches){
            document.getElementById("login").style.height = "560px";
        //}
        
        }
    </script>

</body>
</html>
