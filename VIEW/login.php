<?php

    include_once 'C:/xampp/htdocs/hospital/BLL/bllUsuario.php';

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    $bll = new \BLL\bllUsuario();

    $objUsuario = $bll->SelectUser($usuario);

    if($objUsuario != null){
        if (md5($senha) == $objUsuario->getSenha()) {
            /*echo "Usuário: " . $objUsuario->getUsuario() . "</br>";
            echo "Senha: " . $objUsuario->getSenha() . "</br>";*/

            session_start();
            $_SESSION['login'] = $objUsuario->getUsuario();
            header("location:menu.php");
        }
        else{
            header("location:index.php");
        }
    }
    else{
        header("location:index.php");
    }

?>