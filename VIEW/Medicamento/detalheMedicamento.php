<?php

include_once '../../BLL/bllMedicamento.php';

$id = $_GET['id'];

$bll = new \BLL\bllMedicamento();

$medicamento = $bll->SelectId($id);

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


    <title>Detalhes Medicamento</title>
</head>

<body>
    <?php
    include_once '../menu.php';
    ?>

    <div class="container blue lighten-4 black-text col s12"> <!-- Conteiner / Cor da tabela / col s12 -> tamanho a tabela -->

        <div class="center light-blue darken-4 white-text">
            <h1>Detalhes do Medicamento</h1>
        </div>

        <div class="row">
            <div class="container">
                <div class="input-field col s8">
                    <input type="hidden" name="txtId" value="<?php echo $medicamento->getId(); ?>">
                    <label for="id" class="black-text bold"><h5>Id: <?php echo $medicamento->getId(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="nome" class="black-text bold"><h5>Nome: <?php echo $medicamento->getNome(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="crm" class="black-text bold"><h5>Validade: <?php echo $medicamento->getValidade(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="nacimento" class="black-text bold"><h5>Quantidade: <?php echo $medicamento->getQtde(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="telefone" class="black-text bold"><h5>Unidade: <?php echo $medicamento->getUnidade(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="telefone" class="black-text bold"><h5>Preço: <?php echo $medicamento->getPreco(); ?></h5></label>
                    <br> <br>
                </div>
            </div>
        </div>
        <div class="light-blue darken-4 center col s12">
            <br>
            <button class="waves-effect waves-light btn green" type="button" onclick="JavaScript:location.href='editarMedicamento.php?id=' +
                     <?php echo $medicamento->getId(); ?>"> Editar <i class="material-icons">edit</i> </button>

            <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript:remover( <?php echo $medicamento->getId(); ?> , '<?php echo $medicamento->getNome(); ?>' );"> Excluir <i class="material-icons">delete_forever</i> </button>

            <button class="waves-effect waves-light btn amber darken-2" type="button" onclick="JavaScript:location.href='lstMedicamento.php?'"> Voltar <i class="material-icons">arrow_back</i> </button>
            <br>
            <br>
        </div>
    </div>

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