<?php

    include('conexao.php');

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = $conn->prepare("SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'");
        try{
            $sql->execute();
        }catch(Exeption $e){
            echo 'Falha em executar a seleção.';
        }

        if($sql->rowCount() != 1){
            echo 'email ou senha incorretos';
        }else{
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);
            
            if(!isset($_SESSION)){
                session_start();
                echo 'session started';
                
            }

            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['id'] = $usuario['id'];
            var_dump ($_SESSION);
            //header('location: api/pag.php');
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
