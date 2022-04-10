<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style> 
        body{
            background-color: #f5f5f5;
        }

        p {
            font-size: 4em;
            text-align: center;
            color: red;
            text-transform: uppercase;
            background: black;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: white;
            text-transform: uppercase;
            background: black;
            padding: 20px;
        }

        ul {
            margin: 0 auto;
            list-style: none;
            text-align: center;
            background: black;
            width: 100%;
        }

        ul li {
            display: inline-block;
            margin: 10px;
            padding: 20px;
            background-color: #f5f5c8;
            font-size: 1.5em;
            text-transform: capitalize;
            border-radius: 10px;
        }


    </style>

<body>
    
<?php 

    if( empty($_POST['preco']) || empty($_POST['fabricante']) ) {
    ?>
        <p>Você deve preencher Produto e Fabricante</p>

    <?php

    } else {
        //capturando os dados transmitidos via POST
        $produto=filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
        $fabricantes=filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
        $preco=filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); //FILTER_FLAG_ALLOW_FRACTION permite que o preço seja decimal
        $mensagem=filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    
        $preco=number_format($preco, 2, ",", ".");

        $interesses=filter_var_array($_POST["interesses"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);

        $informativos=filter_input(INPUT_POST, "informativos", FILTER_SANITIZE_SPECIAL_CHARS);

    ?>

        <h2>Cadastro Realizado com Sucesso:</h2>
            <ul>
                <li>Produto: <?=$produto?></li>
                <li>fabricantes: <?=$fabricantes?></li>
                <li>Preco: <?=$preco?></li>
                <li>mensagem: <?=$mensagem?></li>
            </ul>
    <?php } ?>
    </body>
</html>