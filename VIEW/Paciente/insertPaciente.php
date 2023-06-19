<?php
    include_once '../../MODEL/Paciente.php';
    include_once '../../BLL/bllPaciente.php';
    include_once '../../BLL/bllMedicamento.php';
    include_once '../../BLL/bllMedico.php';

    $paciente = new \MODEL\Paciente();
    $bll = new \BLL\bllPaciente();

    $paciente->setNome($_POST['txtNome']);
    $paciente->setTelefone($_POST['txtTelefone']);
    $paciente->setEndereco($_POST['txtEndereco']);
    $paciente->setSituacao($_POST['txtSituacao']);
    $paciente->setIdMedico($_POST['txtIdMedico']);
    $paciente->setIdMedicamento($_POST['txtIdMedicamento']);

    $bll->Insert($paciente);

    header("location: lstPaciente.php");

?>