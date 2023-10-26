<?php
    
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO('mysql:host=localhost;dbname=projetologin', $username, $password);
    }catch(Exeption $e){
        die('falha ao conectar com o banco de dados!');
    }
   
?>
