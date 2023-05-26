<?php
    include_once '../../MODEL/Medicamento.php';
    include_once '../../BLL/bllMedicamento.php';

    $medicamento = new \MODEL\Medicamento();
    $bll = new \BLL\bllMedicamento();

    $medicamento->setNome($_POST['txtNome']);
    $medicamento->setValidade($_POST['txtValidade']);
    $medicamento->setQtde($_POST['txtQtde']);
    $medicamento->setUnidade($_POST['txtUnidade']);
    $medicamento->setPreco($_POST['txtPreco']);

    $bll->Update($medicamento);

    header("location: lstMedicamento.php");
?>