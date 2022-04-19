<!DOCTYPE html>
<html pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Processamento de dados usando GET</h1>
    <hr>

    <?php 
        //capturando os dados transmitidos via GET
        $nome=$_GET ["nome"];
        $email=$_GET ["email"];
        $mensagem=$_GET ["mensagem"];
    ?>

    <h2>Dados:</h2>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>mensagem <?=$mensagem?></li>
    </ul>

</body>
</html>