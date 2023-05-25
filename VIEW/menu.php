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


    <title>menu</title>
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id="medico" class="dropdown-content">
        <li><a href="#!" class="light-blue-text">Detalhamento</a></li>
        <li><a href="#!" class="light-blue-text">Alterar</a></li>
        <li><a href="#!" class="light-blue-text">Cadastrar</a></li>
        <li class="divider"></li>
        <li><a href="\hospital\VIEW\Medico\lstMedico.php" class="light-blue-text">Lista</a></li>
    </ul>
    <ul id="paciente" class="dropdown-content">
        <li><a href="#!" class="light-blue-text">Detalhamento</a></li>
        <li><a href="#!" class="light-blue-text">Alterar</a></li>
        <li><a href="#!" class="light-blue-text">Cadastrar</a></li>
        <li class="divider"></li>
        <li><a href="#!" class="light-blue-text">Lista</a></li>
    </ul>
    <ul id="medicamento" class="dropdown-content">
        <li><a href="#!" class="light-blue-text">Detalhamento</a></li>
        <li><a href="#!" class="light-blue-text">Alterar</a></li>
        <li><a href="#!" class="light-blue-text">Cadastrar</a></li>
        <li class="divider"></li>
        <li><a href="#!" class="light-blue-text">Lista</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="#!" class="brand-logo"><img src="../imagens/logo_branco.jpg" alt="Girl in a jacket" width="200" height="64"></a>
            <ul class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="medico">Medico<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="paciente">Paciente<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="medicamento">Medicamento<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>

</html>

<script>
    const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
    const instancesDropdown = M.Dropdown.init(elemsDropdown, {
        coverTrigger: false
    })
</script>