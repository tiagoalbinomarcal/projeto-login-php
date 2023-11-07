<?php
    
    $username = '6vstj24bmmll4krhvrkf';
    $password = 'pscale_pw_X65JX2EQvuCgVS358VbyBKgPz6693IMlBfxzUtYEqKk';
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
