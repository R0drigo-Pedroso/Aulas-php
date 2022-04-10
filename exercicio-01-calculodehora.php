<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerciocio 01</title>


    <style>
        div {
            font-size: 18px;
            font-family: "Helvetica";
            background: blue;
            color: white;
            width:36%;
            text-align: center;
            border-radius: 20px;
            padding: 10px;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <h1>Exercicio 01</h1>
    <hr>
    
    <!-- Bloco php -->
    <?php 
        /* Variaveis */
        //$DataHoje ="18/03/2022";
        date_default_timezone_set("America/Sao_Paulo"); //Usar data Dinamica, ou seja apenas quando abre a pagina ou atulizada
                                //horas h:i  
        $DataHoje = date("d/m/Y H:i"); //Função Date() Deixa as data atulizada conforme o dia de execução
        $Nome = "Rodrigo Pedroso";
        $NomeDoCurso = "Técnico internet para internet";
        $CargaHorario = 1000; 
        $LimitedeFaltas = 0.25;                 /* calculo de porcentagem tem que usar as duas variaveis $cargahoraria*limitedeFaltas*/
        $resultado = $CargaHorario*$LimitedeFaltas; /* Calculo de horas */
   ?>
    
    <div>
        <h1>Nome da pessoa: <?=$Nome;?></h1>
        <p>Data atual: <?=$DataHoje;?></p>
        <p>Nome do Curso: <?=$NomeDoCurso;?></p>
        <p>Carga horaria do curso: <?=$CargaHorario;?> horas</p>
        <p>Limite de Faltas hora: <?=$resultado;?> horas</p>
    </div>    
    
</body>
</html>