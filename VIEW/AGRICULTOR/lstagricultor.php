<?php


include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/DAL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/MODEL/agricultor.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/view/menu.php";

use DAL\Agricultor;

$dalAgricultor = new \DAL\Agricultor();
$lstAgricultor = $dalAgricultor->Select();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--para usar icones na página -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Agricultores</title>
</head>

<body class="teal lighten-4">
    <h1>Listar Agricultores</h1>

    <a class="btn-floating btn-large waves-effect waves-light green">
        <i class="material-icons"
            onclick="JavaScript:location.href='frminsagricultor.php'">add</i>
    </a>



    <table class="striped">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CIDADE</th>
            <th>BAIRRO</th>
            <th>IDADE</th>
            <th>OPERAÇÕES</th>
        </tr>
        <?php
        foreach ($lstAgricultor as $agricultor) { ?>
            <tr>
                <td><?php echo $agricultor->getId(); ?></td>
                <td><?php echo $agricultor->getNome(); ?></td>
                <td><?php echo $agricultor->getCidade(); ?></td>
                <td><?php echo $agricultor->getBairro(); ?></td>
                <td><?php echo $agricultor->getIdade(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect orange">
                        <i class="material-icons"
                            onclick="JavaScript:location.href='frmedtagricultor.php?id=' + '<?php echo $agricultor->getId(); ?>'">edit</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect blue">
                        <i class="material-icons"
                            onclick="JavaScript:location.href='frmdetagricultor.php?id=' + '<?php echo $agricultor->getId(); ?>'">details</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect red">
                        <i class="material-icons"
                             onclick="JavaScript: remover( <?php echo $agricultor->getId(); ?> )"
                            >delete</i>
                    </a>

                </td>
            </tr>

        <?php    }
        ?>
    </table>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir Agricultor ' + id + '?')) {
            location.href = 'opremagricultor.php?id=' + id;
        }
    }
</script>