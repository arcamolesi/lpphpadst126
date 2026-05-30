<?php
$id = $_GET['id'];

//echo $id;
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/view/menu.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/MODEL/agricultor.php";


$dalAgricultor = new DAL\Agricultor();
$agricultor = $dalAgricultor->SelectById($id);

//echo $agricultor->getNome();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--para usar icones na página -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Detalhes de Agricultor</title>
</head>

<body class="teal lighten-4">
    <div class="container brown lighten-4 col s12">
        <h3 class="center blue darken-2 white-text col s12">
            Detalhes de Agricultor
        </h3>
        <div class="grey lighten-3 black-text col s10">
            <form  class="row">
                <div class="input-field col s10">
                    <label for="id" class="black-text bold">ID: <?php echo $agricultor->getID() ?></label>
                </div>

                <div class="input-field col s10">
                    <label for="nome" class="black-text bold">Nome: <?php echo $agricultor->getNome() ?></label>
                </div>

                <div class="input-field col s10">
                    <label for="cidade" class="black-text bold">Cidade: <?php echo $agricultor->getCidade() ?></label>
                </div>

                <div class="input-field col s10">
                    <label for="bairro" class="black-text bold">Bairro: <?php echo $agricultor->getBairro() ?></label>

                </div>

                <div class="input-field col s10">
                    <label for="idade" class="black-text bold">Idade: <?php echo $agricultor->getIdade() ?></label>
                </div>

                <br>
                <br>

                <div class="row center col s10">
                    <a class="waves-effect waves-light btn indigo darken-4"
                        onclick="JavaScript:location.href='lstagricultor.php'">
                        <i class="material-icons right">arrow_back</i>Voltar
                    </a>

                    <a class="waves-effect waves-light btn orange"
                        onclick="JavaScript:location.href='frmedtagricultor.php?id=' + '<?php echo $agricultor->getId(); ?>'">
                        <i class="material-icons right">edit</i>Editar
                    </a>

                     <a class="waves-effect waves-light btn red"
                         onclick="JavaScript: remover( <?php echo $agricultor->getId(); ?> )"
                        >
                        <i class="material-icons right">delete</i>Remover
                    </a>
 
                </div>

            </form>

        </div>
        <br>
    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir Agricultor ' + id + '?')) {
            location.href = 'opremagricultor.php?id=' + id;
        }
    }
</script>