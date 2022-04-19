<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Arrays no PHP </title>
</head>
<body>
    
    <h1>Trabalhando com Arrays (Vetores e matrizes)</h1>


    <?php 

        /* Sintaxe com colchetes */
        $bandas = ["banda 1", "banda 2", "banda 3"];

        /* Sintaxe com função array */
        $cursos = array("curso1", "curso2", "curso3", "curso4");

        /* Sintaxe com indicando indice manuelmente*/
        $comidaDeButeco[0] = "Bolinho0";
        $comidaDeButeco[1] = "Bolinho1";
        $comidaDeButeco[2] = "Bolinho2";


        /* Constante de array */

        define("UNIDADE_SENAC", ["Penha", "Tatuape", "Lapa"]);
        
        //usando const
        const FRUTAS = ["Maça", "Abacaxi"]
        
        /* TODOS OS ARRAYS SÃO ULTILIZADO [1] ALGUM TIPO DE NUMERO */
    ?>

    <h2>Saida de dados</h2>

    <ol>
        <li>
            Banda Favorita: <?=$bandas[2]?>
        </li>
        <hr>
        <li>
            Estou cursando: <?=$cursos[3]?>
        </li>
        <hr>
        <li>
            Comida favorita: <?=$comidaDeButeco[0]?>
        </li>
        <hr>
        <li>
            Unidade: <?=UNIDADE_SENAC[2]?>
        </li>
        <hr>
        <li>
            Fruta:<?=FRUTAS[0];?>
        </li>
    </ol>
    <br>
    <br>
    <hr>


    <h2>Arrays Associativos</h2>

    <?php
        $curso = [ //Vetor
            //chave associativa (identicação => valor)
            "nome" => "Gastronomia",
            "cargaHoraria" => 150,
            "unidade" => "Penha"
        ]
    ?>

    <div>
        <p>Curso desejavel: <?=$curso["nome"]?></p>
        <p>Duração: <?=$curso["cargaHoraria"]?> Horas</p>
        <p>Unidade: <?=$curso["unidade"]?></p>
    </div>
    <br>
    <br>
    <hr>
    
    <h2>Matriz (Arrays dentro de Arrays)</h2>

    <?php
        /* Plano de estudos de Front, Back e Design */
        
        $planoDeEstudos = [
                    //   0                 1          2
        /* 0 */ ["JavaScript Avançado", "Node.js", "React"],

            //   0       1      2         3        4
        /* 1 */["PHP", "POO", "MySQL", "Python", "Lua"],

            //       0                     1          2
        /* 2 */["Teoria das coisas", "Photoshop", "Ux/Ui"],
        ];          
    ?>

    <div>
        
        <ol>
            <li>
                Plano de estudo: <?=$planoDeEstudos[0]["2"]?>
            </li>
            
            <li>
                Plano de estudo: <?=$planoDeEstudos[1]["0"]?> / <?=$planoDeEstudos[1]["2"]?>
            </li>
            <li>
                Plano de estudo: <?=$planoDeEstudos[2]["1"]?> e <?=$planoDeEstudos[2]["0"]?>
            </li>
        </ol>

    </div>
    <br>
    <br>
    <hr>

    <h2>Análise de Arrays (debug / depuração)</h2>

    <p><?php var_dump($bandas);?></p>
    <p><?=var_dump($bandas);?></p>
    
    <hr>

    <p><?php print_r($bandas);?></p>
    <p><?=print_r($bandas);?></p>

    <hr>

    <pre>
        <?=var_dump($planoDeEstudos);?>
    </pre>

</body>
</html>