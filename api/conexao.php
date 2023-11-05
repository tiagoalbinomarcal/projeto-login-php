<?php
    
    $username = 'oonmaruvkhd828pvfixe';
    $password = 'pscale_pw_wEGPvo2v8NAjhWY34zVqpU7MDnndBMtqv4erUhDtCI9';
    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => 'C:\xampp\htdocs\php-projeto-login\projeto-login-php\api\cacert.pem',
    );

    
    try{
        $conn = new PDO('mysql:host=aws.connect.psdb.cloud;dbname=php-project', $username, $password, $options);
    }catch(Exeption $e){
        die('falha ao conectar com o banco de dados!');
    }
   
    //SSL -> sistema de decodificação
    //CA file -> arquivo dos certificados autenticadores

?>
