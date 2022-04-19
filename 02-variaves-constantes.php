<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>

    <style>
        <?php $cor = "red"; ?>

        p {
            color: <?=$cor?>
        }
    </style>

</head>
<body>
    <h1>Manipulação dados na memória</h1>
    <hr>

    <?php
        /*Variáveis*/

        $curso = "Técnico em Desenvolvimento Web";
        $ano = 2022; /*Periodo "Inteiro"*/
        $preco = 2500.45; /*seria Real (float)*/
    
        echo "<h2>Saídas</h2>"; /*Quando usa "" aspas dupla permite a interpolação (variável e texto)*/
        echo '<p>$curso</p>'; /* Quando usa '' aspas simples e identificado tudo como texto */
        echo "<p>$ano</p>";
        echo "<p>$preco</p>";
    
    /* Estamos fazendo o curso técnico em Desenvolvimento web no ano de 2022 */
    echo "<p> Estamos fazendo o curso $curso no ano de $ano </p>;" /* está dentro do proporio php */

    ?>
    
    <h2>Saída da dados usando sintaxe simplificada</h2>
    <p><?php echo $curso; ?></p>
    <hr>
    outra versão melhorada
    <p><?= $curso;?></p> <!-- versão mais utilizada. -->

    <p>Estamos fazendo o curso <?=$curso;?> no ano de <?=$ano;?></p> <!-- Esta dentro do proprio HTML (o mercado utiliza dessa maneira) - se torna uma boa pratica  -->
<hr>
<br>

    <?php 

    /* Constantes */

    /* 1º forma: usando a função define ("NOME", "VALOR") */

    define("MEU_NOME", "RODRIGO");

    /* 2º Forma usando a palavra-chave const */
    
    const ESCOLA = "Senac";
    ?>

    <p>Olá Me Chamo <?=MEU_NOME?> </p>
    <p>Estamos fazendo o curso <b> <?=ESCOLA?></b> </p>


    <?php 
        /* Versão concatenada */
        echo "<p>Olá me chamo ".MEU_NOME."</p>";
        echo "<p>Estamos fazendo o curso no <b>".ESCOLA."</b> </p>"; 
    ?>

</body>
</html>