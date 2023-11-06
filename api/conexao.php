<?php
    
    $username = '7d7r1apgfo6z5k0imzgs';
    $password = 'pscale_pw_Jd4NrpWJ56jUoJoa47kQwxFZe6Id7fIyKLm0fcYPK6D';
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
