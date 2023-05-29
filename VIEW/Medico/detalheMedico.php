<?php

include_once '../../BLL/bllMedico.php';

$id = $_GET['id'];

$bll = new \BLL\bllMedico();

$medico = $bll->SelectId($id);

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


    <title>Detalhes Medico</title>
</head>

<body>
    <?php
    include_once '../menu.php';
    ?>

    <div class="container blue lighten-4 black-text col s12"> <!-- Conteiner / Cor da tabela / col s12 -> tamanho a tabela -->

        <div class="center light-blue darken-4 white-text">
            <h1>Detalhes do Medico</h1>
        </div>

        <div class="row">
            <div class="container">
                <div class="input-field col s8">
                    <input type="hidden" name="txtId" value="<?php echo $medico->getId(); ?>">
                    <label for="id" class="black-text bold"><h5>Id: <?php echo $medico->getId(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="nome" class="black-text bold"><h5>Nome: <?php echo $medico->getNome(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="crm" class="black-text bold"><h5>CRM: <?php echo $medico->getCrm(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="nacimento" class="black-text bold"><h5>Data de Nacimento: <?php echo $medico->getNacimento(); ?></h5></label>
                    <br>
                </div>

                <div class="input-field col s8">
                    <label for="telefone" class="black-text bold"><h5>Telefone: <?php echo $medico->getTelefone(); ?></h5></label>
                    <br> <br>
                </div>
            </div>
        </div>
        <div class="light-blue darken-4 center col s12">
            <br>
            <button class="waves-effect waves-light btn green" type="button" onclick="JavaScript:location.href='editarMedico.php?id=' +
                     <?php echo $medico->getId(); ?>"> Editar <i class="material-icons">edit</i> </button>

            <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript:remover( <?php echo $medico->getId(); ?> , '<?php echo $medico->getNome(); ?>' );"> Excluir <i class="material-icons">delete_forever</i> </button>

            <button class="waves-effect waves-light btn amber darken-2" type="button" onclick="JavaScript:location.href='lstMedico.php?'"> Voltar <i class="material-icons">arrow_back</i> </button>
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
        if (confirm('Excluir o Medico "' + nome + '"?')) {
            location.href = 'removerMedico.php?id=' + id;
        }
    }
</script>