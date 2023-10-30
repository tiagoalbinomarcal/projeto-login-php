<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        var_dump($_SESSION);
        die("Pagina protegida para quem está logado!");
    }
?>