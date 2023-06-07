<?php
    include_once '../../MODEL/Medico.php';
    include_once '../../BLL/bllMedico.php';

    $medico = new \MODEL\Medico();
    $bll = new \BLL\bllMedico();

    $medico->setNome($_POST['txtNome']);
    $medico->setCrm($_POST['txtCrm']);
    $medico->setNacimento($_POST['txtNacimento']);
    $medico->setTelefone($_POST['txtTelefone']);

    $bll->Insert($medico);

    header("location: lstMedico.php");

?>