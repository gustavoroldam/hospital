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
                    <input id="nome" type="text" name="txtNome" value="<?php echo $medicamento->getNome(); ?>">
                    <label for="nome" class="black-text bold">NOME</label>
                </div>

                <div class="input-field col s8">
                    <input id="validade" type="date" name="txtValidade" value="<?php echo $medicamento->getValidade(); ?>">
                    <label for="validade" class="black-text bold">VALIDADE</label>
                </div>

                <div class="input-field col s8">
                    <input id="qtde" type="text" name="txtQtde" value="<?php echo $medicamento->getQtde(); ?>">
                    <label for="qtde" class="black-text bold">QUANTIDADE</label>
                </div>

                <div class="input-field col s8">
                    <input id="unidade" type="text" name="txtUnidade" value="<?php echo $medicamento->getUnidade(); ?>">
                    <label for="unidade" class="black-text bold">UNIDADE</label>
                </div>

                <div class="input-field col s8">
                    <input id="preco" type="text" name="txtPreco" value="<?php echo $medicamento->getPreco(); ?>">
                    <label for="preco" class="black-text bold">PREÇO</label>
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