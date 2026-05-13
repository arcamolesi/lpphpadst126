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

    <title>Inserir Agricultor</title>
</head>

<body class="teal lighten-4">
    <div class="container brown lighten-4 col s12">
        <h3 class="center blue darken-2 white-text col s12">
            Inserir Agricultor
        </h3>
        <div class="grey lighten-3 black-text col s10">
            <form action="opinsagricultor.php" method="POST" class="row">

                <div class="input-field col s10">
                    <input type="text" id="nome" name="nome" placeholder="Informe o nome...">
                    <label for="labelNome">Nome: </label>
                </div>

                <div class="input-field col s10">
                    <input type="text" id="cidade" name="cidade" placeholder="Informe a cidade...">
                    <label for="labelCidade">Cidade: </label>
                </div>

                <div class="input-field col s10">
                    <input type="text" id="bairro" name="bairro" placeholder="Informe o bairro...">
                    <label for="labelBairro">Bairro: </label>
                </div>

                <div class="input-field col s10">
                    <input type="text" id="idade" name="idade" placeholder="Informe o idade...">
                    <label for="labelIdade">Idade: </label>
                </div>

                <div class="row center col s10">
                    <button class="btn waves-effect waves-light" type="submit" name="btsalvar">
                        Salvar  <i class="material-icons">save</i>
                    </button>
                </div>

            </form>
           
        </div>
         <br>
    </div>
</body>

</html>