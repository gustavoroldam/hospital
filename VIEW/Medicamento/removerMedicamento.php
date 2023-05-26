<?php
    include_once '../../MODEL/medicamento.php';
    include_once '../../BLL/bllMedicamento.php';

    $id = $_GET['id'];

    $bll = new BLL\bllMedicamento();
    $bll->Delete($id);

    header("location: lstMedicamento.php"); // Ir para a lista

?>