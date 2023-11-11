<?php
    
    $username = 'j5m76eng7bqdl8p2fy6m';
    $password = 'pscale_pw_mcEtqBDfU9bZ50WCY2E04DSHCd0Z2AcvCByOpttqUsC';
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
