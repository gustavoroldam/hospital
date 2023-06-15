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


    <title>Inserir Paciente</title>
</head>

<body>
    <?php
    include_once '../menu.php';
    ?>

    <div class="container blue lighten-4 black-text col s12"> <!-- Conteiner / Cor da tabela / col s12 -> tamanho a tabela -->

        <div class="center light-blue darken-4 white-text">
            <h1>Inserir Paciente</h1>
        </div>

        <div class="row">
            <form action="insertPaciente.php" method="POST" id="Paciente" class="col s12">
                <div class="input-field col s8">
                    <input type="text" id="nome" name="txtNome" class="validate" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="5" maxlength="35">
                    <label for="nome" data-error="Preencha corretamente o campo Nome" class="active black-text bold">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="telefone" name="txtTelefone" class="validate" required pattern="[0-9]+$" required min="5" max="11">
                    <label for="telefone" data-error="Preencha corretamente o campo Telefone" class="active black-text bold">Telefone</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="endereco" name="txtEndereco" class="validate" required pattern="[A-Za-zÀ-ú\s]+$" required minlength="5" maxlength="35">
                    <label for="endereco" data-error="Preencha corretamente o campo Endereço" class="active black-text bold">Endereço</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="situacao" name="txtSituacao" class="validate" required pattern="[A-Za-zÀ-ú\s]+$" required min="5" max="35">
                    <label for="situacao" data-error="Preencha corretamente o campo Situação" class="active black-text bold">Situação</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="idMedico" name="txtIdMedico" class="validate" required pattern="[0-9]+$" required min="5" max="11">
                    <label for="idMedico" data-error="Preencha corretamente o campo Medico" class="active black-text bold">Medico</label>
                </div>

                <div class="input-field col s8">
                    <input type="text" id="idMedicamento" name="txtIdMedicamento" class="validate" required pattern="[0-9]+$" required min="5" max="11">
                    <label for="idMedicamento" data-error="Preencha corretamente o campo Medicamento" class="active black-text bold">Medicamento</label>
                </div>

                <div class="light-blue darken-4 center col s12">
                    <br> <!-- O type="submit" ele executa o action="recinsoperador.php" existemte -->
                    <button class="waves-effect waves-light btn green" type="submit"> Gravar <i class="material-icons">save</i> </button>

                    <button class="waves-effect waves-light btn red" type="reset"> Limpar <i class="material-icons">clear_all</i> </button>

                    <button class="waves-effect waves-light btn amber darken-2" type="button" onclick="JavaScript:location.href='lstPaciente.php?'"> Voltar <i class="material-icons">arrow_back</i> </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <?php
    include_once '../footer.php';
    ?>
</body>

</html>