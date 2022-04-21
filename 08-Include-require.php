<!-- Fazendo a inclusão de um arquivo php -->
<?php include 'arquivophp/recursos.php';?>
<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    
  

    <h1>Inclusão de Recursos</h1>
    <hr>

    <h2><?=ESCOLA?></h2>

    <p>Estamos fazendo o curso de <?=$curso?></p>

    <nav>
        <ul>
            <?php foreach($tecnologias as $tecnologia){ ?>
                <li>
                    <?=$tecnologia?>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <p>
        O Aluno Chapolin tem 25 anos <?=verificaIdade(25)?>
    </p>

    <p>
        O Aluno Chaves tem 17 anos <?=verificaIdade(17)?>
    </p>

    <article>
        <h2>Conteudo Qualquer</h2>
            
        <?php include "textos.php"?>

    </article>

</body>
</html>