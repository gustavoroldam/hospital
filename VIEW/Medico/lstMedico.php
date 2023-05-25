<?php

use BLL\bllMedico;

include_once 'C:\xampp\htdocs\hospital\BLL\bllMedico.php';

$bll = new \BLL\bllMedico();
$lstMedico = $bll->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Lista Medico</title>
</head>

<style>
    .titulo {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #0d47a1;
    }
</style>

<body>
    <?php
    include_once '../menu.php';
    ?>

    <h1 class="titulo">Listar Operadores</h1>

    <table class="striped blue lighten-2">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CRM</th>
            <th>DATA DE NACIMENTO</th>
            <th>TELEFONE</th>
            <th>FUNÇÕES -
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='inserirMedico.php'"> <!-- onclick -> Serve para Mudar de Tela -->
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        foreach ($lstMedico as $medico) {
        ?>
            <tr>
                <td><?php echo $medico->getId(); ?></td>
                <td><?php echo $medico->getNome(); ?></td>
                <td><?php echo $medico->getCrm(); ?></td>
                <td><?php echo $medico->getNacimento(); ?></td>
                <td><?php echo $medico->getTelefone(); ?></td>
                <td> <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detoperador.php?id=' +
                     <?php echo $medico->getId(); ?>"> <!-- "?id=..." passsa os valores para o edit -->
                        <i class="material-icons">list</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='editarMedico.php?id=' +
                     <?php echo $medico->getId(); ?>"> <!-- "?id=..." passsa os valores para o edit -->
                        <i class="material-icons">edit</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light red" type="button" 
                        onclick="JavaScript:remover( <?php echo $medico->getId();?> );"> <i class="material-icons">delete_forever</i>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

    <?php
    include_once '../footer.php';
    ?>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Medico' + id + '?')) {
            location.href = 'removerMedico.php?id=' + id;
        }
    }
</script>