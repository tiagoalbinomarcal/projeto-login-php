<?php

    if(!isset($_COOKIE)){
        setcookie("TestCookie['id']", $usuario['id']);
    }

    if(!isset($_COOKIE['TestCookie'])){
        die("Pagina protegida para quem está logado!!");
    }
?>