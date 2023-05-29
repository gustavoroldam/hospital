<?php

    include_once 'C:/xampp/htdocs/hospital/BLL/bllUsuario.php';

    $usuario = trim($_POST['usuario']);
    $senha = trim($_POST['senha']);

    $bll = new \BLL\bllUsuario();

    $objUsuario = $bll->SelectUser($usuario);

    echo "Usuario: " . $objUsuario->getUsuario() . "<br>";
    echo "Senha: " . $objUsuario->getSenha() . "<br>";

?>