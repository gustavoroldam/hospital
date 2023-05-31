<?php
    //abre a sessão
    session_start();

    //destrói as variáveis de sessão
    unset($_SESSION['login']);

    //Levar para a tela "index.php"
    header("location: index.php");

?>