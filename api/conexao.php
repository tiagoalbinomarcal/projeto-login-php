<?php
    
    $username = 'sql10657725';
    $password = 'VGihupUgNB';
    try{
        $conn = new PDO('mysql:host=sql10.freesqldatabase.com;dbname=sql10657725', $username, $password);
    }catch(Exeption $e){
        die('falha ao conectar com o banco de dados!');
    }
   
?>
