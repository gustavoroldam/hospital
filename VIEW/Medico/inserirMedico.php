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


    <title>Inserir Medico</title>
</head>

<body>
    <?php
    include_once '../menu.php';
    ?>

    <div class="container blue lighten-4 black-text col s12"> <!-- Conteiner / Cor da tabela / col s12 -> tamanho a tabela -->

        <div class="center light-blue darken-4 white-text">
            <h1>Inserir Medico</h1>
        </div>

        <div class="row">
            <form action="insertMedico.php" method="POST" id="Medico" class="col s12">
                <div class="input-field col s8">
                    <input id="nome" type="text" name="txtNome">
                    <label for="nome" class="black-text bold">NOME</label>
                </div>

                <div class="input-field col s8">
                    <input id="crm" type="text" name="txtCrm">
                    <label for="crm" class="black-text bold">CRM</label>
                </div>

                <div class="input-field col s8">
                    <input id="nacimento" type="date" name="txtNacimento">
                    <label for="nacimento" class="black-text bold">Data de Nacimento</label>
                </div>

                <div class="input-field col s8">
                    <input id="telefone" type="text" name="txtTelefone">
                    <label for="telefone" class="black-text bold">Telefone</label>
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
    include_once '../footer.php';
    ?>
</body>

</html>