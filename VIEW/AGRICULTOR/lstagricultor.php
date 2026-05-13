<?php
   

   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/DAL/agricultor.php";  
   include_once $_SERVER['DOCUMENT_ROOT'] . "/lpphpadst126/MODEL/agricultor.php";
   
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
      
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Agricultores</title>
   </head>
   <body>
       <h1>Listar Agricultores</h1>
       <table class="striped">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CIDADE</th>
            <th>BAIRRO</th>
            <th>IDADE</th>
        </tr>
        <?php 
            foreach($lstAgricultor as $agricutor){ ?>
            <tr>
                <td><?php echo $agricutor->getId(); ?></td>
                <td><?php echo $agricutor->getNome(); ?></td>
                <td><?php echo $agricutor->getCidade(); ?></td>
                <td><?php echo $agricutor->getBairro(); ?></td>
                <td><?php echo $agricutor->getIdade(); ?></td>
            </tr>

        <?php    }
        ?> 
       </table>
   </body>
   </html>

