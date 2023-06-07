<?php
// Pegar os Valores da Tabela
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

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="../../VIEW/imagens/logo.png">

    <title>Editar Medico</title>
</head>

<body>

    <?php
    //include_once '\servicos\VIEW\menu.php';
    include_once '../menu.php'; // Para o menu aparecer em todos
    ?>

    <div class="container blue lighten-4 black-text col s12"> <!-- Conteiner / Cor da tabela / col s12 -> tamanho a tabela -->

        <div class="center light-blue darken-4 white-text">
            <h1>Editar Medico</h1>
        </div>

        <div class="row">
            <form action="updateMedico.php" method="POST" id="Medico" class="col s12">
                <div class="input-field col s8">
                    <input type="hidden" name="txtId" value="<?php echo $medico->getId(); ?>">
                    <label for="id" class="black-text bold">Id: <?php echo $medico->getId(); ?></label>
                    <br> <br>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="nome" name="txtNome" class="validate" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="5" maxlength="35" value="<?php echo $medico->getNome(); ?>">
                    <label for="nome" data-error="Preencha corretamente o campo Nome" class="active black-text bold">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="crm" name="txtCrm" class="validate" required pattern="[0-9]+$" required min="11" max="11" value="<?php echo $medico->getCrm(); ?>">
                    <label for="crm" data-error="Preencha corretamente o campo CRM" class="active black-text bold">CRM</label>
                </div>

                <div class="input-field col s8">
                    <input type="date" id="nacimento" name="txtNacimento" class="validate" required pattern="[0-9]+$" required min="8" max="8" value="<?php echo $medico->getNacimento(); ?>">
                    <label for="nacimento" data-error="Preencha corretamente o campo Data de Nacimento" class="active black-text bold">Data de Nacimento</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="telefone" name="txtTelefone" class="validate" required pattern="[0-9]+$" required min="5" max="11" value="<?php echo $medico->getTelefone(); ?>">
                    <label for="telefone" data-error="Preencha corretamente o campo Telefone" class="active black-text bold">Telefone</label>
                </div>

                <div class="light-blue darken-4 center col s12">
                    <br> <!-- O type="submit" ele executa o action="recinsoperador.php" existemte -->
                    <button class="waves-effect waves-light btn green" type="submit"> Gravar <i class="material-icons">save</i> </button>

                    <button class="waves-effect waves-light btn red" type="reset"> Limpar <i class="material-icons">clear_all</i> </button>

                    <button class="waves-effect waves-light btn amber darken-2" type="button" onclick="JavaScript:location.href='lstMedico.php?'"> Voltar <i class="material-icons">arrow_back</i> </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>

    </div>

    <?php
    include_once '../footer.php'; // Para o menu aparecer em todos
    ?>

</body>

</html>