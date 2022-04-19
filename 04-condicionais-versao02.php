<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versão 02 condicional</title>

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

    <h1>(Versão 02) Estruturas de controle Condicionais</h1>
    <hr>

<!--Condicionais simples-->
    <h2>Simples</h2>
        <?php
            $numero = 5;
            if ($numero > 1) {
        ?>  

            <p> <?=$numero?> é maior que 1</p>
        
        <?php
            }
         ?>   
<!-- Final Condicionais simples-->

    <hr>

<!--Condicionais Compostas-->
    <h2>Composta</h2>
            <?php
                $produto = "Notbook";
                $qntEmEstoque = 0; //o que tenho em estoque
                $qntCritica = 14; //minimo necessário
            ?>
                    <h3><?=$produto?></h3>
                
            <?php 
                if ($qntEmEstoque < $qntCritica) {
            
            ?>
                <p class="repor">É necessário comprar!</p>

                <?php
                    if ($qntEmEstoque === 0) {
                ?>     
                    <p><mark><b>URGENTE!</b></mark></p>                

                <?php
                }

            }

                else {
                
                ?>
                    <p class='ok'>Estoque OK!</p>
            
            <?php
                }
            ?>
<!-- Final Condicionais Compostas-->


    <hr>

<!--Condicionais Encadeadas-->
    <h2>Encadeadas</h2>
            <?php
                $opcao = 1; 

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
            ?>

                <p><?=$opcaoEscolha?></p>

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
            ?>

                <p><?=$opcaoEscolha?></p>
            
</body>
</html>