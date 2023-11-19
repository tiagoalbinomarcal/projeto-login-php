<?php

    include('conexao.php');

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = $conn->prepare("SELECT * FROM viewers WHERE email = '$email' AND senha = '$senha'");
        try{
            $sql->execute();
        }catch(Exeption $e){
            echo $e;
        }

        if($sql->rowCount() != 1){
            session_start();
            $_SESSION['login_error'] = true;
        }else{
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);
            setcookie("TestCookie['id']", $usuario['id']);
            /*if(!isset($_COOKIE)){
                setcookie("TestCookie", $usuario['id']);
            }
            */
            
            header('location: api/pag.php');
        }

        

    } 

?>

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
    
      
</head>
<body>
    <main>
        <section id="login">

            <div id="imagem">
            </div>
            <div id="form">
                <h1>Login</h1>
                <p>Seja bem vindo(a). Faça login para acessar sua conta e poder fazer as configurações no seu ambiente.</p>
                <form method="post" autocomplete="on">
                <?php
            
                    if (isset($_SESSION['login_error'])){
                        if($_SESSION['login_error'] == true){
                            echo '<div class="alert alert-warning" role="alert">Login or password incorrect! </div>'; //alert login fail
                                                    
                        }

                        }
                        
                    
                
                ?>
                    <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="email" name="email" id="ilogin" placeholder="Insira seu e-mail" autocomplete="email" required minlength="5" maxlength="30" class='texts'>
                        <label for="ilogin">Login</label>
                    </div>
                    <div>
                        <div class="campo">
                            <i class="material-icons">key</i>
                            <input type="password" name="senha" id="isenha" placeholder="Insira sua senha" autocomplete="current-password" required minlength="8" class='texts'>
                            <label for="isenha">Senha</label><br/>
                        </div>
                        <input type="submit" value="Entrar" id="sub">
                        <a href="pag1.html" id="esqueci">Esqueci a senha <i class="material-icons" id="iconeemail">email</i></a>
                    </div>

                </form>
            </div>
        </section>

    </main>

</body>
</html>
