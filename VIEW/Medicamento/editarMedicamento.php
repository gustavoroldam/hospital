<?php
// Pegar os Valores da Tabela
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

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="../../VIEW/imagens/logo.png">

    <title>Editar Medicamento</title>
</head>

<body>

    <?php
    //include_once '\servicos\VIEW\menu.php';
    include_once '../menu.php'; // Para o menu aparecer em todos
    ?>

    <div class="container blue lighten-4 black-text col s12"> <!-- Conteiner / Cor da tabela / col s12 -> tamanho a tabela -->

        <div class="center light-blue darken-4 white-text">
            <h1>Editar Medicamento</h1>
        </div>

        <div class="row">
            <form action="updateMedicamento.php" method="POST" id="Medicamento" class="col s12">
                <div class="input-field col s8">
                    <input type="hidden" name="txtId" value="<?php echo $medicamento->getId(); ?>">
                    <label for="id" class="black-text bold">Id: <?php echo $medicamento->getId(); ?></label>
                    <br> <br>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="nome" name="txtNome" class="validate" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="5" maxlength="50" value="<?php echo $medicamento->getNome(); ?>">
                    <label for="nome" data-error="Preencha corretamente o campo Nome" class="active black-text bold">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input type="date" id="validade" name="txtValidade" class="validate" required pattern="[0-9]+$" required min="8" max="8" value="<?php echo $medicamento->getValidade(); ?>">
                    <label for="validade" data-error="Preencha corretamente o campo Validade" class="active black-text bold">Validade</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="qtde" name="txtQtde" class="validate" required pattern="[0-9]+$" required min="11" max="11" value="<?php echo $medicamento->getQtde(); ?>">
                    <label for="qtde" data-error="Preencha corretamente o campo Quantidade" class="active black-text bold">Quantidade</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="unidade" name="txtUnidade" class="validate" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="1" maxlength="5" value="<?php echo $medicamento->getUnidade(); ?>">
                    <label for="unidade" data-error="Preencha corretamente o campo Unidade" class="active black-text bold">Unidade</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="preco" name="txtPreco" class="validate" required pattern="[0.0-9.0]+$" required min="1" max="9999" value="<?php echo $medicamento->getPreco(); ?>">
                    <label for="preco" data-error="Preencha corretamente o campo Preço" class="active black-text bold">Preço</label>
                </div>

                <div class="light-blue darken-4 center col s12">
                    <br> <!-- O type="submit" ele executa o action="recinsoperador.php" existemte -->
                    <button class="waves-effect waves-light btn green" type="submit"> Gravar <i class="material-icons">save</i> </button>

                    <button class="waves-effect waves-light btn red" type="reset"> Limpar <i class="material-icons">clear_all</i> </button>

                    <button class="waves-effect waves-light btn amber darken-2" type="button" onclick="JavaScript:location.href='lstMedicamento.php?'"> Voltar <i class="material-icons">arrow_back</i> </button>
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