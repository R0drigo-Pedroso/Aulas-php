<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop's</title>
</head>

    <style>
        ol {
            background: blue;
            padding: 20px;
        }

        ol li {
            margin: 10px;
            color: white;
            text-transform: uppercase;
        }
    </style>

<body>
    
    <h1>Estruturação de controle repetição (loop)</h1>
    <hr>
    <br>

    <h2>While (enquanto)</h2>
    
        <?php
            $i = 1;
        
            while($i <=5){
        ?>
        
                <p><?=$i?> Seus item estão aqui</p>
        
        <?php
                $i++; //usando incremento

                //$contador = $contador + 1; //também está correto.
            }        
        ?>

    <hr>

    <h2>do/While (repita)</h2>

            <?php 
                $j = 1;
                do {
            ?>

                    <div><h3>Olá Mundo</h3></div>
                    
            <?php
                $j++;
                }
                while($j <=3);
            ?>

    <hr>

    <h2>for (para)</h2>

            <?php 

                for ($i=1; $i <=10; $i++){
            
                echo $i." ";  //<div><h3>Olá Mundo</h3></div>
            }
            ?>
    <hr>

    <h2>Exercicios</h2>
/* exercicios*/
/* 1 - crie uma array com os meses do ano
   2 - Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada
*/
<br>
<br>

    <?php 

            //Loop usando Arrays e For = Primeiro declarei o que seria executado,
            // e o for é usando para realizar a repetição da declaração do arrays

        $meses=[
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", 
        "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", 
        "Dezembro"
        ] 
    ?>

        <h2>Lista de saidas</h2>
        
            <ol>
                <?php               
                                    //count -> executa o que esta dentra da arrays ou seja conforme o tamanho da arrays  
                    for ($i=0; $i < count($meses); $i++){
                ?>
                    <li>
                        Esse é o mês <?=$meses[$i]?>
                    </li>
                <?php
                }
                ?>
            </ol>


        <hr>

        <h2>Foreach (para cada...)</h2>      

             <ol>   
                <?php foreach($meses as $mes){ ?>
                   <li><?=$mes?></li>
                <?php } ?>            
            </ol>


        <hr>
        
        <h2>Clubes com Foreach</h2>
       
       <?php      
                    $clubes = [
                        "Corinthians" => "Timão",
                        "Pameiras" => "Porco",
                        "São Paulo" => "Tricolor",
                        "Santos" => "Peixe"
                    ];

        foreach ($clubes as $clube => $apelido){
            ?>
            <p><?=$clube ." é conhecido como ". $apelido?></p>

        <?php    
        }
        ?>

        <h2>Associativa com Foreach</h2>
        <?php
            $alunos = [

                [
                "nome" => "Chaves",
                "idade" => "8"
            
                ],

                [
                    "nome" => "Chapolin",
                    "idade" => "20"
                ],

                [
                    "nome" => "Chiquinha",
                    "idade" => "10"
                ],
            ];
        
        foreach ($alunos as $aluno){
        ?>

        <p>Nome: <?=$aluno["nome"]. " <br> Idade é: ". $aluno["idade"]?></p>

        <?php
        }
        ?>

</body>
</html>