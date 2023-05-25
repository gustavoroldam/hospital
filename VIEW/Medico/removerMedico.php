<?php
    include_once '../../MODEL/medico.php';
    include_once '../../BLL/bllMedico.php';

    $id = $_GET['id'];

    $bll = new BLL\bllMedico();
    $bll->Delete($id);

    header("location: lstMedico.php"); // Ir para a lista

?>