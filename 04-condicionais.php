<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .ok {
            color: blue;
        }

        .repor {
            color: red;
        }
</style>

</head>
<body>

    <h1>Estruturas de controle Condicionais</h1>
    <hr>

<!--Condicionais simples-->
    <h2>Simples</h2>
            
        <?php
            $numero = 5;
            if ($numero > 1) {
                echo "<p>A Variavel informada é maior que 1</p>";
            }

            /* Sintaxe alternatica (Omititndo chaves) */

            //if ($numero > 1) echo "<p>$numero é maior que 1</p>";
        ?>
<!-- Final Condicionais simples-->

    <hr>

<!--Condicionais Compostas-->
    <h2>Composta</h2>
            <?php
                $produto = "Notbook";
                $qntEmEstoque = 0; //o que tenho em estoque
                $qntCritica = 14; //minimo necessário
                
                echo "<h3>$produto</h3>";
                if ($qntEmEstoque < $qntCritica) {
                    echo "<p class='repor'>É necessário comprar!</p>";
                
                    //condicional aninhada
                    if ($qntEmEstoque === 0) {
                        echo "<p><mark><b>URGENTE!</b></mark></p>";
                    }
                }

                else {
                    echo "<p class='ok'>Estoque OK!</p>";
                }
            ?>
<!-- Final Condicionais Compostas-->


    <hr>

<!--Condicionais Encadeadas-->
    <h2>Encadeadas</h2>
            <?php
                /* Cardápio Digital
                    1 -> Pastel
                    2 -> Pizza
                    3-> Esfiha
                    x -> opção Inválida
                */

                //Variável
                $opcao = 1; //comece com qualquer valor

                if ($opcao === 1) {
                   $opcaoEscolha = "Pastel";
                }

                elseif ($opcao === 2) {
                    $opcaoEscolha = "Pizza";
                }

                elseif ($opcao === 3) {
                    $opcaoEscolha = "Esfiha";
                }

                else {
                    $opcaoEscolha = "Opção Inválida";
                }

                echo "<p>$opcaoEscolha</p>";
            ?>
<!--Final Condicionais Compostas-->

<hr>

<!--Condicional switch-->
<h2>Condicional Switch</h2>
            <?php
                switch ($opcao = 1) {
                    case 1: $opcaoEscolha = "Pastel"; 
                    break;
                    
                    case 2: $opcaoEscolha = "Pizza";
                    break;

                    case 3: $opcaoEscolha = "Esfiha";
                    break;

                    default: $opcaoEscolha = "Opção inválida";
                    break;    
                }
                
                echo "<p>$opcaoEscolha</p>";
            
            
            ?>

</body>
</html>