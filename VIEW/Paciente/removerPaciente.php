<?php
    include_once '../../MODEL/Paciente.php';
    include_once '../../BLL/bllPaciente.php';

    $id = $_GET['id'];

    $bll = new BLL\bllPaciente();
    $bll->Delete($id);

    header("location: lstPaciente.php"); // Ir para a lista

?>