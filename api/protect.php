<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Pagina protegida para quem está logado!");
    }
?>