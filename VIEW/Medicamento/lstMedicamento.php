<?php

    use BLL\bllMedicamento;

    include_once 'C:\xampp\htdocs\hospital\BLL\bllMedicamento.php';

    if (isset($_GET['busca'])){
        $busca = $_GET['busca'];
    }else{
        $busca = null;
    }

    $bll = new \BLL\bllMedicamento();

    if ($busca == null){
        $lstMedicamento = $bll->Select();
    }else{
        $lstMedicamento = $bll->SelectNome($busca);
    }

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
    <link rel="icon" href="../../VIEW/imagens/logo.png">


    <title>Listar Medicamentos</title>
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

    <h1 class="titulo">Listar Medicamentos</h1>

    <div class="row ">
        <div class="input-field">
            <form action="../Medicamento/lstMedicamento.php" method="GET" id="frmBuscaOperador" class="col s8">
                <div class="input-field col s8">
                    <input type="text" placeholder="informe o nome do Medicamento para ser buscado" class="form-control col s10" id="txtBusca" name="busca">
                    <button class="btn waves-effect light-blue darken-4 col m1" type="submit" name="action">
                        <i class="material-icons right">search</i></button>
                </div>
            </form>
        </div>
    </div>

    <table class="striped blue lighten-2">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>VALIDADE</th>
            <th>QUANTIDADE</th>
            <th>UNIDADE</th>
            <th>PREÇO</th>
            <th>FUNÇÕES -
                <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='inserirMedicamento.php'"> <!-- onclick -> Serve para Mudar de Tela -->
                    <i class="material-icons">add</i>
                </a>
            </th>
        </tr>
        <?php
        foreach ($lstMedicamento as $medicamento) {
        ?>
            <tr>
                <td><?php echo $medicamento->getId(); ?></td>
                <td><?php echo $medicamento->getNome(); ?></td>
                <td><?php echo $medicamento->getValidade(); ?></td>
                <td><?php echo $medicamento->getQtde(); ?></td>
                <td><?php echo $medicamento->getUnidade(); ?></td>
                <td><?php echo $medicamento->getPreco(); ?></td>
                <td> <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detalheMedicamento.php?id=' +
                     <?php echo $medicamento->getId(); ?>"> <!-- "?id=..." passsa os valores para o edit -->
                        <i class="material-icons">list</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='editarMedicamento.php?id=' +
                     <?php echo $medicamento->getId(); ?>"> <!-- "?id=..." passsa os valores para o edit -->
                        <i class="material-icons">edit</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light red" type="button" 
                        onclick="JavaScript:remover( <?php echo $medicamento->getId();?> , '<?php echo $medicamento->getNome();?>' );"> <i class="material-icons">delete_forever</i>
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
    function remover(id, nome) {
        if (confirm('Excluir o Medicamento "' + nome + '"?')) {
            location.href = 'removerMedicamento.php?id=' + id;
        }
    }
</script>