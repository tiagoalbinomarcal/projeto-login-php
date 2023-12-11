

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
    <main id="bg-image">
        <section id="login">

        <h1>New user registration</h1>  
        
        <input type="text" name="name" id="iname" placeholder="Insert your name" autocomplete="off" required maxlength="30" class='texts'>
        
        <input type="email" name="email" id="ilogin" placeholder="Insert your email" autocomplete="off" required minlength="5" maxlength="30" class='texts'>

        <input type="password" name="senha" id="isenha" placeholder="Insert your password" autocomplete="current-password" required minlength="8" class='texts'>
        
            
        <input type="password" name="senha" id="isenha" placeholder="Confirm your password" autocomplete="current-password" required minlength="8" class='texts'>
        <label for="isenha">Senha</label><br/>
        
        <button id="signupbutton"><a href="signup.php">Sign up</a></button>
        <img id="orpng" src="../imagens/or2.png" alt="">

        <section id="Ways2Login">

            <a href="#"><div><img id="facebookImg" src="../imagens/facebook.png" alt=""></div></a>

            <a href="#"><div><img id="googleImg" src="../imagens/google.png" alt=""></div></a>

        </section>
        

        <p id="pAccount">Do you already have an account? <a href="../api/index.php">login</a></p>

    
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
