<?php
    
    $username = '0o6bt1xfny63103vvlau';
    $password = 'pscale_pw_rsMSkppj3fpjLsREVGg9yxrBgJrkkWuR4lZjSa8ep34';
    $options = array(
        PDO::MYSQL_ATTR_SSL_CA => 'C:\xampp\htdocs\php-projeto-login\projeto-login-php\api\cacert2.pem',
    );

    
    try{
        $conn = new PDO('mysql:host=aws.connect.psdb.cloud;dbname=php-project', $username, $password, $options);
    }catch(Exeption $e){
        die('falha ao conectar com o banco de dados!');
    }
   
    //SSL -> sistema de decodificação
    //CA file -> arquivo dos certificados autenticadores

?>
