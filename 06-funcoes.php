<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcções no PHP</title>
</head>
<body>

    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como sub-rotina ou procedimento</h2>

    <?php
        function dadosAutor() {
            echo "<div>";
            echo "<p>Rodrigo Pedroso</p>";
            echo "<p>rodrigo.pedroso@live.com </p>";
            echo "</div>";
        }
    ?>

    <section>
        <h3>Chamada da sub-rotina</h3>
        
        <?=dadosAutor()?>


        <article>
            <h4>Outra chamada</h4>

            <?=dadosAutor();?>
        </article>

    </section>


    <h2>Funções como função de dados</h2>

    <?php
        function dadosCursos(){
            return "téc. em Informatica para Internet";
        }
    ?>

    <p>Estamos no curso de <?=dadosCursos()?></p>
    <p><?=dadosCursos()?> é ministrado no Senac Penha</p>
    <hr>

    <h2>Funções com parâmetros (ou argumentos)</h2>

    <?php
    /* O terceiro parâmetro quanto não informado assumirá o valor padrão (no caso, zero) */
        function soma ($valor1, $valor2, $valor3 = 0){
            /* usando variável local: */
            $total = $valor1 + $valor2 + $valor3;
            return $total;
        }
    ?>

    <p><?=soma(20, 20, 30)?></p>
    <p><?=soma(202, 200, 330)?></p>
    <p><?=soma(20, 20)?></p>


    <!-- Variável abaixo é de escopo global -->
    <?php
        $total = soma(200, 2200, 300);
    ?>

    <p><?=$total?></p>

    <hr>
    <!-- passando uma função como condição de um if -->
    <?php
        if(soma(400, 200, 500) > 1000){
            echo "O valor é maior ou igual que 1000";
        }

        function verificarNegativo($valor) {
            // versão 1: if/else tradicional
            // if($valor < 0){
            //     return "Negativo";
            // } else {
            //     return "Positivo";
            // }

            // versão 2: if/else simplificado (operador ternário)
            return $valor < 0 ? "Negativo" : "Positivo";
        }

    ?>
        <p><?=verificarNegativo(10)?></p>
        <p><?=verificarNegativo(-150)?></p>
        <p><?=verificarNegativo(258.99)?></p>


        <hr>

    <h2>Funções anônima (closure, lambda)</h2>


    <?php
        $formataPreco = function($valor){
            return "R$ " . number_format($valor, 2, ",", ".");
        };
    ?>

    <p><?=$formataPreco(1000)?></p>
    <p><?=$formataPreco(1500)?></p>
    <p><?=$formataPreco(1500.75)?></p>

    <hr>


    <h2>Indução de tipos</h2>

    <?php                           // tipo de variável float: valores numéricos podendo ter casa decimal
                                    //int: valor numériocs inteiros
                                    //string: valores de texto
            function calculaMedia(float $n1, $n2, $n3, $n4 = 0): float {    
                $media = ($n1 + $n2 + $n3 + $n4)/ 4;
                return $media;
            }

            function resultado(float $media):string {
                if($media >= 7){
                    return "Aprovado";
                }else{
                    return "Reprovado";
                }
            }

            
    ?>

    <p><?=calculaMedia(10,5,6.5,8.5)?></p>

</body>
</html>