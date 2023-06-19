<?php
    include_once '../../MODEL/Paciente.php';
    include_once '../../BLL/bllPaciente.php';

    $paciente = new \MODEL\Paciente();
    $bll = new \BLL\bllPaciente();

    $medicamento = $_POST['txtIdMedicamento'];
    $paciente->setId($_POST['txtId']);
    $paciente = $bll->SelectId($paciente->getId());

    if($medicamento == $paciente->getIdMedicamento()){
        $troca = false;
    }else{
        $troca = true;
    }

    $paciente->setNome($_POST['txtNome']);
    $paciente->setTelefone($_POST['txtTelefone']);
    $paciente->setEndereco($_POST['txtEndereco']);
    $paciente->setSituacao($_POST['txtSituacao']);
    $paciente->setIdMedico($_POST['txtIdMedico']);
    $paciente->setIdMedicamento($medicamento);

    $bll->Update($paciente, $troca);

    header("location: lstPaciente.php");
?>