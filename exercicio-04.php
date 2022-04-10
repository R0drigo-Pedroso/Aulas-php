<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 Loop e Arrays</title>
</head>
<body>

    <h2>Exercicio 05 Loop e Arrays</h2>
    <hr>

    <?php

        $number = array(); 

        $tags = [
            "HTML" => "Estruturação",
            "CSS" => "Estilos",
            "JS" => "Comportamentos",
            "PHP" => "Back-End"
        ];

        $tag = [
            "Estruturação","Estilos", "Comportamentos", "Back-End"
        ]
    ?>
    <table border="1">
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
            <?php foreach($tag as $tag => $number){?> 
        <tr>            
            <td><?=$number?></td>
            <td><?=$tag?></td>
            <td><?=$tag?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>