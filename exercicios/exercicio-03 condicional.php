<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 condicional</title>

    <style>

        body {
            background: #fffff9;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
        }

        div {
            background: green;
            width: 50%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        p {
            font-size: 18px;
            color: #000000;
            margin: 0 auto;
        }
    </style>

</head>
<body>
    <h1>Calculo de salario</h1>

    <?php

        $salarioAtual = 1000; //entrada

        if ($salarioAtual < 500) {
            $salarioAtualizado = $salarioAtual*1.15;
        }

        elseif ($salarioAtual <= 1000) {
            $salarioAtualizado = $salarioAtual*1.10;
        }

        else {
            $salarioAtualizado = $salarioAtual*1.05;
        }
    
    ?>

    <div>    
        <p>Salario antes de ter aumento era R$ <?=number_format($salarioAtual, 2, ",", ".")?></p> 
        <p>Salario atualizado é R$ <?=number_format($salarioAtualizado, 2, ",", ".")?></p>
    </div>
</body>
</html>