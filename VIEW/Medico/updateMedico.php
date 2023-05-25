<?php
    include_once '../../MODEL/medico.php';
    include_once '../../BLL/bllMedico.php';

    $medico = new \MODEL\Medico();
    $bll = new \BLL\bllMedico();

    $medico->setId($_POST['txtId']);
    $medico->setNome($_POST['txtNome']);
    $medico->setCrm($_POST['txtCrm']);
    $medico->setNacimento($_POST['txtNacimento']);
    $medico->setTelefone($_POST['txtTelefone']);

    $bll->Update($medico);

    header("location: lstMedico.php");
?>