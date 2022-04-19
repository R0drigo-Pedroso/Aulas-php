<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <style>
        .destaque {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Trabalhando com PHP</h1>
    <hr>
    
    
    <?php
        echo "Desenvolvendo com PHP";
        echo "<h2>Gerando <span class='destaque'> HTML </span> através de PHP.</h2>";
        echo "<h2>Gerando <span class=\"destaque\"> HTML </span> através de PHP.</h2>";
        /*O comodo mais ultilizado é o ESCAPE \\ <- que sem essas barra <-*/
    ?>

</body>
</html>