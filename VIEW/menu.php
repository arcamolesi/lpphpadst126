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

    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="./js/init.js"></script>

    <title>Menu</title>
</head>

<body class="brown darken-2 white-text">
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <nav>
        <div class="nav-wrapper brown lighten-1">
            <a href="#" class="brand-logo right">
                <img src="/lpphpadst126/images/logo.jpeg" height="63" width="180" class="materialboxed">
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/lpphpadst126/view/home.php">Home</a></li>
                <li><a href="/lpphpadst126/view/agricultor/lstagricultor.php">Agricultor</a></li>

            </ul>


            <ul id="slide-out" class="sidenav grey darken-1 white-text">
                <li>
                    <div class="user-view orange darken-3">
                        <div class="background white-text ">
                            <img src="/lpphpadst126/images/logo.jpeg" height="70" width="180">
                        </div>
                        <a href="https:www.fema.edu.br"><img src="/lpphpadst126/images/logo.jpeg" height="100" width="250"></a>
                        <a href="#name"><span class="white-text name">Almir Camolesi</span></a>
                        <a href="#email"><span class="white-text email">camolesi@fema.edu.br</span></a>
                    </div>
                </li>
                <li><a href="/lpphpadst126/view/home.php" class="white-text">HOME</a></li>
                <li><a href="/lpphpadst126/VIEW/agricultor/lstAgricultor.php" class="white-text"><i class="material-icons white-text">people</i>Agricultor</a></li>

                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>


        </div>
    </nav>

</body>

</html>